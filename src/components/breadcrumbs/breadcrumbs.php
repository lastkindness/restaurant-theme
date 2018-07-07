<?php if ( isset( $breadcrumbs ) && ! empty( $breadcrumbs ) ) : ?>
	<nav class="breadcrumb" aria-label="breadcrumb">
		<ul class="breadcrumb-list">
			<?php
			foreach ( $breadcrumbs as $key => $breadcrumb ) :
				$classes = ( count( $breadcrumbs ) - 1 === $key ) ? 'breadcrumb-item breadcrumb-item-active' : 'breadcrumb-item';
				?>
				<li class="<?php echo $classes; ?>">
					<a class="breadcrumb-link" href="#"><?php echo $breadcrumb; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>
<?php else : ?>
	<span>No args for breadcrumbs were found.</span>
<?php endif; ?>
