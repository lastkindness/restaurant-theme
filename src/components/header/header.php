<?php $menu = [ 'HOME', 'MENU', 'BLOG', 'RESERVATION', 'GALLERY', 'CONTACTS' ]; ?>

<header class="site-header">
	<div class="container">
		<div class="row flex-nowrap align-items-center justify-content-between">
			<div class="col-auto">
				<a class="site-header-logo" href="#">
					<img src="components/header/img/maxresdefault.jpg" alt="logo"/>
				</a>
			</div>
			<div class="col-auto">
				<nav class="site-header-nav">
					<ul class="site-header-nav-list">
						<?php foreach ( $menu as $index => $val ) { ?>
							<li class="site-header-nav-list-item">
								<a href="#"><?php echo $val; ?></a>
								<div class="site-header-nav-list-item-dropdown">
									<ul>
										<?php foreach ( [ 'Daily menu', 'Season menu', 'Diet menu' ] as $index => $val ) { ?>
											<li>
												<a href="#"><?php echo $val; ?></a>
												<?php if ( 1 === $index ) { ?>
													<div class="site-header-nav-list-item-dropdown">
														<ul>
															<?php foreach ( [ 'Summer menu', 'Children menu', 'Diet menu', 'Special offers' ] as $index => $val ) { ?>
																<li><a href="#"><?php echo $val; ?></a></li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
											</li>
										<?php } ?>
									</ul>
								</div>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
			<div class="col-auto">
				<div class="site-header-lang">
					<span class="site-header-lang-current">EN</span>
					<span class="site-header-lang-icon">
						<?php require 'svg/arrow-down.svg'; ?>
					</span>
					<div class="site-header-lang-dropdown">
						<ul class="site-header-lang-list">
							<li class="site-header-lang-item">
								<a href="#ru">RU</a>
							</li>
							<li class="site-header-lang-item">
								<a href="#gr">GR</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
