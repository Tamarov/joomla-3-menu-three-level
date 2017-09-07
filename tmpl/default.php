<?php
	defined("_JEXEC") or die();
	require_once __DIR__.'/css/style.php';
	require_once __DIR__.'/js/js.php';

	$arrayFirstLevelMenu = array();
	$arraySecondLevelMenu = array();
	$arrayThreeLevelMenu = array();
	$arrayFirstLevelMenuFlag = 0;
	$arraySecondLevelMenuFlag = 0;
	$arrayThreeLevelMenuFlag = 0;
	$prevLevel = 0;
	foreach($list as $key=>$value){
		if($value['title'] == "Главная") continue;
		if($value['level'] == 1){
			$arrayFirstLevelMenu[$arrayFirstLevelMenuFlag] = array($value['id'],
											$value['title'],
											$value['flink'],
											$value['level'],
											$value['alias'],
											$value['idMenu'],
											$value['idMenuSecond'],
											3);
			$arrayFirstLevelMenuFlag++;
		}else if($value['level'] == 2){
			if($prevLevel == 1){
				$arrayFirstLevelMenu[$arrayFirstLevelMenuFlag-1][7] = 0;
			}
			$arraySecondLevelMenu[$arraySecondLevelMenuFlag] = array($value['id'],
											$value['title'],
											$value['flink'],
											$value['level'],
											$value['alias'],
											$value['idMenu'],
											$value['idMenuSecond'],
											3);
			$arraySecondLevelMenuFlag++;
		}else if($value['level'] == 3){
			if($prevLevel == 2){
				$arraySecondLevelMenu[$arraySecondLevelMenuFlag-1][7] = 0;
			}
			$arrayThreeLevelMenu[$arrayThreeLevelMenuFlag] = array($value['id'],
											$value['title'],
											$value['flink'],
											$value['level'],
											$value['alias'],
											$value['idMenu'],
											$value['idMenuSecond'],
											3);
			$arrayThreeLevelMenuFlag++;
		}
		$prevLevel = $value['level'];
	}
/*Шаблон для первого уровня меню*/
	
	require_once __DIR__.'/tmplMenuFirstLevel.php';

/*Шаблон для второго и третьего уровня меню*/
?>
<div id="top-three-menu-second-1" 
	onmouseover="showFirstMenu('top-three-menu-second-1', topMenuSecondId, '0')" 
	onmouseout="hideFirstMenu('top-three-menu-second-1', topMenuSecondId, '0')"
>
	<?php
		/*Второй уровень меню*/
		require_once __DIR__.'/tmplMenuSecondLevel.php';
		/*Третий уровень меню*/
		require_once __DIR__.'/tmplMenuThreeLevel.php';
	?>
</div>


