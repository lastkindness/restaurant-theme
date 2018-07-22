<?php

if ( $post ) : ?>
	<article id="article_<?php echo $key; ?>" class="teaser">
		<header class="teaser-header">
            <?php
                $date = $post['date'];
                include(getcwd() . "/src/components/elements/date/date.php");
            ?>
			<h2 class="teaser-title">
				<?php echo $post['title']; ?>
			</h2>
		</header>
		<div class="teaser-thumbnail">
			<a href="#">
				<img src="components/teaser/teaser.jpg" alt="<?php echo $post['title']; ?>">
			</a>
		</div>
		<div class="teaser-tags">
            <?php
                $tags = $post['tags'];
                include(getcwd() . "/src/components/elements/tags/tags.php");
            ?>
		</div>
		<div class="teaser-content">
			<p>
				<?php echo $post['content']; ?>
			</p>
			<div class="teaser-read-more">
				<a class="teaser-read-more-link" href="#">
					Read more
					<span class="teaser-read-more-icon"><?php require 'svg/arrow.svg'; ?></span>
				</a>
			</div>
		</div>
	</article>
<?php else : ?>

	<span>No post was found</span>

<?php endif;
