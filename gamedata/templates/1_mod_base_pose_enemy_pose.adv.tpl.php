<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><td class="b2"><span>基础姿态</span></td>
<?php } else { echo '___aahu'; } ?><?php global $___LOCAL_POSE__VARS__poseinfo,$___LOCAL_POSE__VARS__pose_player_usable,$___LOCAL_POSE__VARS__pose_itemfind_obbs,$___LOCAL_POSE__VARS__pose_meetman_obbs,$___LOCAL_POSE__VARS__pose_hide_obbs,$___LOCAL_POSE__VARS__pose_active_obbs,$___LOCAL_POSE__VARS__pose_dactive_obbs,$___LOCAL_POSE__VARS__pose_attack_modifier,$___LOCAL_POSE__VARS__pose_defend_modifier; $poseinfo=&$___LOCAL_POSE__VARS__poseinfo; $pose_player_usable=&$___LOCAL_POSE__VARS__pose_player_usable; $pose_itemfind_obbs=&$___LOCAL_POSE__VARS__pose_itemfind_obbs; $pose_meetman_obbs=&$___LOCAL_POSE__VARS__pose_meetman_obbs; $pose_hide_obbs=&$___LOCAL_POSE__VARS__pose_hide_obbs; $pose_active_obbs=&$___LOCAL_POSE__VARS__pose_active_obbs; $pose_dactive_obbs=&$___LOCAL_POSE__VARS__pose_dactive_obbs; $pose_attack_modifier=&$___LOCAL_POSE__VARS__pose_attack_modifier; $pose_defend_modifier=&$___LOCAL_POSE__VARS__pose_defend_modifier;   ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?><td class="b3"><span>
<?php } else { echo '___aahv'; } ?><?php if(isset($poseinfo[$tdata['pose']])) { ?>
<?php echo $poseinfo[$tdata['pose']]?>
<?php } else { ?>
<?php echo $tdata['pose']?>
<?php } ?>
<?php if (!defined('GEXIT_RETURN_JSON')) { ?></span></td>

<?php } else { echo '___aahw'; } ?>