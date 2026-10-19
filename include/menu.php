<?php
function catalogMenu(string $active): string
{
	$items = [
		['single_lines', 'single.png', 'ОДИНОЧНЫЕ линии'],
		['professional_batteries', 'prof.png', 'ПРОФЕССИОНАЛЬНЫЕ батареи'],
		['single', 'singles.png', 'СИНГЛЫ'],
		['balls', 'shar.png', 'ШАРЫ'],
		['stage_pyrotechnics', 'scenic.png', 'СЦЕНИЧЕСКАЯ пиротехника'],
	];
	$html = '<nav class="menu" aria-label="Категории товаров">';
	foreach($items as [$code, $image, $name]){
		$class = $active === $code ? 'menu-item is-active' : 'menu-item';
		$html .= '<a class="'.$class.'" href="/?'.http_build_query(['cat' => $code, 'page' => 1]).'">';
		$html .= '<img src="/images/'.$image.'" alt="" width="90" height="80" loading="lazy" decoding="async">';
		$html .= '<span>'.htmlspecialchars($name, ENT_QUOTES, 'UTF-8').'</span></a>';
	}
	return $html.'</nav>';
}
