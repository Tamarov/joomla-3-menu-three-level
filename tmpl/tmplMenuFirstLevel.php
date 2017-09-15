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
			<ul id="mainTopMenuList" class="mainTopMenuList">
		<?php
			foreach($arrayFirstLevelMenu as $key=>$val):
		?>
				<li id="<?php echo $arrayFirstLevelMenu[$key][4]; ?>"
					class="<?php echo $arrayFirstLevelMenu[$key][5]; ?>"
					<?php if($arrayFirstLevelMenu[$key][7] != 3): ?>
						onmouseover="showFirstMenu('top-three-menu-second-1', <?php echo "'second".$arrayFirstLevelMenu[$key][0]."'"; ?>, <?php
							if($arrayFirstLevelMenu[$key][8] != "Default"){
								echo "'second".$arrayFirstLevelMenu[$key][6]."'";
							}else{
								echo "'Default'";
							}
						?>)"
						onmouseout="hideFirstMenu('top-three-menu-second-1', <?php echo "'second".$arrayFirstLevelMenu[$key][0]."'"; ?>, <?php echo "'second".$arrayFirstLevelMenu[$key][6]."'"; ?>)"
					<?php endif;?>					
				>
				<?php
					if(($arrayFirstLevelMenu[$key][1] == "ПРОДУКТЫ И УСЛУГИ") OR ($arrayFirstLevelMenu[$key][1] == "КОМПАНИЯ")):
				?>
					<p class="top-three-menu-first"><?php echo $arrayFirstLevelMenu[$key][1]; ?></p>
				<?php else: ?>
					<a class="top-three-menu-first" href="<?php echo $arrayFirstLevelMenu[$key][2]; ?>/"><?php echo $arrayFirstLevelMenu[$key][1]; ?></a>
				<?php endif; ?>
					<?php /*<a class="top-three-menu-first" href="<?php echo $arrayFirstLevelMenu[$key][2]; ?>/"><?php echo $arrayFirstLevelMenu[$key][1]; ?></a> */?>
				</li>
		<?php
			endforeach;
		?>
			</ul>
		</div>
		<div class="topMenuRegister">
			<?php echo $renderer->render($position, $options, null); ?>
		</div>
		<div class="topMenuLang col-lg-3 col-md-3 em-enter-block hidden-sm hidden-xs">
			<div class="em-lang-switch blue-lang-switch">
				<?php echo $renderer->render($positionTwo, $options, null); ?>
			</div>
		</div>
	</div>
</div>