<div class="navbar-fixed">
	<nav class="<?=APP_THEME;?>" id="menuMain">
		<div class="nav-wrapper container">
			<a class="brand-logo" href="<?=appUrl(); ?>"><?=APP_TITLE;?></a>
			<a href="#" data-target="menuMobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
					<a id="btnShowThemes" href="javascript:void(0);">
						<i class="material-icons left">brush</i> Change Theme
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<ul id="menuMobile" class="sidenav">
	<li>
		<a id="btnShowThemes" href="javascript:void(0);">
			<i class="material-icons left">brush</i> Change Theme
		</a>
	</li>
</ul>