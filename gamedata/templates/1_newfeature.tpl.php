<?php if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><br>

<div style="width:50%; margin:0 auto; text-align:left">
<font size="5">肌肉兄贵技能初稿预览：</font><br><br>
<font size="2">
※ 基本特性 开局基础攻击力+200，基础防御力+200，升级时攻防成长增加，技能点获取攻防数值增加。<br>
<br>
※ 活化 每次攻击提升一点基础攻击，每次被攻击提升一点基础防御。<br>
<br>
※ 龙胆 3级 获得技能“神速”或者“恃勇”。<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;神速 战斗中基础攻击力增加10%，每次攻击提升1点基础攻击；<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;射程内反击判定时60%几率触发，触发则反击；<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恃勇 先攻率增加10%，战斗中基础防御力增加35%，每次被攻击提升2点基础防御；<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但战斗中敌方视为具有“神速”；<br>
<br>
※ 金刚 每一点基础防御降低x%固定伤害或爆炸伤害，最高50%。（可随意切换）<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0级： x=0.01 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1级： x=0.02 （4技能点）<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2级： x=0.03 （5技能点）<br>
固定伤害指的是灵系和重枪的固定部分。<br>
<br>
※ 重拳 3级 战斗技，本次攻击物理伤害+30%。20怒气。<br>
<br>
※ 暴打 12级 战斗技，本次攻击物理伤害+30%，本次战斗中对方所有称号技能无效。85怒气。<br>
<br>
<font size="3">欢迎在主群讨论意见。实装可能得等一阵子我闲下来再说了……</font>
</font>
</font>
</div>
<?php } else { echo '___aamE'; } ?><?php include template('footer'); ?>

