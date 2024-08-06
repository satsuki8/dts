<?php

namespace gameflow_base
{
	function init() {}
	
	//routine()外侧已经加过文件锁，理论上本文件的任何函数都不用额外加锁
	function gamestate_prepare_game()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		$gamenum = 0;//去掉这句话会导致不能save_gameinfo()
		
		\sys\reset_game();
		\sys\save_gameinfo();
		\sys\prepare_new_game();
		\sys\rs_game(1+2+4+8+16+32);
		$gamestate = 10;//重设游戏完毕
		\sys\save_gameinfo();
	}
	
	function gamestate_start_game()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys'));
		
		$gamestate = 20;
		addnews($starttime,'newgame',$gamenum);
		systemputchat($starttime,'newgame');
	}
	
	function gamestateupdate()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys'));
		if(!$gamestate) { //判定游戏准备。注意$gamestate==5是游戏正在准备过程中
			$readymin = $readymin > 0 ? $readymin : 1;
			if(($starttime)&&($now > $starttime - $readymin*60)) {
				gamestate_prepare_game();
			}
		}
		if($gamestate == 10) {//判定游戏开始
			if($now >= $starttime) {
				gamestate_start_game();
			}
		}
		if($gamestate >= 20 && $gamestate < 30) {//判定游戏是否停止激活
			check_game_stop_joining_base();
		}
	}

	//判定游戏是否停止激活。这里只判定人数和停止激活时间
	function check_game_stop_joining_base()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if( !empty($gamevars['max_opening_sec']) && $now - $starttime > $gamevars['max_opening_sec']) {//判定游戏停止激活条件A：超过设定的时间
			$gamestate = 30;
			return;
		}
		if( $validnum > 0 ) {//判定游戏停止激活条件B：激活人数足够
			$vlimit = $validlimit;
			if(!empty($gamevars['max_player']) && (int)$gamevars['max_player'] < $vlimit) $vlimit = (int)$gamevars['max_player'];
			if($validnum >= $vlimit) {
				$gamestate = 30;
				return;
			}
		}
	}
	
	//连斗判定，具体在连斗模块重载
	function is_gamestate_combo($disp = 0){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return $gamestate;
	}
	
	function checkendgame(){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys')); 
		if(is_gamestate_combo()) {
			//队伍胜利模式游戏结束判断
			if (in_array($gametype,$teamwin_mode))
			{
				$result = $db->query("SELECT teamID FROM {$tablepre}players WHERE type = 0 AND hp > 0");
				$alivenum = $db->num_rows($result);//全灭直接结束游戏
				if (!$alivenum)
				{
					\sys\gameover();
				}

				$flag=1; $first=1; //有玩家时，需要检查是否有多个teamID
				while($data = $db->fetch_array($result)) 
				{
					if ($first) 
					{ 
						$first=0; $firstteamID=$data['teamID'];
					}
					else  if ($firstteamID!=$data['teamID'] || !$data['teamID'])
					{
						//如果有超过一种teamID，或有超过一个人没有teamID，则游戏还未就结束
						$flag=0; break;
					}
				}
				if ($flag && !$first)
				{
					\sys\gameover();
				}
			}
			else
			{
				if($alivenum <= 1 && $gametype!=2) 
				{
					\sys\gameover();
				}
			}
		}
	}
	
	//刷新入场、存活玩家数。注意不会自动保存
	function update_valid_alivenum()
	{	
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if($gamestate<20) return; //游戏未开始则不会计算
		$validnum = $alivenum =  0;
		$result = $db->query("SELECT * FROM {$tablepre}players WHERE type=0");
		while($pdata = $db->fetch_array($result)){
			list($vadd, $aadd) = check_valid_alivenum_single($pdata);
			if($vadd) $validnum ++;
			if($aadd) $alivenum ++;
		}
	}
	
	function check_valid_alivenum_single($pdata)
	{	
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$vadd = 1; $aadd = 0;
		if($pdata['hp'] > 0) $aadd = 1;
		return Array($vadd, $aadd);
	}
	
	function updategame()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		$chprocess();
		
		gamestateupdate();
		
		update_valid_alivenum();
		
		checkendgame();
	}
}

?>
