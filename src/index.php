<?php ob_start(); ?>

	<main class="home">
		Some content 12
	</main>

<?php $GLOBALS['content'] = ob_get_clean(); ?>

<?php require 'components/layout.php'; ?>
