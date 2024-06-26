<?php

namespace weather
{
	//天气名
	$wthinfo = Array('晴天','大晴','多云','小雨','暴雨','台风','雷雨','下雪','起雾','浓雾','<span class="yellow b">瘴气</span>','<span class="red b">龙卷风</span>','<span class="cyan b">暴风雪</span>','<span class="blue b">冰雹</span>','<span class="linen b">离子暴</span>','<span class="green b">辐射尘</span>','<span class="purple b">臭氧洞</span>','<span class="gold b">极光</span>','<span class="ltazure b">冷气</span>','<span class="ltcrimson b">暖气</span>');
	
	//天气对物品发现率的影响，加法结合
	$weather_itemfind_obbs = Array(10,20,0,-2,-3,-10,-7,5,-10,-20,0,-7,-5,-30,-5,-20,0,20,20,20);
	
	//天气对人物遭遇率的影响，加法结合
	$weather_meetman_obbs = Array(10,20,0,-2,-3,-10,-7,5,-10,-20,0,-7,-5,-30,-5,-20,0,20,20,20);
	
	//天气对先攻率的影响，加法结合
	$weather_active_obbs = Array(10,20,0,-5,-10,-20,-15,0,-7,-10,-10,-5,0,-5,-20,-5,0,20,20,20);
	
	//天气对攻击力的影响，百分比，加法结合
	$weather_attack_modifier = Array(10,10,0,-5,-10,-20,-15,0,0,7,20,-7,-20,-5,-10,-10,-10,10,0,0);
	
	//天气对防御力的影响，百分比，加法结合
	$weather_defend_modifier = Array(10,30,0,0,-3,-15,-10,0,-20,-30,-50,-5,-20,-3,-20,5,-30,30,0,0);
	
	//是否有雾
	$weather_fog = array (0,0,0,0,0,0,0,0,1,1,0,0,1,0,0,0,0,0,0,0);
}

?>