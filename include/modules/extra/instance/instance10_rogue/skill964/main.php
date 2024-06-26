<?php

namespace skill964
{
	$packcount_lvl = array(2,4,6,8,10,12);//每个卡包buff升级需要使用的卡片张数
	$pack_idx = array(//卡包的编号
		'Standard Pack'=>0,
		'Crimson Swear'=>1,
		'Top Players'=>2,
		'Way of Life'=>3,
		'Best DOTO'=>4,
		'東埔寨Protoject'=>5,
		'Ranmen'=>6
		);
	$packcount_buff = array(//每个卡包的buff的数值，效果
		0 => array(10,20,35,50,70,95),//标准包，减伤
		1 => array(10,30,50,90,150,300),//红杀包，物伤增加
		2 => array(50,110,180,300,700,3000),//玩家包，熟练度增加
		3 => array(2,6,12,18,30,50),//杂烩包，获得经验增加
		4 => array(3,6,10,18,30,50),//电竞包，先攻增加
		5 => array(1,2,3,4,5,7),//東埔寨包，灵系射程增加
		6 => array(10,30,50,90,150,300)//随机包，属伤增加
		);
	$card_combo = array(//特定卡片组合，和需要凑够其中几张，count不设置默认为需要全部凑齐
		1 => array('name' => '红与蓝', 'cards' => array(39,40)),//红暮和蓝凝
		2 => array('name' => '猫', 'cards' => array(165,289,342,351,386,392), 'count' => 3),//NIKO，拷贝猫，三花，阿燐，姬特，猫盒
		3 => array('name' => '熊的力量', 'cards' => array(5,13,95,96), 'count' => 3),//虚子，熊本熊，冰炎
		4 => array('name' => '挑战者', 'cards' => array(70,72,74,75,76,77,78,79,81,82,83,84,85,86,97,117,121,122,124,139,150,153,154,155,162,163,164,167,171,189,192,194,251,257,312,347,359,377,387,393,394,395,400,409), 'count' => 5),//卡名含有挑战者的卡
		5 => array('name' => '永夜异变', 'cards' => array(268,358,352,158,186,277,350,273,290), 'count' => 4),//永夜抄
		);
	
	function init()
	{
		define('MOD_SKILL964_INFO','card;');
		eval(import_module('clubbase'));
		$clubskillname[964] = '共振';
	}
	
	function acquire964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_setvalue(964, 'packcount', '', $pa);
		\skillbase\skill_setvalue(964, 'combo', '', $pa);
	}
	
	function lost964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return 1;
	}
	
	//增加某一项计数
	function add_packcount964($cardpack, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$pcount964 = get_packcount964($pa);
		eval(import_module('skill964'));
		if (isset($pack_idx[$cardpack])) $pcount964[$pack_idx[$cardpack]] += 1;
		\skillbase\skill_setvalue(964, 'packcount', encode964($pcount964), $pa);
	}
	
	//获得计数列表
	function get_packcount964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$pcount964_str = \skillbase\skill_getvalue(964, 'packcount', $pa);
		if (empty($pcount964_str)) return array(0,0,0,0,0,0,0);
		return decode964($pcount964_str);
	}
	
	//增加一个组合
	function add_combo964($comboid, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$combo964 = get_combo964($pa);
		if (empty($combo964)) $combo964 = array();
		$combo964[] = $comboid;
		\skillbase\skill_setvalue(964, 'combo', encode964($combo964), $pa);
		if ($comboid == 3)
		{
			\skillbase\skill_acquire(402,$pa);
			\skillbase\skill_setvalue(402,'lvl','4',$pa);
			\skillbase\skill_acquire(403,$pa);
			\skillbase\skill_setvalue(403,'lvl','5',$pa);
		}
	}
	
	//获得组合列表
	function get_combo964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return decode964(\skillbase\skill_getvalue(964, 'combo', $pa));
	}
	
	//检查组合列表
	function check_combo964(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$cards_uvo = \item_uvo_extra\get_cards_uvo_extra($pa, 1);
		$combo964 = get_combo964($pa);
		eval(import_module('skill964'));
		foreach ($card_combo as $k => $v)
		{
			if (in_array($k, $combo964)) continue;
			if (!isset($v['count']) && empty(array_diff($v['cards'], $cards_uvo))) add_combo964($k, $pa);
			elseif (isset($v['count']))
			{
				$c = 0;
				foreach ($cards_uvo as $cid)
				{
					if (in_array($cid, $v['cards'])) $c += 1;
					if ($c >= $v['count'])
					{
						add_combo964($k, $pa);
						break;
					}
				}
			}
		}
	}
	
	function encode964($arr)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return implode('_', $arr);
	}
	
	function decode964($str)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if(empty($str)) return Array();
		return explode('_', $str);
	}
	
	function add_card_uvo_extra($get_cards, &$pa, $tmp = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($get_cards, $pa, $tmp);
		if ($tmp == 1)
		{
			eval(import_module('cardbase'));
			if (is_array($get_cards))
			{
				foreach ($get_cards as $cid)
				{
					add_packcount964($cards[$cid]['pack'], $pa);
				}
			}
			else add_packcount964($cards[$get_cards]['pack'], $pa);
			check_combo964($pa);
		}
	}
	
	function get_buffrate964($packid, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$pcount964 = get_packcount964($pa);
		if (empty($pcount964[$packid])) return 0;
		eval(import_module('skill964'));
		
		$packcount_lvl = array(2,4,6,8,10,12);
		foreach ($packcount_lvl as $k => $v)
		{
			if ($pcount964[$packid] < $v)
			{
				if ($k == 0) return 0;
				return $packcount_buff[$packid][$k-1];
			}
		}
		return $packcount_buff[$packid][5];
	}
	
	//物理伤害变化
	function get_physical_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r = array();
		if (\skillbase\skill_query(964, $pa))
		{
			$dmggain = get_buffrate964(1, $pa);
			if (in_array(4, get_combo964($pa))) $dmggain += 150;
			if ($dmggain > 0)
			{
				eval(import_module('logger'));
				if ($active) $log .= "<span class=\"yellow b\">「共振」使你造成的物理伤害增加了{$dmggain}%！</span><br>";
				else $log .= " <span class=\"yellow b\">「共振」使{$pd['name']}造成的属性伤害增加了{$dmgdown}%！</span><br>";
				$r = array(1 + $dmggain / 100);
			}
		}
		return array_merge($r,$chprocess($pa,$pd,$active));
	}
	
	//属性伤害变化
	function calculate_ex_attack_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r = array();
		if (\skillbase\skill_query(964, $pa))
		{
			$dmggain = get_buffrate964(6, $pa);
			if ($dmggain > 0)
			{
				eval(import_module('logger'));
				if ($active) $log .= "<span class=\"yellow b\">「共振」使你造成的属性伤害增加了{$dmggain}%！</span><br>";
				else $log .= " <span class=\"yellow b\">「共振」使{$pd['name']}造成的属性伤害增加了{$dmgdown}%！</span><br>";
				$r = array(1 + $dmggain / 100);
			}
		}
		return array_merge($r,$chprocess($pa,$pd,$active));
	}
	
	//射程变化
	function get_weapon_range(&$pa, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess($pa, $active);
		if (\skillbase\skill_query(964, $pa) && $pa['wep_kind']=='F') 
		{
			$ret += get_buffrate964(5, $pa);
		}
		return $ret;
	}
	
	//最终伤害变化
	function get_final_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r = array();
		if (\skillbase\skill_query(964, $pd)) 
		{
			$dmgdown = get_buffrate964(0, $pd);
			if (in_array(5, get_combo964($pa))) $dmgdown = 90 + 0.1 * $dmgdown;
			if ($dmgdown > 0)
			{
				eval(import_module('logger'));
				if ($active) $log .= "<span class=\"yellow b\">「共振」使{$pd['name']}受到的伤害降低了{$dmgdown}%！</span><br>";
				else $log .=" <span class=\"yellow b\">「共振」使你受到的伤害降低了{$dmgdown}%！</span><br>";
				$r[] = 1 - $dmgdown / 100;
			}
		}
		return array_merge($r,$chprocess($pa,$pd,$active));
	}
	
	//熟练度变化
	function get_skill(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(964, $pa)) return $chprocess($pa,$pd,$active) + get_buffrate964(2, $pa);
		return $chprocess($pa,$pd,$active);
	}
	
	//经验变化
	function calculate_attack_exp_gain_base(&$pa, &$pd, $active, $fixed_val=0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess($pa,$pd,$active,$fixed_val);
		if (\skillbase\skill_query(964, $pa)) $ret += get_buffrate964(3, $pa);
		return $ret;
	}
	
	//先攻率变化
	function calculate_active_obbs_multiplier(&$ldata,&$edata)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r = 1;
		if (\skillbase\skill_query(964, $ldata)) $r *= 1 + get_buffrate964(4, $ldata) / 100;
		if (\skillbase\skill_query(964, $edata)) $r /= 1 + get_buffrate964(4, $edata) / 100;
		if ($r != 1) $ldata['active_words'] = \attack\multiply_format($r, $ldata['active_words'],0);
		return $chprocess($ldata,$edata)*$r;
	}
	
	//命中率变化
	function get_hitrate_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess($pa, $pd, $active);
		if (\skillbase\skill_query(964,$pd) && in_array(2, get_combo964($pd)))
		{
			$ret *= 0.05;
		}
		return $ret;
	}
	
	//额外属性
	function get_ex_attack_array_core(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$ret = $chprocess($pa, $pd, $active);
		if (\skillbase\skill_query(964,$pa) && in_array(1, get_combo964($pa)))
		{
			$ret = array_merge($ret, array('u','i','f','k','y'));
		}
		return $ret;
	}
	
	//显示技能说明文字
	function show_card_buff_words(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('skill964'));
		$w = "已使用各卡包卡片张数达到<span class=\"lime b\">".implode('/', $packcount_lvl)."</span>时获得增益：<br>";
		$pcount964 = get_packcount964($pa);
		foreach ($pack_idx as $k => $v)
		{
			$w .= "<span class=\"yellow b\">{$k}（{$pcount964[$v]}） </span>";
			$r = get_buffrate964($v, $pa);
			if ($v == 0) $w .= "受到伤害<span class=\"yellow b\">-{$r}%</span><br>";
			elseif ($v == 1) $w .= "造成物理伤害<span class=\"yellow b\">+{$r}%</span><br>";
			elseif ($v == 2) $w .= "熟练度附加<span class=\"yellow b\">$r</span>点<br>";
			elseif ($v == 3) $w .= "战斗获得经验值<span class=\"yellow b\">+{$r}</span><br>";
			elseif ($v == 4) $w .= "先攻率<span class=\"yellow b\">+{$r}%</span><br>";
			elseif ($v == 5) $w .= "使用灵系武器攻击时射程<span class=\"yellow b\">+{$r}</span><br>";
			elseif ($v == 6) $w .= "造成属性伤害<span class=\"yellow b\">+{$r}%</span><br>";
		}
		$combo964 = get_combo964($pa);
		if (!empty($combo964))
		{
			foreach ($combo964 as $c)
			{
				if (isset($card_combo[$c])) $w .= "<br><span class=\"lime b\">【{$card_combo[$c]['name']}】</span> ";
				if ($c == 1) $w .= "视为具有<span class=\"yellow b\">火焰</span>、<span class=\"yellow b\">冻气</span>、<span class=\"yellow b\">灼焰</span>、<span class=\"yellow b\">冰华</span>、<span class=\"yellow b\">属穿</span>属性";
				elseif ($c == 2) $w .= "回避率<span class=\"yellow b\">+95%</span>";
				elseif ($c == 3) $w .= "获得技能“<span class=\"yellow b\">暴风</span>”和“<span class=\"yellow b\">直死4</span>”";
				elseif ($c == 4) $w .= "造成物理伤害<span class=\"yellow b\">+150%</span>";
				elseif ($c == 5) $w .= "受到伤害<span class=\"yellow b\">-90%</span><br>";
			}
		}
		return $w;
	}
	
}

?>