<?php
	defined("_JEXEC") or die();
	/*Второй уровень меню*/
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
