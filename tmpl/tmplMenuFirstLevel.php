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
		<?php
			$document = &JFactory::getDocument();
			$renderer = $document->loadRenderer('modules');
			$options = array('style' => 'xhtml');
			$position = 'topRegister';
		?>
		<style>
			.topMenuRegister{
				width:300px !important;
				float:left !important;
			}
			.topMenuRegister div div ul li{
				padding: 10px 3px 0;
			}
			.topMenuLang{
				width: 144px !important;
			}
			.topMenuLang div div div ul{
				height: 33px;
				top: 10px !important;
				background-color:#2b96fb;
			    z-index: 201 !important;
			}
			.topMenuLang div div div ul li{
				height: 40px !important;
				padding-top: 0px !important;
				background-color: #2b96fb;
				line-height: 40px;
				margin-top: -12px;
			    margin-left: 0px !important;
				margin-right: 0px !important;
			}
			.topMenuLang div div div ul li:first-of-type{
				height: 33px !important;
				border-radius: 50px;
				line-height: 33px;
				margin-top: 0px !important;
			}			
			.topMenuLang div div div ul li:last-of-type{
				border-radius: 0px 0px 15px 15px;
			}
			.topMenuLang div div div div{
				border-bottom: none;
				margin-top: -10px;
			    z-index: 202 !important;
			}
		</style>
		<div class="topMenuRegister">
		<?php
			echo $renderer->render($position, $options, null);
		?>
		</div>
		<div class="topMenuLang col-lg-3 col-md-3 em-enter-block hidden-sm hidden-xs">
			<div class="em-lang-switch blue-lang-switch">
				<?php
					$positionTwo = 'langSwitchMainAbout';
					echo $renderer->render($positionTwo, $options, null);
				?>
			</div>
		</div>
	</div>
</div>
