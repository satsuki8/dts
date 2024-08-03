<?php
namespace logistics
{
	//卡片售卖价格
	//240725：进行一个7折的降价
	$cardtype_sellprice = array(
		'S' => 2400,
		'A' => 1000,
		'B' => 300,
		'C' => 100,
		'M' => 50,
	);
	
	//碎卡和闪卡售卖的价格倍率，比抽卡返还倍率稍低一点
	$card_sellprice_blink_rate = array(
		20 => 20,
		10 => 4,
	);
	
	//售卖物品列表，每个array包含名称、类别、价格、文字介绍、是否非卖品（1为非卖品）
	//类别1表示可使用道具（消耗品），2表示装饰品
	$logistics_shop_items = array(
		1 => array('切糕盒子',1,120,'使用后会随机获得一定量的切糕',0),
		2 => array('闪光贴膜',1,233,'使用后可使一张卡片变为闪烁<span class="yellow b">（需额外消耗切糕）</span>',0),
		3 => array('棱镜碎片',1,999,'使用后可使一张卡片变为镜碎<span class="yellow b">（需额外消耗大量切糕）</span>',0),
		4 => array('模因原液『彩虹』',1,777,'使用后可使一张卡片完成充能并清空各稀有度冷却时间。<span class="cyan b black-shadow">“彩虹的原料就是弱者的鲜血。”</span>',0),
		5 => array('黄鸡玩偶',2,1000,'<span class="yellow b">“咕咕咕！”</span>',0),
		6 => array('棕色的Howling手办',2,1333,'<span class="brickred b black-shadow">“银月哨兵是不死之身！”</span>',0),
		7 => array('深蓝色的S.A.S手办',2,1333,'<span class="blue b white-shadow">“只要能为我的族人复仇，哪怕我堕入永劫地狱也在所不惜！”</span>',0),
		8 => array('天青色的Annabelle手办',2,1333,'<span class="lightblue b black-shadow">“只要你相信神的存在，什么邪恶都没法左右你。”</span>',0),
		9 => array('红色的星海手办',2,1333,'<span class="darkred b white-shadow">“你住酒店时有没有第一时间确认逃生通道的习惯？没有吧？我有。”</span>',0),
		10 => array('粉色的Sophia手办',2,1333,'<span class="ltpurple b black-shadow">“今天的Sophia也是元气满满的哟！”</span>',0),
		11 => array('黑熊手办',2,1888,'<span class="linen b black-shadow">“这个游戏不爆的咯！”</span>',0),
		12 => array('威严的红暮手办',2,2333,'<span class="ltcrimson b black-shadow">“任务执行的成功率越来越低了。”</span>',0),
		13 => array('睿智的蓝凝手办',2,2333,'<span class="ltazure b black-shadow">“什么，是手办？给我也整一个！”</span>',0),
		51 => array('魔法芝士',2,1000,'<span class="red b">一块浸透了红黑色魔力的芝士，似乎有很多个侧面。</span>',0),
		52 => array('男人至死是少年',2,1000,'<span class="orange b">一根特别直的树枝。没什么特别的，现在该我玩了。</span>',0),
		61 => array('咔咔手办',2,1333,'<span class="seagreen b">“我的力量无人能及！”</span>',0),
		99 => array('冰精手办',2,999,'<span class="cyan b">“本小姐最强！”</span>',0),
		114 => array('黄金青眼白龙手办',2,87000000,'<span class="lightblue b black-shadow">以高价格著称的传说之龙。任何竞拍者都将为之倾倒，其吸引力不可估量。</span>',0),
		201 => array('沾满灰尘的大逃杀卡牌包',1,0,'从中可以获得一张<span class="white b">C</span>级卡片',1),
		202 => array('陈旧的大逃杀卡牌包',1,0,'从中有机会获得<span class="brickred b">B</span>级或<span class="white b">C</span>级卡片',1),
		203 => array('普通的大逃杀卡牌包',1,0,'从中有机会获得<span class="cyan b">A</span>/<span class="brickred b">B</span>/<span class="white b">C</span>级卡片',1),
		204 => array('精致的大逃杀卡牌包',1,0,'从中有机会获得<span class="gold b">S</span>/<span class="cyan b">A</span>/<span class="brickred b">B</span>级卡片',1),
		205 => array('★闪熠着光辉的大逃杀卡牌包★',1,0,'从中有机会获得特殊卡片“<span class="gold b">氪金战士</span>”，或一张<span class="gold b">S</span>级或<span class="cyan b">A</span>级的卡片',1),
		206 => array('闪耀的大逃杀卡牌包',1,0,'从中有机会获得<span class="gold b">S</span>/<span class="cyan b">A</span>级卡片',1),
		//编号301开始为成就类装饰品
		301 => array('温泉鸽子手办',2,0,'<span class="yellow b">“炖鸽汤，就是用鸽子炖成的汤……”</span>',1),
		302 => array('水晶骰子组合',2,0,'<span class="gold b">九颗不同颜色的透明骰子，究竟是什么材料制成的？看起来很贵重的样子……</span>',1),
		303 => array('L5爆发的证明',2,0,'<span class="L5 b">“你突然感觉到一种不可思议的力量贯通全身！”</span>',1),
	);
	
	//类别1表示可使用道具（消耗品），2表示装饰品
	$logistics_itemtype = array(
		1 => '消耗品',
		2 => '装饰品',
	);
	
	//卡片镀闪或碎消耗的切糕量
	$cardblink_upgrade_cost = array(
		'S' => array('23333','157200'),
		'A' => array('4666','23333'),
		'B' => array('999','4666'),
		'C' => array('233'),
	);
	
}
?>