<?php

namespace club21
{
	function init()
	{
		eval(import_module('clubbase'));
		$clubinfo[21] = '最强大脑';
		$clubdesc_h[21] = $clubdesc_a[21] = '可保留的探索记忆数目是正常的2倍。';
		$clublist[21] = Array(
			'type' => 1,
			'probability' => 100, 
			'skills' => Array(
				10,11,12,		
				80,239,240,241,242,243,244,
			)
		);
	}
}

?>