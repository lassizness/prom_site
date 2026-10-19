<?php
$titles = [
	'home' => 'Профессиональная пиротехника',
	'about' => 'О нас',
	'contact' => 'Контакты',
	'engineering_works' => 'Информация покупателю',
	'single_lines' => 'Одиночные линии',
	'professional_batteries' => 'Профессиональные батареи',
	'single' => 'Синглы',
	'balls' => 'Пиротехнические шары',
	'stage_pyrotechnics' => 'Сценическая пиротехника',
	'404' => 'Страница не найдена',
];
$title = $titles[$cat] ?? $titles['home'];
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Профессиональная пиротехника, фейерверки, пиротехнические изделия и оборудование.">
	<link rel="icon" href="/favicon.ico">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/slick/slick.css">
	<link rel="stylesheet" href="/slick/slick-theme.css">
	<title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
<header class="header">
	<nav id="headlink" aria-label="Основная навигация">
		<a href="/?cat=about">О нас</a>
		<a href="/?cat=engineering_works">Покупателю</a>
		<a href="/?cat=engineering_works">Акции</a>
		<a href="/?cat=engineering_works">Новости</a>
		<a href="/?cat=contact">Контакты</a>
	</nav>
	<div id="headerInner"></div>
</header>
