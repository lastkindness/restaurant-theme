<?php
require 'src/components/header/menu.php';

function recursive_menu( $menu, $depth ) { ?>
	<?php if ( 0 === $depth ) { ?>
		<ul class="site-header-nav-list">
	<?php } else { ?>
		<ul>
	<?php } ?>
		<?php foreach ( $menu as $index => $item ) { ?>
			<?php if ( 0 === $depth ) { ?>
				<li class="site-header-nav-list-item">
			<?php } else { ?>
				<li>
			<?php } ?>
				<a href="#"><?php echo $item['label']; ?></a>
				<div class="site-header-nav-list-item-dropdown">
					<?php recursive_menu( $item['menu'], $depth + 1 ); ?>
				</div>
			</li>
		<?php } ?>
	</ul>
<?php } ?>

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
					<?php recursive_menu( $menu, 0 ); ?>
				</nav>
			</div>
			<div class="col-auto">
				<?php require 'src/components/lang/lang.php'; ?>
			</div>
		</div>
	</div>
</header>
