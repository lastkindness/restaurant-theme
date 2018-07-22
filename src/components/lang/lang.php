<?php
$current = 'EN';
$list    = array(
	array(
		'href'  => '#ru',
		'label' => 'RU',
	),
	array(
		'href'  => '#gr',
		'label' => 'GR',
	),
);
?>

<div class="lang">
	<span class="lang-current"><?php echo $current; ?></span>
	<span class="lang-icon">
		<?php require 'svg/arrow-down.svg'; ?>
	</span>
	<div class="lang-dropdown">
		<ul class="lang-list">
			<?php foreach ( $list as $item ) { ?>
				<li class="lang-item">
					<a href="<?php echo $item['href']; ?>"><?php echo $item['label']; ?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
