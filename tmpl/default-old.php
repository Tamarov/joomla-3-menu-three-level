<?php
	defined("_JEXEC") or die();
?>

<style>
	#menu-hor ul{
		list-style:none;
	}
	#menu-hor > ul{
		display:flex;
		justify-content:center;
	}
	#menu-hor > ul li a{
		display:block;
		background:#ececed;
	}
	.top-three-menu-all{
		width:100%;
		min-height: 50px;
		background-color: #2b96fb;
		line-height: 50px;
		text-transform: uppercase;
	}
	.top-three-menu-first{
		margin-left: 15px;
	    margin-right: 15px;
		float:left;
	}
	#top-three-menu ul ul{
		display: none;
	}
	
	ul #dlya-zavedenij:hover ul{
		clear:both;
		width:10%;
		display:block;
		background-color: /*#2b96fb*/red;
		/*margin-left: 15px;*/
	    /*margin-right: 15px;*/
	}
	
	.thee-level-ul{
		width:100px;
		float:left;
	}
	.two-level-li{
		clear:both;
	}
	.top-three-menu-first, .two-level-li a{
		color:#fff;
		text-decoration: none;		
	}
	.thee-level-li{
		display:none;
	}
</style>
<script>
	function menuLevelTwo(flag, id){
		//var articles = document.getElementByClassName('top-three-menu-all');
		//articles.style.height = "300px";
		if(flag == 0){
			document.getElementsByClassName("dlya-zavedenij")
			//document.getElementById("top-three-menu").style.height = "250px";
			//var nextid = id.length - 1;
			console.log(id);
		}
		if(flag == 1){
			document.getElementById("top-three-menu").style.height = "50px";
		}
	}
</script>

<div id="top-three-menu" class="top-three-menu-all">
<?php
/*
echo "<pre>";
print_r($list);
echo "</pre>";
*/
	$previousItem = 0;
	$aliasLvOne = $aliasLvTwo = $aliasLvThree = $aliasLvFour = "";
	$fanctionJs = "";
	foreach($list as $key=>$value):
		if($value['title'] == "Главная"){continue;}
		if($value['level'] == 1){
			if($value['alias'] == "dlya-zavedenij"){
				$aliasLvOne = $value['alias'];
				$fanctionJs = 2;
			}else{
				$aliasLvOne = "";
			}
		}
		if(($value['level'] == 1) AND ($previousItem == 0)){
			//if($value['level'] == 1){continue;};
			//if($value['title'] == "Блог"){continue;}
?>
			<ul><li id="<?php echo $value['alias']; ?>" class="<?php echo $value['idMenu']; ?>" onmouseover="menuLevelTwo(0, <?php echo $fanctionJs;?>);"><a class="top-three-menu-first" href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 1) AND ($previousItem == 1)){
?>
			</li><li id="<?php echo $value['alias']; ?>" class="<?php echo $value['idMenu']; ?>" onmouseover="menuLevelTwo(0, <?php echo $fanctionJs;?>);"><a class="top-three-menu-first" href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 1) AND ($previousItem == 2)){
?>
			</li></ul></div><li id="<?php echo $value['alias']; ?>" class="<?php echo $value['idMenu']; ?>" onmouseover="menuLevelTwo(0, <?php echo $fanctionJs;?>);"><a class="top-three-menu-first" href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 1) AND ($previousItem == 3)){
?>
			</li></ul></li></ul><li id="<?php echo $value['alias']; ?>" class="<?php echo $value['idMenu']; ?>" onmouseover="menuLevelTwo(0, <?php echo $fanctionJs;?>);"><a class="top-three-menu-first" href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 1) AND ($previousItem == 4)){
?>
			</li></ul></li></ul><li></ul><li id="<?php echo $value['alias']; ?>" class="<?php echo $value['idMenu']; ?>" onmouseover="menuLevelTwo(0, <?php echo $fanctionJs;?>);"><a class="top-three-menu-first" href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 2) AND ($previousItem == 1)){
?>
			<div class="<?php echo $aliasLvOne; ?>"><ul id="meny-id-<?php echo $key; $idUl = $key;?>" class="menu-two <?php echo $value['idMenu']; ?>"><li class="two-level-li" onmouseover="menuLevelTwo(0, <?php echo ($idUl+1);?>);" onmouseout="menuLevelTwo(1, <?php echo ($idUl+1);?>);"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 2) AND ($previousItem == 2)){
?>
			</li><li class="two-level-li" onmouseover="menuLevelTwo(0, <?php echo ($idUl+1);?>);" onmouseout="menuLevelTwo(1, <?php echo ($idUl+1);?>);"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 2) AND ($previousItem == 3)){
?>
			</li></ul></li><li class="two-level-li" onmouseover="menuLevelTwo(0, <?php echo ($idUl+1);?>);" onmouseout="menuLevelTwo(1, <?php echo ($idUl+1);?>);"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 2) AND ($previousItem == 4)){
?>
			</li></ul></li></ul></li><li class="two-level-li" onmouseover="menuLevelTwo(0, <?php echo ($idUl+1);?>);" onmouseout="menuLevelTwo(1, <?php echo ($idUl+1);?>);"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 3) AND ($previousItem == 2)){
?>
			<ul id="meny-id-<?php echo $key; $idUl = $key;?>" class="menu-three"><li class="thee-level-li"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 3) AND ($previousItem == 3)){
?>
			</li><li class="thee-level-li"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 3) AND ($previousItem == 4)){
?>
			</li></ul></li><li class="thee-level-li"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 4) AND ($previousItem == 3)){
?>
			<ul id="meny-id-<?php echo $key; $idUl = $key;?>" class=""><li class=""><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}else if (($value['level'] == 4) AND ($previousItem == 4)){
?>
			<li class="thee-level-li"><a href="<?php echo $value['flink']; ?>"><?php echo $value['title']; ?></a>
<?php
		}
		$previousItem = $value['level'];
	endforeach;
	if($previousItem == 1) echo "</li></ul>";
	if($previousItem == 2) echo "</li></ul></div></li></ul>";
	if($previousItem == 3) echo "</li></ul></li></ul></li></ul>";
	if($previousItem == 4) echo "</li></ul></li></ul></li></ul></li></ul>";
?>
</div>