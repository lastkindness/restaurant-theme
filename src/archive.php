<?php ob_start(); ?>

<main>
	<?php
	$title = 'Our blog';
	$title_content = "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind";
	$image_url = 'components/page-title/img/archive.jpg';
	require 'components/page-title/page-title.php';
	?>
	<div class="container">
		<?php
		$breadcrumbs =
			array(
				'Home',
				'Category',
				'Posts',
			);
		require 'components/breadcrumbs/breadcrumbs.php';
		?>

		<h1>Posts</h1>

		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<?php
					$posts = array(
						array(
							'title'   => 'Something delicious you can eat and play with',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Foo', 'Food' ),
						),
						array(
							'title'   => 'Second title',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Food' ),
						),
						array(
							'title'   => 'Third title',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Food' ),
						),
						array(
							'title'   => 'Fourth title',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Food' ),
						),
						array(
							'title'   => 'Fifth title',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Food' ),
						),
						array(
							'title'   => 'Sixth title',
							'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
							'date'    => '26.07.2018',
							'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Food' ),
						),
					);
					foreach ( $posts as $key => $post ) :
						?>
						<div class="col-lg-4">
							<?php include 'components/teaser/teaser.php'; ?>
						</div>
						<?php
					endforeach;
					?>
				</div>

			</div>
			<div class="col-lg-3">
				<?php require 'components/sidebar/sidebar.php'; ?>
			</div>
		</div>

		<?php
		$pages = array( 1, 2, 3, 4, 5, 6 );
		require 'components/pagination/pagination.php';
		?>
	</div>
</main>


<?php $GLOBALS['content'] = ob_get_clean(); ?>

<?php require 'components/layout.php'; ?>
