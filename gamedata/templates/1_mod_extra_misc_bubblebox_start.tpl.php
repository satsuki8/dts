<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
<div id=
<?php echo '"fmsgbox'.((string)\bubblebox\bubblebox_get_style('id')).'"'; ?>
 style="display:none">

<!--全屏背景降低-->
<div style="position:fixed; left:0px; top:0px; z-index:
<?php echo 2+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; margin:auto auto; filter:alpha(opacity=20); opacity:0.2; min-width:100%; max-width:100%; min-height:100%; max-height:100%; background-color:#000000">
</div>
<!--END-->

<!--构建半透明外缘-->
<div style="position:fixed; left:0px; top:0px; z-index:
<?php echo 3+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; margin:auto auto; min-width:100%; max-width:100%; min-height:100%; max-height:100%;">
<div style="position:absolute; z-index:
<?php echo 4+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; top:50%; margin-top:
<?php echo (((int)\bubblebox\bubblebox_get_style('offset-y'))-ceil((((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('border-width-y'))*2+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom')))/2)).'px'; ?>
; left:50%; margin-left:
<?php echo (((int)\bubblebox\bubblebox_get_style('offset-x'))-ceil((((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('border-width-x'))*2+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right')))/2)).'px'; ?>
; ">
<div style="position:relative; z-index:
<?php echo 4+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; margin-left:auto; margin-right:auto; filter:alpha(opacity=20); opacity:0.2; min-width:
<?php echo (((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('border-width-x'))*2+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right'))).'px'; ?>
; max-width:
<?php echo (((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('border-width-x'))*2+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right'))).'px'; ?>
; min-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('border-width-y'))*2+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; max-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('border-width-y'))*2+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; background-color:#000000">
</div>
</div>
</div>
<!--END-->

<!--构建文本框-->
<div style="position:fixed; left:0px; top:0px; z-index:
<?php echo 3+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; margin:auto auto; min-width:100%; max-width:100%; min-height:100%; max-height:100%;" 
<?php if(((int)\bubblebox\bubblebox_get_style('cancellable'))==1) { ?>
 onclick="bubblebox_hide_all();"
<?php } ?>
>
<div style="position:absolute; z-index:
<?php echo 5+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; top:50%; margin-top:
<?php echo (((int)\bubblebox\bubblebox_get_style('offset-y'))-ceil((((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom')))/2)).'px'; ?>
; left:50%; margin-left:
<?php echo (((int)\bubblebox\bubblebox_get_style('offset-x'))-ceil((((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right')))/2)).'px'; ?>
; ">
<div style="position:relative; min-width:
<?php echo (((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right'))).'px'; ?>
; max-width:
<?php echo (((int)\bubblebox\bubblebox_get_style('width'))+((int)\bubblebox\bubblebox_get_style('margin-left'))+((int)\bubblebox\bubblebox_get_style('margin-right'))).'px'; ?>
; min-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; max-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; z-index:
<?php echo 5+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; margin:0 auto; filter:alpha(opacity=
<?php echo round(((double)\bubblebox\bubblebox_get_style('opacity'))*100); ?>
); opacity:
<?php echo ((double)\bubblebox\bubblebox_get_style('opacity')); ?>
; background-color:#000000" onclick="if (event.stopPropagation) event.stopPropagation(); else event.cancelBubble = true; ">
<div style="position:relative; margin-left:0px; margin-top:0px; margin-right:0px; margin-bottom:0px; z-index:
<?php echo 6+((int)\bubblebox\bubblebox_get_style('z-index-base')); ?>
; background-color:rgba(17,17,17,0.5); *BACKGROUND:rgb(17,17,17); *filter:alpha(opacity=50); BORDER: #000 0px none; color: #fff; text-align: center; border-right: #111 1px solid;font:10pt '微软雅黑' serif;">
<!--END-->

<!--构建文字区-->
<div style="position:relative; margin-left:
<?php echo ((int)\bubblebox\bubblebox_get_style('margin-left')).'px'; ?>
; margin-top:0px; margin-right:0px; margin-bottom:
<?php echo ((int)\bubblebox\bubblebox_get_style('margin-bottom')).'px'; ?>
; min-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; max-height:
<?php echo (((int)\bubblebox\bubblebox_get_style('height'))+((int)\bubblebox\bubblebox_get_style('margin-top'))+((int)\bubblebox\bubblebox_get_style('margin-bottom'))).'px'; ?>
; text-align:left; overflow-x:hidden; overflow-y:auto;" >
<div class=
<?php echo '"scroll-pane'.((string)\bubblebox\bubblebox_get_style('id')).'"'; ?>
 style="max-height:
<?php echo ((int)\bubblebox\bubblebox_get_style('height')).'px'; ?>
; width:
<?php echo ((int)\bubblebox\bubblebox_get_style('width')).'px'; ?>
; overflow-x:hidden; overflow-y:auto; margin-top:
<?php echo ((int)\bubblebox\bubblebox_get_style('margin-top')).'px'; ?>
; position:relative;">
<div style="position:relative; height:auto; margin-left:0px; margin-top:0px; margin-right:0px; margin-bottom:0px; ">
<!--END-->