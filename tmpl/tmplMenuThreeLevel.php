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
				$arrayThreeLevelMenuNewDiv = setDivUlElementsThreeLevel ($arrayThreeLevelMenuNewDiv, $arrayThreeLevelMenu[$key][5], $arrayThreeLevelMenu[$key][6]);
		?>
				<li id='<?php echo $arrayThreeLevelMenu[$key][4]; ?>'
					class='<?php echo "second".$arrayThreeLevelMenu[$key][5]; ?>'>
					<a class="top-three-menu-first" href="<?php echo $arrayThreeLevelMenu[$key][2]; ?>/">
						<?php echo $arrayThreeLevelMenu[$key][1]; ?>
					</a>
				</li>
		<?php
			endforeach;
		?>
		</ul>
	</div>
</div>