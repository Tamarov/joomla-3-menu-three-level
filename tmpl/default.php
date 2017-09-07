<?php
	defined("_JEXEC") or die();
?>

<style>	
	.top-three-menu-all{
		width:100%;
		min-height: 50px;
		background-color: #fff;
		line-height: 50px;
		text-transform: uppercase;
	    margin-top: -10px;
	}
	.top-three-menu-all div{
		width:100%;
		height: 57px;
		border-bottom: 3px solid #2b96fb;
	}
	.top-three-menu-all div div#logo{
		width: 90px;
		float: left;
		margin-left: 30px;
		margin-right: 30px;
	}
	.top-three-menu-all div div#top-three-menu-first-main{
	    width: 56%;
		float: left;
	}
	.top-three-menu-first{
		margin-left: 15px;
	    margin-right: 15px;
		float:left;
	}
	.top-three-menu-first{
		color:#6f83b5;
		text-decoration: none;		
	}
	.top-three-menu-first:hover{
		color:#2b96fb;
		text-decoration: none;		
	}
	#top-three-menu-second-1{
		display:none;
		width:100%;
		position: absolute;
	    margin-top: -2px;
		z-index: 200;
		background-color: #fff;
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
		color:#6f83b5;
	}
	.tree-level-top-menu{
		width:98%;
		margin-left:10px;
		height:150px;
	}
	.tree-level-top-menu ul li a{
		font-size:14px !important;
		color:#6f83b5;
	}
	
	#top-menu-two-level-left-column{
		float:left;
		width:290px;
		font-size:16px;
		margin-top:15px;
		border-right: 1px solid #2b96fb;
		margin-bottom:15px;
	}
	#top-menu-two-level-left-column ul li{
		width:100%;
		height:50px;
		line-height:50px;
	}
	#top-menu-two-level-left-column ul li:hover{
		border-left: 3px solid #2c5dd8;
		font-size:18px;
		font-weight: 600;
		background-color:#2b96fb;
		color:#fff;
	}
	#top-menu-two-level-left-column ul li a{
		font-size:14px !important;
		color:#6f83b5;
	}
	.secondLevelTopMenu:hover a{
		color:#fff !important;
		
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
		border-right: 1px solid #2b96fb;
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
		background-color:#2b96fb;
	}
	#menu-three-level-center-column div ul li:hover a{
		color:#fff;
	}
	#menu-three-level-center-column div ul li a{
		font-size:15px !important;
		color:#6f83b5;
	}
	
	.em-lang-switch.blue-lang-switch .em-open-lang-switch {
		width: 40px;
		height: 30px;
		right: 10px;
		margin-top: -11px;
		border: 0px;
	}
	.em-lang-switch.blue-lang-switch ul {
		right: 10px;
		top: 0px;
		border-radius: 0px;
	}
	.em-lang-switch ul {
		position: absolute;
		right: 10px;
		top: 0px;
		display: inline-block;
		background: #2b96fb;
		z-index: 199;
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
	<div>
		<div id="logo">
			<img alt="logo" class="logo" src="/images/pages/logo.png" title="ExpertMusic — доверьте музыкальное оформление вашего бизнеса профессионалам">
		</div>
		<div id="top-three-menu-first-main">
			<ul id="mainTopMenuList"style="font-weight:600;">
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
		<div style="width:300px;float:left;height:57px;">
			<ul class="nav menu em-btn-group">
				<li class="em-tringular current" style="width: 48%;display: inline-block;float: left;padding: 0px;">
					<a class="btn btn-round-im-blue"
						href="https://business.expertmusic.net"
						target="_blank"
						style="border-radius:4px;height:45px;font-size:14px;line-height:28px;box-shadow: 0 0 10px rgba(0,0,0,0.5);">Вход</a>
				</li>
				<li style="width:48%;display:inline-block;float:left;padding:0px;margin-left:10px;">
					<button class="btn btn-round-im-blue em-customer-registration-button"
							style="height:45px;font-size:14px;border-radius:4px;box-shadow: 0 0 10px rgba(0,0,0,0.5);">Регистрация</button>
				</li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 em-enter-block hidden-sm hidden-xs" style="width:100px;margin-left:55px;height:45px;border-bottom:0px;">
			<div class="em-lang-switch blue-lang-switch" style="border-bottom: 0px;">
				<div class="moduletable" style="border-bottom: 0px;">
					<div class="mod-languages" style="border-bottom: 0px;">
						<ul class="lang-block" style="width:124px;height:45px;box-shadow: 0 0 10px rgba(0,0,0,0.5);border-radius:4px;">
							<li class="lang-active" dir="ltr" style="height:45px;padding:0px;margin-left:0px;margin-right:0px;padding-right:30px;">
								<a href="/" style="height:45px;font-size:14px;line-height:45px;">Русский</a>
							</li>
							<li dir="ltr" style="height:45px;padding:0px;margin-left:0px;margin-right:0px;padding-right:30px;background-color:#2b96fb;margin-top:-4px;">
								<a href="/pl/" style="height:45px;font-size:14px;line-height:45px;">Polski</a>
							</li>
							<li dir="ltr" style="height:45px;padding:0px;margin-left:0px;margin-right:0px;padding-right:30px;background-color:#2b96fb;border-radius:0px 0px 4px 4px;">
								<a href="/en/" style="height:45px;font-size:14px;line-height:45px;">English</a>
							</li>
						</ul>
						<div class="em-open-lang-switch" onclick="onClickOpenSwitch(event)"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
					class='<?php echo "second".$arraySecondLevelMenu[$key][5]; ?> secondLevelTopMenu'
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


