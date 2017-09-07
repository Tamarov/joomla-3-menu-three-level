<?php
	defined("_JEXEC") or die();
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
	</div>
</div>
