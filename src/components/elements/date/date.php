<?php function nu_date( $date ) { ?>
	<div class="entry-meta">
		<?php cp_date( $date, 'published' ); ?>
		<?php cp_date( $date, 'updated' ); ?>
	</div>
<?php } ?>

<?php function cp_date( $date, $type ) { ?>
	<a class="date" href="#" rel="bookmark">
		<span class="date-icon"><?php include 'svg/date.svg'; ?></span>
		<time class="date-text date-text-<?php echo $type; ?>" datetiem="">
			<?php echo $date; ?>
		</time>
	</a>
<?php } ?>
