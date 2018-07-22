<?php
$submentu_2 = [
	[
		'label' => 'Summer menu',
		'menu'  => [],
	],
	[
		'label' => 'Children menu',
		'menu'  => [],
	],
	[
		'label' => 'Diet menu',
		'menu'  => [],
	],
	[
		'label' => 'Special offers',
		'menu'  => [],
	],
];
$submentu_1 = [
	[
		'label' => 'Daily menu',
		'menu'  => [],
	],
	[
		'label' => 'Season menu',
		'menu'  => $submentu_2,
	],
	[
		'label' => 'Diet menu',
		'menu'  => [],
	],
];

$menu = [
	[
		'label' => 'HOME',
		'menu'  => $submentu_1,
	],
	[
		'label' => 'MENU',
		'menu'  => $submentu_1,
	],
	[
		'label' => 'BLOG',
		'menu'  => $submentu_1,
	],
	[
		'label' => 'RESERVATION',
		'menu'  => $submentu_1,
	],
	[
		'label' => 'GALLERY',
		'menu'  => $submentu_1,
	],
	[
		'label' => 'CONTACTS',
		'menu'  => $submentu_1,
	],
];
?>
