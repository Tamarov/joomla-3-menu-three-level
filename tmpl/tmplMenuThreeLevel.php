<?php
	defined("_JEXEC") or die();
/*Третий уровень меню*/
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
