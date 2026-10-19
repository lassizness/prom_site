<?php
$categories = ['home', 'about', 'contact', 'engineering_works', 'single_lines', 'professional_batteries', 'single', 'balls', 'stage_pyrotechnics', '404'];
$cat = $_GET['cat'] ?? 'home';
if(!is_string($cat) || !in_array($cat, $categories, true)){
	http_response_code(404);
	$cat = '404';
}
$page = filter_var($_GET['page'] ?? 1, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?: 1;
$calibr = $_GET['calibr'] ?? 'all';
if(!is_string($calibr) || !in_array($calibr, ['all', '2.5', '3', '3.0', '4', '4.0', '5', '5.0', '6', '6.0'], true)) $calibr = 'all';
$sort = $_GET['short'] ?? '';
if(!is_string($sort) || !in_array($sort, ['', 'price', 'diameter'], true)) $sort = '';

require_once __DIR__.'/include/database.php';
require_once __DIR__.'/include/catalog_repository.php';
require_once __DIR__.'/include/menu.php';
require __DIR__.'/include/header.php';
require __DIR__.'/include/body.php';
require __DIR__.'/include/footer.php';
