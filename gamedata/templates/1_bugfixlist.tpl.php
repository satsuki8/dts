<?php if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><br>

<div style="width:50%; margin:0 auto; text-align:left">
<font size="5">以下是新功能和已修复BUG列表：</font><br><br>
<font size="3">
※ 修复了一个导致游戏崩溃的代码BUG<br>
※ 修复了DeathNote杀不死人的问题<br>
<br>
※ 强化了重击辅助属性。现在重击辅助属性增加效果：发动技能后返还15%~20%怒气（原电波重辅只有睡眠额外增加怒气的功效）。<br>
※ 添加了怒气回复道具（商店补给栏出售，地图随机掉落）<br>
※ 修复了最高伤害显示问题<br>
※ 修复了枪械作为钝器使用时依然有属性伤害的BUG<br>
※ 修复了躲避姿态连斗前不躲避禁区的BUG<br>
<br>
※ 除部分尚未实现的属性和道具外，资源层基本回归GE710L版本<br>
<br>
※ 修复了禁区相关bug<br>
※ 修复了DeathNote不能使用的问题<br>
<br>
※ 改进了冷却时间的计算方式，现在页面执行时间自动计入冷却时间<br>
※ 修正了某个脑残写法导致的严重效率问题，现在死而复生等同步问题应该减少很多了<br>
<br>
※ 修复了防御属性相关的几个BUG<br>
<br>
※ 修复了升级时全系熟练异常增加的严重BUG<br>
<br>
※ 修复了战斗后敌人血量显示没有更新的BUG<br>
※ 修复了进行状况不显示天气的BUG<br>
※ 修复了商店页面提示的BUG<br>
※ 修复了探测器电池消耗数量的BUG<br>
<br>
※ 修复了地图同名随机物品全部落在一处的BUG<br>
※ 修复了没有命中时流火技能依然发动的BUG<br>
<br>
</font>
</font>
</div>
<?php } else { echo '___aan2'; } ?><?php include template('footer'); ?>

