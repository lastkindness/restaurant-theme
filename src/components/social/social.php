<?php
	$social = array(
		array(
			'href'  => 'https://www.youtube.com',
			'title' => 'youtube',
			'icon'  => 'svg/youtube.svg',
		),
		array(
			'href'  => 'https://www.linkedin.com',
			'title' => 'linkedin',
			'icon'  => 'svg/linkedin.svg',
		),
		array(
			'href'  => 'https://www.facebook.com',
			'title' => 'facebook',
			'icon'  => 'svg/facebook.svg',
		),
		array(
			'href'  => 'https://www.instagram.com',
			'title' => 'instagram',
			'icon'  => 'svg/instagram.svg',
		),
	)
?>
<ul class="social">
	<?php foreach ( $social as $item ) { ?>
		<li>
			<a class="social-link" href="<?php echo $item['href']; ?>" title="<?php echo $item['title']; ?>">
				<?php require $item['icon']; ?>
			</a>
		</li>
	<?php } ?>
</ul>
