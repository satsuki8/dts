<?php if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><div class="subtitle" align="center">入场手续</div>

<p><img border="0" src="img/story_0.gif" style="align:center"></p>

<p align="center">“欢迎参加本次ACFUN动漫祭。<br />
“我是本次ACFUN动漫祭的工作人员。<br />
“本次动漫祭不同于以往，各项活动将采用虚拟现实系统进行。<br />
“请参加者如实填写身份资料，以便领取神经接入装置。<br />
“身份资料请填写在下面。”<br /></p>

<form method="post"  action="valid.php" name="valid">
<input type="hidden" name="mode" value="enter"> 姓名 : <?php } else { echo '___aase'; } ?><?php echo $username?><?php if (!defined('GEXIT_RETURN_JSON')) { ?> <br />
<?php } else { echo '___aasf'; } ?><?php include template('usergdicon'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><br />
<?php } else { echo '___aaa4'; } ?><?php include template('userwords'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><br />

<input type="submit" name="enter" value="提交">
<input type="reset" name="reset" value="重设">
</form>
<br />
<?php } else { echo '___aasg'; } ?><?php include template('footer'); ?>

