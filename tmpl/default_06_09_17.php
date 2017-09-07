<?php
	defined("_JEXEC") or die();
?>

<style>	
	.top-three-menu-all{
		width:100%;
		min-height: 50px;
		background-color: #2b96fb;
		line-height: 50px;
		text-transform: uppercase;
	    margin-top: -9px;
	}
	.top-three-menu-first{
		margin-left: 15px;
	    margin-right: 15px;
		float:left;
	}
	.top-three-menu-first{
		color:#fff;
		text-decoration: none;		
	}
	.top-three-menu-first:hover{
		color:#fff;
		text-decoration: none;		
	}
	#top-three-menu-second-1{
		display:none;
		width:100%;
		position: absolute;
		z-index: 99;
		background-color: #2b96fb;;
	}
	#top-three-menu-second-1 ul{
		width:100%;
		/*float:left;*/
		padding:0 0 0 0;	
		margin:0 0 0 0;
		text-transform:uppercase;
	}
	#top-three-menu-second-1 ul li{
		width:33%;
		/*float:left;*/
	}
	.second-level-top-menu{
		margin-top:15px;
	}
	#top-three-menu-second-1 .second-level-top-menu ul li a{
		font-size:18px;
		color: #fff;
	}
	.tree-level-top-menu{
		width:98%;
		margin-left:10px;
		height:150px;
	}
	.tree-level-top-menu ul li a{
		font-size:14px !important;
		color:#fff;
	}
	
	#top-menu-two-level-left-column{
		float:left;
		width:290px;
		font-size:16px;
		margin-top:15px;
		border-right: 1px solid #fff;
		margin-bottom:15px;
	}
	#top-menu-two-level-left-column ul li{
		width:100%;
		height:50px;
		line-height:50px;
	}
	#top-menu-two-level-left-column ul li:hover{
		border-left: 3px solid #fff;
		font-size:18px;
		font-weight: 600;
		background-color:#2c5dd8;
	}
	#top-menu-two-level-left-column ul li a{
		font-size:14px !important;
		color:#fff;
	}
	#menu-three-level-center-column{
		float:left;
		width:81%;
		height:300px;
		font-size:16px;
		margin-top:15px;
		margin-bottom:15px;
		overflow: hidden;
	}
	#menu-three-level-center-column div{
		/*width:50%;*/
		border-right: 1px solid #fff;
		margin-top:15px;
		max-weight:100%;
	}
	#menu-three-level-center-column div ul{
		width:50%;
	}
	#menu-three-level-center-column div ul li{
		float:left;
		width:50%;
		height: 30px;
		line-height:30px;		
	}
	#menu-three-level-center-column div ul li:hover{
		float:left;
		width:50%;
		height: 30px;
		line-height:30px;
		background-color:#2c5dd8;
	}
	#menu-three-level-center-column div ul li a{
		font-size:15px !important;
		color:#fff;
	}
</style>
<script>
	var hideTimers = {};
	var topMenuSecondId = 0;
	var topMenuThreeId = 0;
	function displayMenu(objID, display){
		var obj = document.getElementById(objID);
		obj.style.display = (display) ? "block" : "none";
	}
	function showMenu(objID){
		displayMenu(objID, true);
		clearTimeout(hideTimers[objID]);
	}
	function hideMenu(objID){
		var cmd = "displayMenu('"+objID+"', false)";
		hideTimers[objID] = setTimeout(cmd, 100);
	}

	function showFirstMenu(objID, objIDSecond, objIDThree){
		showMenu(objID);
		showMenuTwoLeft(objIDSecond);
		if(objIDThree != '0') hideMenuThreeLeft(objIDThree);
	}
	function hideFirstMenu(objID, objIDSecond, objIDThree){
		hideMenu(objID);
		hideMenuTwoLeft(objIDSecond);
		if(objIDThree != '0') hideMenuThreeLeft(objIDThree);
	}
	
	function showMenuTwoLeft(objIDSecond){
		displayMenu(objIDSecond, true);
		clearTimeout(hideTimers[objIDSecond]);
		topMenuSecondId = objIDSecond;
	}
	function hideMenuTwoLeft(objIDSecond){
		var cmd = "displayMenu('"+objIDSecond+"', false)";
		hideTimers[objIDSecond] = setTimeout(cmd, 100);
	}
	
	function showMenuThreeLeft(objIDThree){
		var elem = document.getElementById(objIDThree);
		var elemLi = elem.getElementsByTagName('li').length;
		var elemClass = elem.getElementsByTagName('li')[0].className;
		var heightThreeLvBlock = (elemLi*30)/2;
		var heightThreeLvBlockStr = heightThreeLvBlock + 'px';
		
		var elemSecond = document.getElementById(elemClass);
		var elemSecondLi = elemSecond.getElementsByTagName('li').length;
		var heightSecondLvBlock = elemSecondLi*50;
		var heightSecondLvBlockStr = heightSecondLvBlock + 'px';
		if(heightSecondLvBlock > heightThreeLvBlock){document.getElementById('menu-three-level-center-column').style.height = heightSecondLvBlockStr;}
		if(heightSecondLvBlock < heightThreeLvBlock){document.getElementById('menu-three-level-center-column').style.height = heightThreeLvBlockStr;}
		
		
		displayMenu(objIDThree, true);
		clearTimeout(hideTimers[objIDThree]);
		topMenuThreeId = objIDThree;
	}
	function hideMenuThreeLeft(objIDThree){
		var cmd = "displayMenu('"+objIDThree+"', false)";
		hideTimers[objIDThree] = setTimeout(cmd, 100);
	}
</script>

<?php
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
?>
<?php
/*
Шаблон для первого уровня меню
*/
?>
<div id="top-three-menu-first" class="top-three-menu-all">
	<ul>
<?php
	foreach($arrayFirstLevelMenu as $key=>$val):
?>
		<li id="<?php echo $arrayFirstLevelMenu[$key][4]; ?>"
			class="<?php echo $arrayFirstLevelMenu[$key][5]; ?>"
			<?php if($arrayFirstLevelMenu[$key][7] != 3): ?>
				onmouseover="showFirstMenu('top-three-menu-second-1', <?php echo "'second".$arrayFirstLevelMenu[$key][0]."'"; ?>, '0')"
				onmouseout="hideFirstMenu('top-three-menu-second-1', <?php echo "'second".$arrayFirstLevelMenu[$key][0]."'"; ?>, '0')"
			<?php endif;?>
		>
				<a class="top-three-menu-first" href="<?php echo $arrayFirstLevelMenu[$key][2]; ?>/"><?php echo $arrayFirstLevelMenu[$key][1]; ?></a>
		</li>
<?php
	endforeach;
?>
	</ul>
</div>
<?php
/*
Шаблон для второго и третьего уровня меню
*/
?>
<div id="top-three-menu-second-1" 
	onmouseover="showFirstMenu('top-three-menu-second-1', topMenuSecondId, '0')" 
	onmouseout="hideFirstMenu('top-three-menu-second-1', topMenuSecondId, '0')">
<?php
/*
Второй уровень меню
*/
?>
	<div id="top-menu-two-level-left-column">
		<?php
			$arraySecondLevelMenuNewDiv = 0;
			foreach($arraySecondLevelMenu as $key=>$value):
				if($arraySecondLevelMenu[$key][5] != $arraySecondLevelMenuNewDiv){
					if($arraySecondLevelMenuNewDiv == 0){
						echo "<div id='second".$arraySecondLevelMenu[$key][5]."' style='display:none;'><ul>";
					}else{
						echo "</ul></div><div id='second".$arraySecondLevelMenu[$key][5]."' style='display:none;'><ul>";
					}
					$arraySecondLevelMenuNewDiv = $arraySecondLevelMenu[$key][5];
				}
		?>
				<li id='<?php echo $arraySecondLevelMenu[$key][4]; ?>'
					class='<?php echo "second".$arraySecondLevelMenu[$key][5]; ?>'
					<?php if($arraySecondLevelMenu[$key][7] != 3): ?>
						onmouseover="showMenuThreeLeft(<?php echo "'second".$arraySecondLevelMenu[$key][0]."'"; ?>)"
						onmouseout="hideMenuThreeLeft(<?php echo "'second".$arraySecondLevelMenu[$key][0]."'"; ?>)"
					<?php endif; ?>
				>
					<a class="top-three-menu-first" href="<?php echo $arraySecondLevelMenu[$key][2]; ?>/"><?php echo $arraySecondLevelMenu[$key][1]; ?></a>
				</li>
		<?php
			endforeach;
		?>
		</ul>
		</div>
	</div>	
<?php
/*
Третий уровень меню
*/
?>
	<div id="menu-three-level-center-column"
		onmouseover="showMenuThreeLeft(topMenuThreeId)" 
		onmouseout="hideMenuThreeLeft(topMenuThreeId)">
		<?php
			$arrayThreedLevelMenuNewDiv = 0;
			foreach($arrayThreeLevelMenu as $key=>$value):
				if($arrayThreeLevelMenu[$key][5] != $arrayThreeLevelMenuNewDiv){
					if($arrayThreeLevelMenuNewDiv == 0){
						echo "<div id='second".$arrayThreeLevelMenu[$key][6]."' style='display:none;'><ul>";
					}else if($arrayThreeLevelMenuNewDiv != $arrayThreeLevelMenu[$key][6]){
						echo "</ul></div><div id='second".$arrayThreeLevelMenu[$key][6]."' style='display:none;'><ul>";
					}
					$arrayThreeLevelMenuNewDiv = $arrayThreeLevelMenu[$key][6];
				}
		?>
				<li id='<?php echo $arrayThreeLevelMenu[$key][4]; ?>'
					class='<?php echo "second".$arrayThreeLevelMenu[$key][5]; ?>'>
					<a class="top-three-menu-first" href="<?php echo $arrayThreeLevelMenu[$key][2]; ?>/"><?php echo $arrayThreeLevelMenu[$key][1]; ?></a>
				</li>
		<?php
			endforeach;
		?>
		</ul>
		</div>
	</div>
</div>


