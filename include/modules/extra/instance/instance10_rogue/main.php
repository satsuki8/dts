<?php

namespace instance10
{
	$invscore_lvl = array(0,10,20,30,40,50,60,70);
	
	function init() {
		eval(import_module('skillbase','player'));
		if(!isset($valid_skills[20])) {
			$valid_skills[20] = array();
		}
		$valid_skills[20] += array(181,951,952,960,962,964);
		$typeinfo[71] = '行商';
	}
	
	function parse_itmuse_desc($n, $k, $e, $s, $sk){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess($n, $k, $e, $s, $sk);
		
		if(strpos($k,'Y')===0 || strpos($k,'Z')===0){
			if ($n == '任务脱离程序') {
				$ret .= '使用后解除自己的地图限制，但无法再接取与完成任务；若没有其他玩家可达成『最后幸存』结局';
			}elseif ($n == '蒙尘的游戏解除钥匙') {
				$ret .= '使用后达成『锁定解除』胜利';
			}elseif ($n == '幻境破解程序') {
				$ret .= '使用后可进行幻境系统破解，完成破解后达成『幻境解离』胜利';
			}elseif ($n == '挑战者之证') {
				$ret .= '使用后可召唤通往『幻境解离』结局的剧情NPC';
			}elseif ($n == '最后的钥匙') {
				$ret .= '使用后可召唤通往『核弹引爆』结局的剧情NPC';
			}
		}
		return $ret;
	}
	
	//肉鸽模式自动选择鸽勇者
	function get_enter_battlefield_card($card){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		$card = $chprocess($card);
		if (20 == $gametype){
			$card=1002;
		}
		return $card;
	}
	
	//肉鸽模式自动选择鸽勇者，禁止其他卡片
	function card_validate_get_forbidden_cards($card_disabledlist, $card_ownlist){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		
		$card_disabledlist = $chprocess($card_disabledlist, $card_ownlist);
		if (20 == $gametype)
		{
			foreach($card_ownlist as $cv){
				if(1002 != $cv) $card_disabledlist[$cv][]='e3';
			}
		}
		return $card_disabledlist;
	}
	
	//肉鸽模式选卡界面特殊显示
	function card_validate_display($cardChosen, $card_ownlist, $packlist, $hideDisableButton){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		list($cardChosen, $card_ownlist, $packlist, $hideDisableButton) = $chprocess($cardChosen, $card_ownlist, $packlist, $hideDisableButton);
		if (20 == $gametype)
		{
			$cardChosen = 1002;//自动选择鸽勇者
			$card_ownlist[] = 1002;
			$packlist[] = 'Pungeon';
			$hideDisableButton = 0;
		}
		return array($cardChosen, $card_ownlist, $packlist, $hideDisableButton);
	}
	
	//肉鸽模式入场道具
	function init_enter_battlefield_items($ebp){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		$ebp = $chprocess($ebp);
		eval(import_module('sys'));
		if (20 == $gametype){
			$ebp['itm5'] = '全恢复药剂'; $ebp['itmk5'] = 'Ca'; $ebp['itme5'] = 1; $ebp['itms5'] = 3;$ebp['itmsk5'] = '';
		}
		return $ebp;
	}
	
	function get_npclist(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys','instance10'));
		if (20 == $gametype){
			return $npcinfo_instance10;
		}else return $chprocess();
	}
	
	//商店功能之后用事件替换
	function get_shopconfig(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys'));
		if (20 == $gametype){
			$file = __DIR__.'/config/shopitem.config.php';
			$l = openfile($file);
			return $l;
		}else return $chprocess();
	}
	
	//网购可以正常访问商店，但商品较少
	function get_shop_tag_list()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','instance10'));
		if (20 == $gametype){
			return $shop_tag_list10;
		}
		return $chprocess();
	}
	
	function get_itemfilecont(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys'));
		if (20 == $gametype){
			$file = __DIR__.'/config/mapitem.config.php';
			$l = openfile($file);
			return $l;
		}else return $chprocess();
	}
	
	function get_startingitemfilecont(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys'));
		if (20 == $gametype){
			$file = __DIR__.'/config/stitem.config.php';
			$l = openfile($file);
			return $l;
		}else return $chprocess();
	}
	
	function get_startingwepfilecont(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys'));
		if (20 == $gametype){
			$file = __DIR__.'/config/stwep.config.php';
			$l = openfile($file);
			return $l;
		}else return $chprocess();
	}
	
	function get_trapfilecont(){
		if (eval(__MAGIC__)) return $___RET_VALUE; 
		eval(import_module('sys'));
		if (20 == $gametype){
			$file = __DIR__.'/config/trapitem.config.php';
			$l = openfile($file);
			return $l;
		}else return $chprocess();
	}
	
	//不会连斗
	function checkcombo($time){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','map','gameflow_combo'));
		if(20 == $gametype) return;
		$chprocess($time);
	}
	
	//开局天气和地图初始化
	function rs_game($xmode = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($xmode);
		eval(import_module('sys'));
		if ((20 == $gametype)&&($xmode & 2)) 
		{
			$weather = 1;
			//地图初始化
			eval(import_module('map'));
			$special_areas = array(0, 32, 34);
			$arealist = array_diff($arealist, $special_areas);
			$arealist = array_merge($arealist, $special_areas);
			//进行一次回避禁区……真丑陋！
			$result = $db->query("SELECT pid FROM {$tablepre}players WHERE type=90");
			//获取前10个地点
			$pls_available = array_slice($arealist, 0, 10);
			while($sub = $db->fetch_array($result))
			{
				$pid = $sub['pid'];
				$sub['pls'] = array_randompick($pls_available);
				$db->array_update("{$tablepre}players",$sub,"pid='$pid'");
			}
		}
	}
	
	//开局90分钟后禁区
	function rs_areatime(){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if(20 == $gametype){
			return $starttime + 60*90;//1禁恒为90分钟
		}
		return $chprocess();
	}
	
	//保持0禁
	function get_area_wavenum(){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if (20 == $gametype) return 0;
		return $chprocess();
	}
	
	//禁区时结束游戏
	function check_addarea_gameover($atime){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','map'));
		if (20 == $gametype){
			//进行一个全的灭
			\sys\gameover($atime,'end1');
			return;
		}
		$chprocess($atime);
	}
	
	//商店功能替换为特殊的商店NPC
	function check_in_shop_area($p)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if (20 == $gametype) return false;
		return $chprocess($p);
	}
	
	//合成产物的效果、耐久、属性可能发生变化
	function itemmix_success()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player'));
		if (20 == $gametype)
		{
			if (in_array($itmk0[0], array('W','D')))
			{
				$itme0 = max(round((100 + rand(0,30))/100 * $itme0), 1);
				if ($itms0 != $nosta) $itms0 = max(round((100 + rand(0,30))/100 * $itms0), 1);
				if ($itmk0[0] == 'W')
				{
					$dice = rand(0,99);
					if ($dice < 3)
					{
						$tmpsk = array_randompick(array('f','k','t','d','r','n','y'));
						if (!\itemmain\check_in_itmsk($tmpsk, $itmsk0)) $itmsk0 .= $tmpsk;
					}
					elseif ($dice < 30)
					{
						$tmpsk = array_randompick(array('u','e','i','w','p','N','H','z'));
						if (!\itemmain\check_in_itmsk($tmpsk, $itmsk0)) $itmsk0 .= $tmpsk;
					}
				}
				elseif ($itmk0[0] == 'D')
				{
					$dice = rand(0,99);
					if ($dice < 3)
					{
						$tmpsk = array_randompick(array('B','b','Z','h'));
						if (!\itemmain\check_in_itmsk($tmpsk, $itmsk0)) $itmsk0 .= $tmpsk;
					}
					elseif ($dice < 30)
					{
						$tmpsk = array_randompick(array('A','a','P','K','G','C','D','F','R','q','U','I','E','W','H','M','m','z'));
						if (!\itemmain\check_in_itmsk($tmpsk, $itmsk0)) $itmsk0 .= $tmpsk;
					}
				}
			}
		}
		$chprocess();
	}
	
	//记录吃技能核心次数
	function use_skcore_success(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if (20 == $gametype)
		{
			if (\skillbase\skill_query(951,$pa))
			{
				$sc_count = (int)\skillbase\skill_getvalue(951,'sc_count',$pa);
				\skillbase\skill_setvalue(951,'sc_count',$sc_count+1,$pa);
			}
		}
		$chprocess($pa);
	}
	
	function itemuse(&$theitem)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','logger'));
		$itm=&$theitem['itm']; $itmk=&$theitem['itmk'];
		$itme=&$theitem['itme']; $itms=&$theitem['itms']; $itmsk=&$theitem['itmsk'];	
		if (20 == $gametype)
		{
			//无法使用移动PC
			if (strpos($itmk, 'EE') === 0)
			{
				$log .= "你使用了{$itm}，却发现没有可以连接上的网络。怎么会这样？<br>";
				return;
			}
			//每个人只能吃15个技能核心
			elseif (strpos($itmk, 'SC') === 0)
			{
				$sc_count = (int)\skillbase\skill_getvalue(951,'sc_count',$sdata);
				if ($sc_count >= 15)
				{
					$log .= "<span class=\"yellow b\">你已经使用过15个技能核心，无法再使用了。</span><br>";
					return;
				}
			}
			//使用结局道具
			elseif (strpos($itmk, 'Y') === 0 || strpos($itmk, 'Z') === 0)
			{
				if ($itm == '任务脱离程序')
				{
					$end2_flag = (int)\skillbase\skill_getvalue(951,'end2_flag',$sdata);
					if (!$end2_flag)
					{
						\skillbase\skill_setvalue(951,'end2_flag',1,$sdata);
						\skillbase\skill_lost(960,$sdata);
						$log .= "<span class=\"red b\">你将自己与任务系统的连接断开了。现在你可以自由前往其他地点了。</span><br>在没有其他玩家存活后，你可以使用该道具完成『最后幸存』结局。<br>";
						return;
					}
					if (!\sys\check_alivelist_teamwin())
					{
						$log .= "<span class=\"red b\">还有其他存活的玩家。</span><br>";
						return;
					}
					else
					{
						$winner_flag = 2;
						\player\player_save($sdata, 1);
						$url = 'end.php';
						\sys\gameover($now, 'end2', $name);
					}
				}
				elseif ($itm == '蒙尘的游戏解除钥匙')
				{
					$winner_flag = 3;
					\player\player_save($sdata, 1);
					$url = 'end.php';
					\sys\gameover($now, 'end3', $name);
				}
				elseif ($itm == '幻境破解程序')
				{
					$ueen = $theitem['itmn'];
					$uee_extra_pos = (int)get_var_input('uee_extra_pos');
					if($uee_extra_pos == 0) {
						if (empty($gamevars['hack_state'])) \item_uee_extra\itemuse_uee_extra_reset();
						ob_start();
						include template(MOD_ITEM_UEE_EXTRA_USE_UEE_EXTRA);
						$cmd = ob_get_contents();
						ob_end_clean();
					}
					elseif ($uee_extra_pos <= 0 || $uee_extra_pos > \item_uee_extra\uee_extra_get_hack_num())
					{
						$log .= "输入参数错误。<br>";
						$mode = 'command';
						return true;
					}
					else
					{
						$ret = \item_uee_extra\itemuse_uee_extra($uee_extra_pos);
						if ($ret)
						{
							$winner_flag = 7;
							\player\player_save($sdata, 1);
							$url = 'end.php';
							\sys\gameover($now, 'end7', $name);
						}
						else
						{
							include template(MOD_ITEM_UEE_EXTRA_USE_UEE_EXTRA);
							$cmd = ob_get_contents();
							ob_end_clean();
						}
					}
					return;
				}
				elseif ($itm == '挑战者之证')
				{
					$log .= "你使用了<span class=\"yellow b\">$itm</span>。<br>新的敌人加入了战场！<br>";
					\randnpc\add_randnpc(19, 1, 0, 0, 0, 1, array(0), 1);
					\randnpc\add_randnpc(18, 3, 0, 0, 0, 1, array(0), 1);
					addnews($now, 'instance10_end7npc', $name, $itm);
					$itm = $itmk = $itmsk = '';
					$itme = $itms = 0;
					return;
				}
				elseif ($itm == '最后的钥匙')
				{
					$log .= "你使用了<span class=\"yellow b\">$itm</span>。<br>新的敌人加入了战场！<br>";
					\randnpc\add_randnpc(20, 1, 0, 0, 0, 1, array(0), 1);
					addnews($now, 'instance10_end5npc', $name, $itm);
					$itm = $itmk = $itmsk = '';
					$itme = $itms = 0;
					return;
				}
			}
		}
		$chprocess($theitem);
	}
	
	//进场后随机获得三个1级任务；开局位于随机一个存在的地图
	function post_enterbattlefield_events(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($pa);
		eval(import_module('sys'));
		if (20 == $gametype)
		{
			\skillbase\skill_setvalue(951,'stage',1,$pa);
			\skill960\get_rand_task($pa, 1, 3);
			$pa['pls'] = array_randompick(instance10_get_pa_pls_available($pa));
		}
	}
	
	//失去任务时，根据调查度获得新的任务
	function remove_task(&$pa, $taskid)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($pa, $taskid);
		eval(import_module('sys'));
		if (20 == $gametype)
		{
			eval(import_module('skill960'));
			if (isset($tasks_info[$taskid]['rank']) && $tasks_info[$taskid]['rank'] <= 10)
			{
				eval(import_module('instance10'));
				$invscore = (int)\skillbase\skill_getvalue(960,'invscore',$pa);
				$stage = (int)\skillbase\skill_getvalue(951,'stage',$pa);
				if ($invscore < $invscore_lvl[$stage])
				{
					\skill960\get_rand_task($pa, $stage, 1);
				}
				elseif ($stage < 7)
				{
					eval(import_module('logger'));
					\skill960\remove_task($pa, 'normal');
					$log .= "<span class=\"yellow b\">你完成了本层的全部任务！请在准备完成后点击左侧的“前往下层”。</span><br>";
				}
			}
		}
	}
	
	//前往下层，以及刷新NPC的判定
	function act()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','logger'));
		if ($mode == 'special' && $command == 'nextstage') 
		{
			if (20 != $gametype)
			{
				$log .= "输入参数错误。<br>";
				return;
			}
			eval(import_module('player','instance10'));
			$invscore = (int)\skillbase\skill_getvalue(960,'invscore',$sdata);
			$stage = (int)\skillbase\skill_getvalue(951,'stage',$sdata);
			if ($invscore < $invscore_lvl[$stage])
			{
				$log .= "你在本层的调查度不足。<br>";
				return;
			}
			if ($stage >= 7)
			{
				$log .= "已经没有下一层给你冲了！<br>";
				return;
			}
			eval(import_module('logger'));
			$stage_new = $stage + 1;
			$log .= "<span class=\"yellow b\">你进入了第{$stage_new}层！</span><br>";
			\skillbase\skill_setvalue(951,'stage',$stage_new,$sdata);
			\skill960\remove_task($sdata, 'all');
			if ($stage_new >= 7) \skill960\get_rand_task($sdata, $stage_new, 2);
			else \skill960\get_rand_task($sdata, $stage_new, 3);
			//获得BOSS任务，在3,5,7层
			if ($stage_new >= 7) \skill960\add_task($sdata, 303);
			elseif ($stage_new == 5) \skill960\add_task($sdata, 302);
			elseif ($stage_new == 3) \skill960\add_task($sdata, 301);
			
			if (!isset($gamevars['instance10_stage'])) $gamevars['instance10_stage'] = 1;
			if ($stage_new > $gamevars['instance10_stage'])
			{
				$log .= "<span class=\"yellow b\">新的敌人加入了战场……</span><br>";
				addnews($now, 'instance10_newstage', $name, $stage_new);
				for ($i=$gamevars['instance10_stage']+1; $i<=$stage_new; $i++)
				{
					//此处刷新到当前层的地图
					$pls_available = array_diff(instance10_get_pa_pls_available_core($i), array(0, 32, 34));
					\randnpc\add_randnpc(2*$i-1, 20, 0, 0, 0, 0, $pls_available);
					\randnpc\add_randnpc(2*$i, 20, 0, 0, 0, 0, $pls_available);
					//刷新boss
					if ($i == 3)
					{
						\randnpc\add_randnpc(7, 1, 0, 0, 0, 1, $pls_available, 1);
					}
					elseif ($i == 5)
					{
						\randnpc\add_randnpc(11, 1, 0, 0, 0, 1, $pls_available, 1);
					}
					elseif ($i == 7)
					{
						\randnpc\add_randnpc(15, 1, 0, 0, 0, 1, $pls_available, 1);
					}
				}
				$gamevars['instance10_stage'] = $stage_new;
				save_gameinfo();
			}
			return;
		}
		
		$chprocess();
	}
	
	//可前往地点
	function check_can_enter($pno)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys'));
		if (20 == $gametype)
		{
			return in_array($pno, instance10_get_pa_pls_available());
		}
		return $chprocess($pno);
	}

	//获取可前往地点，目前的规则是截取禁区顺序列表中间的一段，不同层数的段不同
	function instance10_get_pa_pls_available(&$pa = NULL)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$stage = (int)\skillbase\skill_getvalue(951,'stage',$pa);
		$end2_flag = (int)\skillbase\skill_getvalue(951,'end2_flag',$pa);		
		return instance10_get_pa_pls_available_core($stage, $end2_flag);
	}

	//获取可前往地点的核心代码，与玩家无关
	function instance10_get_pa_pls_available_core($stage, $end2_flag = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$arealist = get_var_in_module('arealist','sys');
		if (!$end2_flag) return array_slice($arealist, max(0, 5 * $stage - 10), 10);
		else return array_slice($arealist, 0, max(10, 5 * $stage));
	}
	
	//肉鸽模式特殊合成
	function get_mixinfo()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess();
		eval(import_module('sys'));
		if (20 == $gametype)
		{
			$inst10_mixinfo = array
			(
				array('class' => 'wk', 'stuff' => array('大西瓜','魔王の剑'),'result' => array('『七杀剑』','WK',7777,'∞','reVOLtR')),
				array('class' => 'item', 'stuff' => array('代码聚合体的ID卡','数据碎片的ID卡','红杀的ID卡'),'result' => array('挑战者之证','Z',1,1,''))
			);
			$ret = array_merge($ret, $inst10_mixinfo);
		}
		return $ret;
	}
	
	function parse_news($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr = array())
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player'));
		
		if($news == 'instance10_newstage') 
			return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"yellow b\">{$a}进入了第{$b}层！同时，新的敌人加入了战场！</span></li>";
		elseif($news == 'instance10_end7npc') 
			return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"red b\">{$a}使用了{$b}，让新的敌人加入了战场！</span></li>";
		elseif($news == 'instance10_end5npc') 
			return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"red b\">{$a}使用了{$b}，让新的敌人加入了战场！</span></li>";
		
		return $chprocess($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr);
	}
	
}

?>