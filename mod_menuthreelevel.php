<?php
	defined("_JEXEC") or die();
	
	require_once __DIR__.'/helper.php';
	
	$helper = new ModMenuThreeLevel();
	$list = $helper->get_items($params);

	require JModuleHelper::getLayoutPath('mod_menuthreelevel', $params->get ('layout', 'default'));
?>