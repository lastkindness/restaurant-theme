<?php if ( isset( $pages ) && ! empty( $pages ) ) : ?>
	<nav class="pagination" aria-label="Pagination">
		<ul class="pagination-list">
			<li class="pagination-item">
				<a class="pagination-link pagination-link-prev" href="#">
					<?php require 'svg/arrow.svg'; ?>
				</a>
			</li>
			<?php
			foreach ( $pages as $page ) :
				$classes = ( 3 === $page )
					? 'pagination-link pagination-link-current'
					: 'pagination-link';
				?>
				<li class="pagination-item">
					<a class="<?php echo $classes; ?>" href="#"><?php echo $page; ?></a>
				</li>
			<?php endforeach; ?>
			<li class="pagination-item">
				<a class="pagination-link pagination-link-points" href="#">
					...
				</a>
			</li>
			<li class="pagination-item">
				<a class="pagination-link pagination-link-next" href="#">
					<?php require 'svg/arrow.svg'; ?>
				</a>
			</li>
		</ul>
	</nav>
<?php else : ?>
	<span>No args for pagination were found.</span>
<?php endif; ?>
