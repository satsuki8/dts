<?php

namespace skill981
{
	//每一个等级的敌人配置，共16级
	//每个数组中键名为随机敌人的等级（randnpc模块中的rank），键值为刷新数量
	$skill981_enemies = array(
		1 => array(3=>3,4=>1),
		2 => array(4=>3,5=>1),
		3 => array(5=>3,6=>1),
		4 => array(6=>3,7=>1),
		5 => array(7=>3,8=>1),
		6 => array(8=>3,9=>1),
		7 => array(9=>2,10=>1),
		8 => array(10=>2,11=>1),
		9 => array(11=>2,12=>1),
		10 => array(12=>2,13=>1),
		11 => array(13=>2,14=>1),//BOSS层，待完成
		12 => array(14=>2,15=>1),
		13 => array(15=>2,16=>1),
		14 => array(16=>2,17=>1),
		15 => array(17=>2,18=>1),
		16 => array(18=>2,19=>1)//BOSS层，待完成
	);
	
	//每一个等级的奖励盒数量
	$skill981_prizebox_num = array(
		1 => 3,
		2 => 2,
		3 => 2,
		4 => 2,
		5 => 2,
		6 => 1,
		7 => 1,
		8 => 1,
		9 => 1,
		10 => 1,
		11 => 1,
		12 => 2,
		13 => 2,
		14 => 2,
		15 => 2,
		16 => 1
	);
	
	//所有等级的奖励道具列表
	//道具的数值依次为：名称、类别、效果值、耐久值、属性、权重
	//特殊的道具属性：rdsk_S、rdsk_A、rdsk_B、rdsk_C表示对应等级的一个随机技能；card_S、card_A、card_B、card_C表示对应等级的一张随机卡片，在生成奖励时确定
	$skill981_prizeitems = array(
		0 => array( //初始奖励
			array('「金满之壶」','Y',1,1,'',1),//额外金钱
			array('「更大！更好！更强！」','Y',1,1,'',1),//额外生命上限
			array('■■■的记忆片段','MB',1,1,'^mbid984^mblvl1',1),//额外盒子
			array('幻铁的记忆片段','MB',1,1,'^mbid984^mblvl2',1),//额外改造核心
			array('「强欲之壶」','MB',1,1,'^mbid984^mblvl3',1),//额外卡牌包
		),
		1 => array(
			array('德国BOY的键盘','WP',150,'∞','er',5),
			array('【红杀铁剑·流火】','WK',280,100,'uc',5),
			array('☆主体思想的光芒☆','WD',166,66,'dN',3),
			array('☆天降伟人的指示☆','WD',166,66,'dc',3),
			array('★伊吹瓢★','X',1,1,'',3),
			array('金符「Metal Fatigue」','WF',130,'∞','eE',2),
			array('《小黄的精灵球》','WC',233,'∞','ce',3),
			array('『流天类星龙』 ★12(OCG)-仮','WC12',120,'∞','crZ',1),
			array('『AK-47』','WG',140,20,'r',5),
			array('游戏王卡包','ygo',1,12,'',1),
			array('《现代游戏王》','ygo2',1,5,'',2),
			//
			array('『Poini Kune的死库水』','DB',25,10,'Aa',2),
			array('《ACFUN大逃杀攻略》','VV',40,2,'',10),
			array('★技能手册·B级★','VS',1,1,'rdsk_B',6),
			array('N型技能核心·改','SC01',1,1,'',8),
			array('C级技能核心·改','SCC1',1,2,'',8),
			array('B级技能核心·改','SCB1',1,1,'',8),
			array('★透明卡砖·B级★','VO1',1,1,'card_B',15),
			array('★透明卡砖·B级★','VO1',1,1,'card_B',15),
			array('陈旧的大逃杀卡牌包','VO9',1,2,'',6),
			array('【神经强化剂】','ME',20,2,'',10),
			array('改造核心·C级','EC',1,2,'',15),
			array('红宝石方块','X',1,2,'',1),
			array('绿宝石方块','X',1,2,'',1),
			array('蓝宝石方块','X',1,2,'',1),
			array('心金方块','X',1,2,'',1),
			array('魂银方块','X',1,2,'',1),
			array('MEGA宝石方块','X',1,2,'',1),
			array('一袋金钱','YY',500,1,'',8),
		),
		2 => array(
			array('冰棍棒','WP',19,39,'ir',4),
			array('『诺基亚3210』','WP',321,9999,'NAa^ac1Z',2),
			array('Azurewrath','WK',82,122,'rci',5),
			array('『真空内爆弹』','WD',280,120,'d',5),
			array('地狱波动炮','WF',233,'∞','Yz',5),
			array('『真红莲超新星龙』 ★12 -仮','WC12',150,'∞','udZ',1),
			array('『军用火焰放射器』','WG',400,80,'u',5),
			array('游戏王卡包','ygo',1,18,'',1),
			array('《现代游戏王》','ygo2',1,8,'',3),
			//
			array('『劲爆小包』','DBS',10,10,'^st_1^vol5',3),
			array('《ACFUN大逃杀攻略》','VV',40,4,'',10),
			array('商店会员卡','VS',1,1,'69',5),
			array('★技能手册·B级★','VS',1,1,'rdsk_B',6),
			array('N型技能核心·改','SC01',1,1,'',8),
			array('C级技能核心·改','SCC1',1,2,'',8),
			array('B级技能核心·改','SCB1',1,1,'',8),
			array('★透明卡砖·B级★','VO1',1,1,'card_B',15),
			array('★透明卡砖·B级★','VO1',1,1,'card_B',15),
			array('陈旧的大逃杀卡牌包','VO9',1,3,'',6),
			array('【神经强化剂】','ME',20,3,'',10),
			array('钢钉','Y',60,7,'',4),
			array('贤者之磨刀石','Y',60,6,'',4),
			array('改造核心·C级','EC',1,3,'',15),
			array('红宝石方块','X',1,2,'',1),
			array('绿宝石方块','X',1,2,'',1),
			array('蓝宝石方块','X',1,2,'',1),
			array('心金方块','X',1,2,'',1),
			array('魂银方块','X',1,2,'',1),
			array('MEGA宝石方块','X',1,2,'',1),
			array('一袋金钱','YY',1000,1,'',8),
		),
		3 => array(
			array('冰棍棒','WP',19,39,'ir',4),
			array('森之妖精的棍棒','WP',200,60,'re',2),
			array('夜刀【月影】','WK',130,170,'rpc',5),
			array('烈焰风暴','WD',92,300,'urdZ^ac1',2),
			array('『巨兽鲨』','WG',180,240,'rc',4),
			array('『流天类星龙』 ★12 -仮','WC12',160,'∞','crZ',1),
			array('《现代游戏王》','ygo2',1,12,'',5),
			array('☆八星认证☆','X',8,1,'',2),
			array('《小黄的收服特训》','VC',253,1,'',3),
			array('《小黄的常磐之力》','VC',150,1,'^res_<:comp_itmsk:>{《小黄的治愈之力》,VS,1,1,76,}1^rtype1',3),
			//
			array('『劲爆小包』','DBS',10,10,'^st_1^vol5',5),
			array('食堂的盒饭','HR',50,10,'',3),
			array('《ACFUN大逃杀攻略》','VV',40,6,'',10),
			array('商店会员卡','VS',1,1,'69',5),
			array('★王♂之奥义★','VS',1,1,'30',5),
			array('【雨だれの歌】','ss',60,1,'',3),
			array('《魔导百科全书·起》','VF',50,1,'^alt_<:comp_itmsk:>{SC02,SC02,SC02,SC02,SCC2,SCC2,SCB2,SCB2,SCA2,SCS2}1^ahid2',3),
			array('★技能手册·A级★','VS',1,1,'rdsk_A',6),
			array('N型技能核心·改','SC01',1,2,'',8),
			array('B级技能核心·改','SCB1',1,2,'',8),
			array('A级技能核心·改','SCA1',1,1,'',8),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',15),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',5),
			array('普通的大逃杀卡牌包','VO2',1,3,'',6),
			array('★Ranmen奖券★','VO1',1,1,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,1,'1105',2),
			array('★Top Players奖券★','VO1',1,1,'1106',2),
			array('★Standard Pack奖券★','VO1',1,1,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,1,'1109',2),
			array('★Way of Life奖券★','VO1',1,1,'1110',2),
			array('★Best DOTO奖券★','VO1',1,1,'1111',2),
			array('【神经强化剂】','ME',20,4,'',10),
			array('【肉体强化剂】','MH',50,3,'',10),
			array('钢钉','Y',60,8,'',4),
			array('贤者之磨刀石','Y',60,7,'',4),
			array('改造核心·C级','EC',1,4,'',15),
			array('自动叠甲装置','YS',20,20,'',4),
			array('红宝石方块','X',1,2,'',1),
			array('绿宝石方块','X',1,2,'',1),
			array('蓝宝石方块','X',1,2,'',1),
			array('心金方块','X',1,2,'',1),
			array('魂银方块','X',1,2,'',1),
			array('MEGA宝石方块','X',1,2,'',1),
			array('一袋金钱','YY',1500,1,'',8),
		),
		4 => array(
			array('幻葬『夜雾幻影杀人鬼』','WC',400,'∞','krnyN',2),
			array('精灵片翼','WK',300,200,'uidy',5),
			array('烈焰风暴','WD',92,300,'urdZ^ac1',3),
			array('《小黄的超级球》','WC',233,'∞','Zrce',3),
			array('《现代游戏王》','ygo2',1,16,'',5),
			array('☆八星认证☆','X',8,1,'',2),
			array('《小黄的收服特训》','VC',253,1,'',3),
			array('《小黄的常磐之力》','VC',150,1,'^res_<:comp_itmsk:>{《小黄的治愈之力》,VS,1,1,76,}1^rtype1',3),
			array('《魔女的魔导书》','X',1,1,'',2),
			//
			array('★共享单车★','DFS',100,10,'^hu100',5),
			array('★王♂之奥义★','VS',1,1,'30',5),
			array('【雨だれの歌】','ss',60,1,'',3),
			array('礼品盒','p',1,6,'',3),
			array('《魔导百科全书·起》','VF',50,1,'^alt_<:comp_itmsk:>{SC02,SC02,SC02,SC02,SCC2,SCC2,SCB2,SCB2,SCA2,SCS2}1^ahid2',3),
			array('★技能手册·A级★','VS',1,1,'rdsk_A',6),
			array('N型技能核心·改','SC01',1,2,'',8),
			array('B级技能核心·改','SCB1',1,2,'',8),
			array('A级技能核心·改','SCA1',1,1,'',8),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',15),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',5),
			array('普通的大逃杀卡牌包','VO2',1,3,'',6),
			array('★Ranmen奖券★','VO1',1,1,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,1,'1105',2),
			array('★Top Players奖券★','VO1',1,1,'1106',2),
			array('★Standard Pack奖券★','VO1',1,1,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,1,'1109',2),
			array('★Way of Life奖券★','VO1',1,1,'1110',2),
			array('★Best DOTO奖券★','VO1',1,1,'1111',2),
			array('【神经强化剂】','ME',20,5,'',10),
			array('【肉体强化剂】','MH',50,4,'',10),
			array('钢钉','Y',60,12,'',4),
			array('贤者之磨刀石','Y',60,10,'',4),
			array('改造核心·B级','EC',1,1,'1',12),
			array('自动叠甲装置','YS',20,30,'',4),
			array('红宝石方块','X',1,3,'',1),
			array('蓝宝石方块','X',1,3,'',1),
			array('绿宝石方块','X',1,3,'',1),
			array('翡翠方块','X',1,3,'',1),
			array('四面的腿','PB4',1,1,'x',1),
			array('四面的腿','PB4',1,1,'x',1),
			array('四面的腿','PB4',1,1,'x',1),
			array('四面的腿','PB4',1,1,'x',1),
			array('一袋金钱','YY',2000,1,'',8),
		),
		5 => array(
			array('★血腥玛丽★Bloody Mary','WD',310,150,'dw^ac1',3),
			array('★公牛子弹★Bull Shot','WD',210,300,'dr^ac1',3),
			array('精灵片翼','WK',300,200,'uidy',5),
			array('■金属风暴■','WG',420,20,'r',4),
			array('烈焰风暴','WD',92,300,'urdZ^ac1',4),
			array('《小黄的超级球》','WC',233,'∞','Zrce',3),
			array('《曾伽·宗博尔特自传》','VK',320,1,'',2),
			array('☆十星认证☆','X',10,1,'',2),
			array('★连接认证3★','X',3,1,'',2),
			//
			array('★共享单车★','DFS',100,10,'^hu100',5),
			array('★王♂之威压★','MB',1,1,'^mbid404^mblvl4',5),
			array('亲手制作的鲷鱼烧','HB',500,100,'',15),
			array('礼品盒','p',1,8,'',3),
			array('《魔导百科全书·起》','VF',50,1,'^alt_<:comp_itmsk:>{SC02,SC02,SC02,SC02,SCC2,SCC2,SCB2,SCB2,SCA2,SCS2}1^ahid2',3),
			array('★技能手册·A级★','VS',1,1,'rdsk_A',6),
			array('N型技能核心·改','SC01',1,2,'',8),
			array('B级技能核心·改','SCB1',1,2,'',8),
			array('A级技能核心·改','SCA1',1,1,'',8),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',15),
			array('★透明卡砖·A级★','VO1',1,1,'card_A',5),
			array('精致的大逃杀卡牌包','VO3',1,3,'',6),
			array('★Ranmen奖券★','VO1',1,1,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,1,'1105',2),
			array('★Top Players奖券★','VO1',1,1,'1106',2),
			array('★Standard Pack奖券★','VO1',1,1,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,1,'1109',2),
			array('★Way of Life奖券★','VO1',1,1,'1110',2),
			array('★Best DOTO奖券★','VO1',1,1,'1111',2),
			array('【神经强化剂】','ME',20,6,'',10),
			array('【肉体强化剂】','MH',50,5,'',10),
			array('钢钉','Y',60,16,'',4),
			array('贤者之磨刀石','Y',60,14,'',4),
			array('改造核心·B级','EC',1,1,'1',12),
			array('自动叠甲装置','YS',20,40,'',4),
			array('红宝石方块','X',1,3,'',1),
			array('蓝宝石方块','X',1,3,'',1),
			array('绿宝石方块','X',1,3,'',1),
			array('翡翠方块','X',1,3,'',1),
			array('一袋金钱','YY',2500,1,'',8),
		),
		6 => array(
			array('★血腥玛丽★Bloody Mary','WD',310,150,'dw^ac1',3),
			array('★公牛子弹★Bull Shot','WD',210,300,'dr^ac1',3),
			array('日符「Royal Flare」','WF',270,'∞','udc',3),
			array('月符「Silent Serena」','WF',120,'∞','irc',3),
			array('■落月弓■','WB',720,1,'i',3),
			array('【最终鬼畜兵器】','WG',640,300,'uNd',5),
			array('【KEY系催泪弹】','WD',3600,5,'zd',1),
			array('☆十星认证☆','X',10,1,'',2),
			array('★连接认证3★','X',3,1,'',2),
			//
			array('★振金神盾★','DAS',200,20,'^hu200',4),
			array('★王♂之威压★','MB',1,1,'^mbid404^mblvl4',5),
			array('『动力外骨骼』','DBS',500,100,'R',1),
			array('真-红色的发圈','DH',500,150,'KG',2),
			array('小空','DA',500,150,'CD',2),
			array('真 - 幻想戏服','DB',500,150,'PF',2),
			array('《ACFUN大逃杀攻略》','VV',40,12,'',10),
			array('礼品盒','p',1,10,'',3),
			array('《魔导百科全书·终》','VF',100,2,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',3),
			array('★技能手册·S级★','VS',1,1,'rdsk_S',7),
			array('N型技能核心·改','SC01',1,3,'',8),
			array('A级技能核心·改','SCA1',1,2,'',8),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',10),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('精致的大逃杀卡牌包','VO3',1,3,'',4),
			array('★Ranmen奖券★','VO1',1,2,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,2,'1105',2),
			array('★Top Players奖券★','VO1',1,2,'1106',2),
			array('★Standard Pack奖券★','VO1',1,2,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,2,'1109',2),
			array('★Way of Life奖券★','VO1',1,2,'1110',2),
			array('★Best DOTO奖券★','VO1',1,2,'1111',2),
			array('【神经强化剂】','ME',20,7,'',10),
			array('【肉体强化剂】','MH',50,6,'',10),
			array('钢钉','Y',60,20,'',4),
			array('贤者之磨刀石','Y',60,18,'',4),
			array('『祝福宝石』','Y',1,3,'Z',6),
			array('R.M.『霜铸炎甲』','EA',1,1,'',10),
			array('武器改造晶体·山铜','EI',1,1,'',12),
			array('改造核心·B级','EC',1,2,'1',12),
			array('自动叠甲装置','YS',20,50,'',4),
			array('红宝石方块','X',1,3,'',1),
			array('蓝宝石方块','X',1,3,'',1),
			array('绿宝石方块','X',1,3,'',1),
			array('翡翠方块','X',1,3,'',1),
			array('一袋金钱','YY',3000,1,'',8),
		),
		7 => array(
			array('★血腥玛丽★Bloody Mary','WD',310,150,'dw^ac1',3),
			array('★公牛子弹★Bull Shot','WD',210,300,'dr^ac1',3),
			array('日符「Royal Flare」','WF',270,'∞','udc',3),
			array('月符「Silent Serena」','WF',120,'∞','irc',3),
			array('【最终鬼畜兵器】','WG',640,300,'uNd',5),
			array('★连接认证4★','X',4,1,'',2),
			//
			array('★振金神盾★','DAS',200,20,'^hu200',4),
			array('★王♂之逆转★','VS',1,1,'754',5),
			array('『动力外骨骼』','DBS',500,100,'R',1),
			array('真-红色的发圈','DH',500,150,'KG',2),
			array('小空','DA',500,150,'CD',2),
			array('真 - 幻想戏服','DB',500,150,'PF',2),
			array('礼品盒','p',1,15,'',3),
			array('《魔导百科全书·终》','VF',100,2,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',3),
			array('★技能手册·S级★','VS',1,1,'rdsk_S',7),
			array('N型技能核心·改','SC01',1,3,'',8),
			array('A级技能核心·改','SCA1',1,2,'',8),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',10),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('精致的大逃杀卡牌包','VO3',1,4,'',4),
			array('★Ranmen奖券★','VO1',1,2,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,2,'1105',2),
			array('★Top Players奖券★','VO1',1,2,'1106',2),
			array('★Standard Pack奖券★','VO1',1,2,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,2,'1109',2),
			array('★Way of Life奖券★','VO1',1,2,'1110',2),
			array('★Best DOTO奖券★','VO1',1,2,'1111',2),
			array('【肉体强化剂】','MH',50,7,'',10),
			array('钢钉','Y',60,24,'',4),
			array('贤者之磨刀石','Y',60,22,'',4),
			array('『祝福宝石』','Y',1,3,'Z',8),
			array('R.M.『霜铸炎甲』','EA',1,1,'',10),
			array('武器改造晶体·山铜','EI',1,1,'',12),
			array('改造核心·B级','EC',1,2,'1',12),
			array('自动叠甲装置','YS',20,60,'',4),
			array('一袋金钱','YY',3500,1,'',8),
		),
		8 => array(
			array('☆金色闪光☆','WJ',700,1,'NS',3),
			array('《小黄的大师球》','WC',493,'∞','ZcrdNe',1),
			array('★连接认证4★','X',4,1,'',2),
			//
			array('★荆棘王冠★','DHS',300,30,'^hu300',5),
			array('★王♂之逆转★','VS',1,1,'754',5),
			array('黄金秋刀鱼','HB',960,320,'',15),
			array('礼品盒','p',1,20,'',3),
			array('《魔导百科全书·终》','VF',100,2,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',3),
			array('★技能手册·S级★','VS',1,1,'rdsk_S',7),
			array('A级技能核心·改','SCA1',1,2,'',8),
			array('S级技能核心·改','SCS1',1,1,'',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',10),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('精致的大逃杀卡牌包','VO3',1,3,'',4),
			array('★Ranmen奖券★','VO1',1,2,'1104',2),
			array('★東埔寨Protoject奖券★','VO1',1,2,'1105',2),
			array('★Top Players奖券★','VO1',1,2,'1106',2),
			array('★Standard Pack奖券★','VO1',1,2,'1108',2),
			array('★Crimson Swear奖券★','VO1',1,2,'1109',2),
			array('★Way of Life奖券★','VO1',1,2,'1110',2),
			array('★Best DOTO奖券★','VO1',1,2,'1111',2),
			array('【肉体强化剂】','MH',50,8,'',10),
			array('钢钉','Y',60,36,'',4),
			array('贤者之磨刀石','Y',60,32,'',4),
			array('『灵魂宝石』','Y',1,4,'Z',8),
			array('R.M.『霜铸炎甲』','EA',1,1,'',10),
			array('武器改造晶体·山铜','EI',1,1,'',12),
			array('改造核心·B级','EC',1,3,'1',12),
			array('自动叠甲装置','YS',20,70,'',4),
			array('悲叹之种','X',1,1,'',2),
			array('一袋金钱','YY',4000,1,'',8),
		),
		9 => array(
			array('星符「龙陨星」','WFJ',600,4,'cNfdZ',3),
			array('★神卡认证★','X',12,1,'',2),
			//
			array('★荆棘王冠★','DHS',300,30,'^hu300',5),
			array('★王♂之逆转★','VS',1,1,'754',5),
			array('《ACFUN大逃杀攻略》','VV',40,40,'',10),
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',5),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,10,'',10),
			array('钢钉','Y',60,60,'',4),
			array('贤者之磨刀石','Y',60,50,'',4),
			array('『灵魂宝石』','Y',1,6,'Z',8),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·山铜','EI',1,2,'',12),
			array('武器改造晶体·精钢','EI',1,2,'1',8),
			array('改造核心·A级','EC',1,1,'2',12),
			array('自动叠甲装置','YS',20,80,'',4),
			array('悲叹之种','X',1,1,'',2),
			array('一袋金钱','YY',5000,1,'',8),
		),
		10 => array(
			array('火水木金土符『贤者之石』','WF',5000,'∞','uipwe',2),
			array('★神卡认证★','X',12,1,'',2),
			//
			array('★诅咒铠甲★','DBS',400,40,'^hu400',5),
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,12,'',10),
			array('『灵魂宝石』','Y',1,8,'Z',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·精钢','EI',1,2,'1',12),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',2),
			array('一袋金钱','YY',6000,1,'',8),
		),
		11 => array(
			array('游戏解除钥匙','Y',1,1,'',1),
			array('3秒死机的AIPC','EE',1,1,'',1),//用于解除英灵殿禁区
			array('梦境的前路','Y',1,1,'',1),//用于开启解离路线
		),
		12 => array(
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,12,'',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',3),
			array('一袋金钱','YY',6000,1,'',8),
		),
		13 => array(
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,12,'',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',3),
			array('一袋金钱','YY',6000,1,'',8),
		),
		14 => array(
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,12,'',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',3),
			array('一袋金钱','YY',6000,1,'',8),
		),
		15 => array(
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('【肉体强化剂】','MH',50,12,'',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',4),
			array('一袋金钱','YY',6000,1,'',8),
		),
		16 => array(
			array('『G.A.M.E.O.V.E.R』','Y',1,1,'',1),
			array('深暗幻想','Y',1,1,'',1),//用于开启无尽挑战
		),
		999 => array(
			array('《魔导百科全书·终》','VF',100,3,'^alt_<:comp_itmsk:>{SC02,SCB2,SCB2,SCB2,SCA2,SCA2,SCA2,SCA2,SCS2,SCS2}1^ahid2',4),
			array('S级技能核心·改','SCS1',1,1,'',5),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('★透明卡砖·S级★','VO1',1,1,'card_S',4),
			array('闪耀的大逃杀卡牌包','VO5',1,2,'',5),
			array('精致的大逃杀卡牌包','VO3',1,7,'',5),
			array('【肉体强化剂】','MH',50,15,'',10),
			array('R.M.『霜铸炎甲』','EA',1,2,'',10),
			array('武器改造晶体·绯金','EI',1,2,'2',8),
			array('改造核心·A级','EC',1,1,'2',20),
			array('改造核心·S级','EC',1,1,'3',4),
			array('『灵魂宝石』','Y',1,3,'Z',1),
			array('『祝福宝石』','Y',1,3,'Z',1),
			array('★Ranmen奖券★','VO1',1,3,'1104',1),
			array('★東埔寨Protoject奖券★','VO1',1,3,'1105',1),
			array('★Top Players奖券★','VO1',1,3,'1106',1),
			array('★Standard Pack奖券★','VO1',1,3,'1108',1),
			array('★Crimson Swear奖券★','VO1',1,3,'1109',1),
			array('★Way of Life奖券★','VO1',1,3,'1110',1),
			array('★Best DOTO奖券★','VO1',1,3,'1111',1)
		)
	);
	
}

?>