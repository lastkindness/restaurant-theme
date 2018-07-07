<?php
$info = array(
	array(
		'icon'  => 'svg/clock.svg',
		'title' => 'Hours',
		'text'  => 'Monday - Friday: 7am - 6pm<br/>Saturday: 8am - 8pm<br/>Sunday: 8am - 6pm',
	),
	array(
		'icon'  => 'svg/location.svg',
		'title' => 'Location',
		'text'  => 'You can find us at 1234 Street Ave,<br/>Townsville, State, 01234',
	),
	array(
		'icon'  => 'svg/help.svg',
		'title' => 'Have questions?',
		'text'  => 'You can give us a call at (123) 456-7890 or email us at info@needlehookcoffee.com',
	),
);
?>
<footer class="site-footer">
	<div class="container">
		<div class="site-footer-container">
			<a class="site-footer-logo" href="#">
				<img src="components/footer/img/logo.png" alt="logo"/>
			</a>

			<?php require 'src/components/social/social.php'; ?>

			<?php foreach ( $info as $item ) { ?>
				<h4 class="site-footer-info-title">
					<?php require $item['icon']; ?>
					<span class="site-footer-info-title-text"><?php echo $item['title'] ?></span>
				</h4>
				<p class="site-footer-info-text"><?php echo $item['text'] ?></p>
			<?php } ?>
		</div>

		<div class="site-footer-authors">Made with love by North Unicorn</div>
	</div>
</footer>
