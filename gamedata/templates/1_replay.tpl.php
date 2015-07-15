<?php if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><!-- Replay Game Word Lib Load Start -->
<script type="text/javascript" src=
<?php } else { echo '___aamW'; } ?><?php echo '"gamedata/javascript/'.$repdatalib.'"';; ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?>></script>
<!-- Replay Game Word Lib Load End -->

<!-- 录像文件载入进度条支持 START -->
<style type="text/css">
#progressbar-border
{
width:100%;
height:15px;
background-color: #000000;
border:1px solid #ffffff;
overflow:hidden;
}
#progressbar-inner
{
width:0%;
height:15px;
background: #ff3333; 
}
#progressbar-text
{
position:relative;
left: 230px;
color: #ffffff;
top: -16px; 
}
.noselect 
{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>
<script type="text/javascript">
function replayload_progressbar(p)
{
$('progressbar-inner').style.width=p+'%';
$('progressbar-text').innerHTML=p+'%';
}
</script>
<!-- 录像文件载入进度条支持 END -->

<!-- 回放控制板 START -->
<div class="b3" style="z-index:10000; margin:0 auto; width:1030px;">

<span class="noselect" style="height:7px; display:block;">&nbsp;</span>

<!-- 录像进度条 START -->
<div id="replay_bar" style="cursor:pointer; margin:0 auto; width:1030px; height:25px;" 
onmouseover="replay_bar_now_mouseon = 1; $('replay_bar').addEventListener('mousemove',replay_bar_mouse_move_handler); replay_bar_show_time_hint();" 
onmouseout="replay_bar_now_mouseon = 0; if (replay_cursor_drag_flag==0) { $('replay_bar').removeEventListener('mousemove',replay_bar_mouse_move_handler); replay_bar_hide_time_hint(); }" >

<div style="z-index:10000; width:1030px; height:10px;"></div>

<!-- 时间轴 START -->
<div style="z-index:10000; width:1000px; height:5px; left:15px">

<!-- 主轴 START -->
<div style="z-index:10000; width:1000px; height:5px;">
<img src="<?php } else { echo '___aamX'; } ?><?php echo $repbg?><?php if (!defined('GEXIT_RETURN_JSON')) { ?>" style="width:1000px;z-index:10000;filter:alpha(opacity=40); opacity:0.4;"/>
<img src="<?php } else { echo '___aamY'; } ?><?php echo $repbg?><?php if (!defined('GEXIT_RETURN_JSON')) { ?>" style="width:1000px;z-index:10000;filter:alpha(opacity=80); opacity:0.8;"/>
<img id="replay_bar_core" src="<?php } else { echo '___aamZ'; } ?><?php echo $repbg?><?php if (!defined('GEXIT_RETURN_JSON')) { ?>" style="width:1000px;z-index:10000;"/>
<img src="<?php } else { echo '___aam0'; } ?><?php echo $repbg?><?php if (!defined('GEXIT_RETURN_JSON')) { ?>" style="width:1000px;z-index:10000;filter:alpha(opacity=80); opacity:0.8;"/>
<img src="<?php } else { echo '___aam1'; } ?><?php echo $repbg?><?php if (!defined('GEXIT_RETURN_JSON')) { ?>" style="width:1000px;z-index:10000;filter:alpha(opacity=40); opacity:0.4;"/>
</div>
<!-- 主轴 END -->

<!-- 当前光标 START -->
<div style="position:relative; left:-11px; top:-14px; text-align:left;">
<div id="replay_cursor" style="cursor:move;z-index:10010;position:relative;left:0px;height:30px;width:24px;background-image:url(img/replay_cursor.png); background-position: center top; background-repeat: no-repeat; background-size: 16px 25px;" ></div>
</div>
<!-- 当前光标 END -->
</div>
<!-- 时间轴 END -->

<div style="z-index:10000; width:1030px; height:10px;"></div>
</div>

<!-- 悬浮提示 START -->
<div id="replay_hint" class="b3" style="z-index:10020; position:fixed; left:0px; top:0px; display:none; text-align:left;">
<div class="noselect" style="filter:alpha(opacity=95); opacity:0.95; background-color:#000000">
<span style="height:5px; display:block;">&nbsp;</span>
<span id="replay_hint_inner" style="margin-left:5px; margin-right:5px;">
</span>
<span style="height:5px; display:block;">&nbsp;</span>
</div>
</div>
<!-- 悬浮提示 END -->

<script type="text/javascript">
$('replay_cursor').addEventListener('mousedown',replay_cursor_mouse_down_handler);
$('replay_cursor').addEventListener('mouseover',replay_cursor_mouse_over_handler);
$('replay_cursor').addEventListener('mouseout',replay_cursor_mouse_out_handler);
$('replay_bar').addEventListener('mousedown',replay_bar_mouse_down_handler);
</script>
<!-- 录像进度条 END -->

<span class="noselect" style="height:8px; display:block;">&nbsp;</span>

<!-- 录像操作界面 START -->
<div align="left">

<table><tr>

<td width="8px"></td>

<!-- 播放按钮 START -->
<td>
<div class="noselect" id="replay_start_selector" style="cursor:pointer;border:1px #ffffff solid; height:30px;" onmousedown="replay_start_handler();">
<span style="height:5px; display:block;">&nbsp;</span>
<div style="text-align:center;z-index:10020; ">&nbsp;播放&nbsp;</div>
<span style="height:5px; display:block;">&nbsp;</span>
</div>
</td>
<!-- 播放按钮 END -->

<td width="1px"></td>

<!-- 暂停按钮 START -->
<td>
<div class="noselect" id="replay_pause_selector" style="cursor:pointer;border:1px #ffffff solid; height:30px;" onmousedown="replay_pause_handler();">
<span style="height:5px; display:block;">&nbsp;</span>
<div style="text-align:center;z-index:10020; ">&nbsp;暂停&nbsp;</div>
<span style="height:5px; display:block;">&nbsp;</span>
</div>
</td>
<!-- 暂停按钮 END -->

<td width="15px"></td>

<!-- 加速按钮 START -->
<td>
<div class="noselect" id="replay_speed_selector" style="cursor:pointer;border:1px #ffffff solid; font-size:16px; height:30px; width:31px;" onmousedown="replay_switch_speed();">
<span style="height:5px; display:block;">&nbsp;</span>
<div style="text-align:center; font-weight:bold;z-index:10020; ">3x</div>
<span style="height:5px; display:block;">&nbsp;</span>
</div>
</td>
<!-- 加速按钮 END -->

<td width="15px"></td>

<!-- 时间显示 START -->
<td>
<div class="noselect" style="font-size:16px">时间&nbsp;<span id="replay_now_player_time"></span>&nbsp;/&nbsp;<span id="replay_tot_player_time"></span></div>
</td>
<!-- 时间显示 END -->

</tr></table>

</div>
<!-- 录像操作界面 END -->

<span class="noselect" style="height:7px; display:block;">&nbsp;</span>

</div>
<!-- 回放控制板 END -->

<!-- 录像载入进度气泡框 START -->
<?php } else { echo '___aam2'; } ?><?php \bubblebox\bubblebox_set_style('id:replayhint;height:200;width:500;cancellable:0;margin-right:8px;'); include template('MOD_BUBBLEBOX_START'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><table height=198px width=100%><tr><td align="left" valign="middle">
<span>少女祈祷中... </span>
<span style="height:8px; display:block;">&nbsp;</span>
<div id="progressbar-border">
<div id="progressbar-inner"></div>
<div id="progressbar-text">0%</div>
</div>   
<br>
<table>
<tr><td width=200px>
玩家: <span class="lime"><?php } else { echo '___aam3'; } ?><?php echo $repname?><?php if (!defined('GEXIT_RETURN_JSON')) { ?></span>
</td><td width=200px>
游戏局号: <?php } else { echo '___aam4'; } ?><?php echo $repgnum?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?></td></tr>
<tr><td width=200px>
录像文件大小: <?php } else { echo '___aam5'; } ?><?php echo $repsz?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?></td><td width=200px>
操作总数: <?php } else { echo '___aam6'; } ?><?php echo $repopcnt?><?php if (!defined('GEXIT_RETURN_JSON')) { ?> 
</td></tr>
</table>

</td></tr></table>
<?php } else { echo '___aam7'; } ?><?php include template('MOD_BUBBLEBOX_END'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><script type="text/javascript">bubblebox_show('replayhint');</script>
<!-- 录像载入进度气泡框 END -->

<!-- 播放结束气泡框 START -->
<?php } else { echo '___aam8'; } ?><?php \bubblebox\bubblebox_set_style('id:persistent-replay-endhint;height:200;width:500;cancellable:1;margin-right:8px;'); include template('MOD_BUBBLEBOX_START'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><table height=198px width=100%><tr><td align="center" valign="middle">
<span><font size="50px">录像播放结束</font><br><br>
<a href="#" onclick="if (history.length>1) javascript:history.back(-1); else window.location.href='index.php';">点击这里返回录像选择界面</a>，或点击气泡框外任意位置重新观看本录像
</span>
</td></tr></table>
<?php } else { echo '___aam9'; } ?><?php include template('MOD_BUBBLEBOX_END'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><!-- 播放结束气泡框 END -->

<!-- 载入录像 -->
<script type="text/javascript" src=
<?php } else { echo '___aam.'; } ?><?php echo '"gamedata/replays/'.$repid.'.replay.header.js"'; ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?>></script>
<?php } else { echo '___aam-'; } ?><?php include template('game_interface'); include template('footer'); ?>

