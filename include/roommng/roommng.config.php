<?php

//房间设置

//全局最大房间数目
$max_room_num = 10;

//单人最大房间数目
$max_private_room_num = 3;

//长轮询端口号范围
$room_poll_port_low = 25000;
$room_poll_port_high = 35000;

//永续房超时时间
$soleroom_resettime = 3600;

//永续房个人超时时间
$soleroom_private_resettime = 1800;

//房间类型
$roomtypelist = Array(
	
	0 => Array(
		'name' => 'SOLO模式',
		'gtype' => 10, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'cannot-forbid' => true,//是否不能禁用位置。
		'min-team' => 2,//最小有效队伍数
		'pnum' => 2,	//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
			1 => 1,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
			1 => '5900ff',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可
			0 => '红队',
			1 => '蓝队',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
		'game-option' => array(
			'opening-gamestate' => array(//变量名
				'title' => '入场后游戏状况',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => '40',
						'name' => '进入连斗',
						'title' => '入场后连斗，容易遭遇角色，不容易摸道具',//注意目前这个功能的实现是在instance0模块
						'default' => true,
					),
					array(
						'value' => '30',
						'name' => '停止激活',
						'title' => '入场后只停止激活，发现率正常，死亡180人或者2禁后进入连斗',
					)
				)
			),
			'card-select' => array(//变量名
				'title' => '卡片设置',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => '0',
						'name' => '自选卡片',
						'title' => '参与者在“账号资料”里自选卡片再入场',
						'default' => true,
					),
					array(
						'value' => '1',
						'name' => '仅挑战者',
						'title' => '参与者强制使用挑战者入场',
					),
					array(
						'value' => '2',
						'name' => '与房主相同',
						'title' => '其他参与者使用与房主相同的卡入场',
					)
				)
			)
		)
	),
	/*
	1 => Array(
		'name' => '二队模式',
		'gtype' => 11, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'pnum' => 10,//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 5,
			6 => 5,
			7 => 5,
			8 => 5,
			9 => 5,
		),
		'color' => Array(
			0 => 'ff0022',
			5 => '5900ff',
		),
		'teamID' => Array(
			0 => '红队',
			5 => '蓝队',
		),
		'show-team-leader' => 1,
	),*/
	/*
	2 => Array(
		'name' => '3v3模式',
		'pnum' => 6,
		'leader-position' => Array(
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 3,
			4 => 3,
			5 => 3,
		),
		'color' => Array(
			0 => 'ff0022',
			3 => '5900ff',
		),
		'teamID' => Array(
			0 => '红队',
			3 => '蓝队',
		),
		'show-team-leader' => 1,
	),*/
	/*
	2 => Array(
		'name' => '三队模式',
		'gtype' => 12, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'pnum' => 15,//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 5,
			6 => 5,
			7 => 5,
			8 => 5,
			9 => 5,
			10 => 10,
			11 => 10,
			12 => 10,
			13 => 10,
			14 => 10,
		),
		'color' => Array(
			0 => 'ff0022',
			5 => '5900ff',
			10 => '8cff00',
		),
		'teamID' => Array(
			0 => '红队',
			5 => '蓝队',
			10 => '绿队',
		),
		'show-team-leader' => 1,
	),
	3 => Array(
		'name' => '四队模式',
		'gtype' => 13, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'pnum' => 20,//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 5,
			6 => 5,
			7 => 5,
			8 => 5,
			9 => 5,
			10 => 10,
			11 => 10,
			12 => 10,
			13 => 10,
			14 => 10,
			15 => 15,
			16 => 15,
			17 => 15,
			18 => 15,
			19 => 15,
		),
		'color' => Array(
			0 => 'ff0022',
			5 => '5900ff',
			10 => '8cff00',
			15 => 'ffc700',
		),
		'teamID' => Array(
			0 => '红队',
			5 => '蓝队',
			10 => '绿队',
			15 => '黄队',
 		),
		'show-team-leader' => 1,
	),*/
	4 => Array(
		'name' => '组队模式',
		'gtype' => 14, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'min-team' => 2,//最小有效队伍数
		'pnum' => 25,//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(//先这么办吧，回头如果要改队伍人数上限再说
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 5,
			6 => 5,
			7 => 5,
			8 => 5,
			9 => 5,
			10 => 10,
			11 => 10,
			12 => 10,
			13 => 10,
			14 => 10,
			15 => 15,
			16 => 15,
			17 => 15,
			18 => 15,
			19 => 15,
			20 => 20,
			21 => 20,
			22 => 20,
			23 => 20,
			24 => 20,
		),
		'color' => Array(
			0 => 'ff0022',
			5 => '5900ff',
			10 => '8cff00',
			15 => 'ffc700',
			20 => 'fefefe',
		),
		'teamID' => Array(
			0 => '红队',
			5 => '蓝队',
			10 => '绿队',
			15 => '黄队',
			20 => '白队',
 		),
		'show-team-leader' => 1,
		'game-option' => array(
			'group-num' => array(//变量名
				'title' => '队伍数目',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => '2',
						'name' => '二队',
						'title' => '两支队伍互相对抗',
						'default' => true,
					),
					array(
						'value' => '3',
						'name' => '三队',
						'title' => '三支队伍互相对抗',
					),
					array(
						'value' => '4',
						'name' => '四队',
						'title' => '四支队伍互相对抗',
					),
					array(
						'value' => '5',
						'name' => '五队',
						'title' => '五支队伍互相对抗',
					)
				)
			),
			'opening-gamestate' => array(//变量名
				'title' => '入场后游戏状况',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => '40',
						'name' => '进入连斗',
						'title' => '入场后连斗，容易遭遇角色，不容易摸道具',//注意目前这个功能的实现是在instance0模块
						'default' => true,
					),
					array(
						'value' => '30',
						'name' => '停止激活',
						'title' => '入场后只停止激活，发现率正常，死亡180人或者2禁后进入连斗',
					)
				)
			),
			'card-select' => array(//变量名
				'title' => '卡片设置',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => '0',
						'name' => '自选卡片',
						'title' => '参与者在“账号资料”里自选卡片再入场',
						'default' => true,
					),
					array(
						'value' => '1',
						'name' => '仅挑战者',
						'title' => '参与者强制使用挑战者入场',
					),
					array(
						'value' => '2',
						'name' => '与房主相同',
						'title' => '其他参与者使用与房主相同的卡入场',
					),
					array(
						'value' => '3',
						'name' => '与队长相同',
						'title' => '队员使用与队长相同的卡入场',
					)
				)
			)
		)
	),
	5 => Array(
		'name' => '<font class="yellow b">伐木挑战</font>',
		'gtype' => 15, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => true,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'ready-expire-time' => 60, //准备状态过期时间，单位秒。无此值默认30秒。
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可
			0 => '',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
		'card' => array(
			0 => '0',
		),
		'game-option' => array(
			'area-mode' => array(//变量名
				'title' => '1禁时间设置',//界面显示的提示
				'type' => 'radio',//input类型
				'options' => array(
					array(
						'value' => 'normal',
						'name' => '经典模式',
						'title' => '限制时间为3禁，1禁时间与开始时间有关，可能为30-40分钟不等。可练习游戏基本操作，也可以挑战伐木成就。',
						'default' => true,
					),
					array(
						'value' => 'extreme',
						'name' => '极限模式',
						'title' => '限制时间为1禁，1禁时间严格为40分钟。为熟练玩家提供最充裕的时间来挑战伐木成就。',
					)
				)
			),
			'keep_corpse_in_searchmemory' => array(
				'title' => '尸体拾取设置',
				'type' => 'radio',
				'options' => array(
					array(
						'value' => '1',
						'name' => '拾取后留在视野中',
						'title' => '拾取尸体物品后，尸体依然保留在视野中，但有一定的冷却时间。',
						'default' => true,
					),
					array(
						'value' => '0',
						'name' => '拾取后需重新探索发现',
						'title' => '拾取尸体物品后需要再次探索才能找到尸体，与正常模式相同。',
					)
				)
			),
		)
	),
	6 => Array(
		'name' => '<font class="green b">PVE解离模式</font>',
		'gtype' => 16, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => true,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'pnum' => 3,	//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
			1 => 0,
			2 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可
			0 => '挑战者',
		),
		'show-team-leader' => 1,	//是否显示“队长”标签（如队伍大于1人设为1）
		'card' => array(
			0 => '90',
			1 => '91',
			2 => '92',
		),
		'game-option' => array(
			'keep_corpse_in_searchmemory' => array(
				'title' => '尸体拾取设置',
				'type' => 'radio',
				'options' => array(
					array(
						'value' => '1',
						'name' => '拾取后留在视野中',
						'title' => '拾取尸体物品后，尸体依然保留在视野中，但有一定的冷却时间。',
						'default' => true,
					),
					array(
						'value' => '0',
						'name' => '拾取后需重新探索发现',
						'title' => '拾取尸体物品后需要再次探索才能找到尸体，与正常模式相同。',
					)
				)
			),
		)
	),
	7 => Array(//教程模式为唯一房间
		'name' => '<font class="red b">教程模式</font>',
		'gtype' => 17, //对应的游戏模式编号
		'available' => true,
		'soleroom' => true,//唯一房间，只有不存在时才会新建房间，而且房间空置过长会自动刷新整个房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => true,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'reset_player_after_leave' => true,//是否在离开一段时间后重置角色
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可
			0 => '小白鼠',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
		'card' => array(
			0 => '0',
		)
	),
	8 => Array(
		'name' => '<font class="cyan b">荣耀模式</font>',
		'gtype' => 18, //对应的游戏模式编号
		'available' => true,
		'available-start' => 1506816000, //如果设置并大于零，表明时间戳迟于此时才显示和开放
		'available-end' => 0,//如果设置并大于零，表明时间戳早于此时才显示和开放
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'instance8',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 5,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 2,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '试炼者',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
	),
	9 => Array(
		'name' => '<font class="red b">极速模式</font>',
		'gtype' => 19, //对应的游戏模式编号
		'available' => true,
		'available-start' => 1509408000, //如果设置并大于零，表明时间戳迟于此时才显示和开放
		'available-end' => 0,//如果设置并大于零，表明时间戳早于此时才显示和开放
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'instance9',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 5,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 2,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '试炼者',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
	),
	10 => Array(
		'name' => '<font class="yellow b">幻界叫唤</font>',
		'gtype' => 5, //对应的游戏模式编号
		'available' => false,
		'available-start' => 1506816000, //如果设置并大于零，表明时间戳迟于此时才显示和开放
		'available-end' => 0,//如果设置并大于零，表明时间戳早于此时才显示和开放
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'gtype5',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 1,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '试炼者',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
	),
	11 => Array(
		'name' => '<font class="vermilion b">试炼模式</font>',
		'gtype' => 13, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'instance3',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'ready-expire-time' => 180, //准备状态过期时间，单位秒。无此值默认30秒。
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
		'game-option' => array(
			'lvl' => array(//变量名
				'title' => '进阶等级',//界面显示的提示
				'type' => 'number',//input类型
				'min' => '0',
				'max' => '30',
				'no-notice-when-modified' => 1,//修改变量不会发出通知
				'tip-function' => 'get_instance3_debuff_tips',//定义一个函数来生成更复杂的提示。所定义的函数应该位于room.func.php且应传入设定变量的值
				'tip-box-height' => '80px',//提示框的高度
				'tip-need-ok' => 1,//需要确认才能提交数据，目前仅对number类型有效。会多出一个确认按钮，建议选项极多的number项使用
			),
		),
	),
	12 => Array(
		'name' => '<font class="gold b">肉鸽模式</font>',
		'gtype' => 20, //对应的游戏模式编号
		'available' => true,
		'available-start' => 4200000000, //如果设置并大于零，表明时间戳迟于此时才显示和开放
		// 'available-end' => 0,//如果设置并大于零，表明时间戳早于此时才显示和开放
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'instance10',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 5,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 2,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
	),
	13 => Array(//蹲站模式为唯一房间
		'name' => '<font class="ltazure b">蹲站模式</font>',
		'gtype' => 21, //对应的游戏模式编号
		'available' => true,
		'soleroom' => true,//唯一房间，只有不存在时才会新建房间，而且房间空置过长会自动刷新整个房间。
		'without-ready' => true,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'reset_player_after_leave' => true,//是否在离开一段时间后重置角色
		'req-mod' => 'instance11',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可
			0 => '吃瓜群众',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
		'card' => array(
			0 => '0',
		)
	),
	14 => Array(
		'name' => '<font class="lime b">梦境演练</font>',
		'gtype' => 22, //对应的游戏模式编号
		'available' => true,
		'soleroom' => false,//唯一房间，只有不存在时才会新建房间。
		'without-ready' => false,//是否不需要点击“准备”就直接进入房间。
		'without-valid' => false,//是否跳过加入游戏（选卡）画面就直接进入房间。
		'req-mod' => 'instance12',//前置mod
		'pnum' => 1,	//最大参与人数，只有开启准备才有效
		'globalnum' => 0,	//全场最大开启数目，不设或者0认为无限制
		'privatenum' => 1,	//单人最大开启数目，不设或者0认为无限制；不需要准备的房间无视这个值
		'leader-position' => Array(	//各个编号位置的所属队伍队长位置
			0 => 0,
		),
		'color' => Array(		//队伍颜色，只需对队长设置即可
			0 => 'ff0022',
		),
		'teamID' => Array(	//队伍名，只需对队长设置即可。
			0 => '试炼者',
		),
		'show-team-leader' => 0,	//是否显示“队长”标签（如队伍大于1人设为1）
	),
);
	
/* End of file roommng.config.php */
/* Location: /include/roommng/roommng.config.php */