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
