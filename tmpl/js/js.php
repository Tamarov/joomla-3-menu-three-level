<?php
	defined("_JEXEC") or die();
?>
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