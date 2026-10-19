<?php
$sortParams = ['cat' => $cat, 'page' => 1];
if($calibr !== 'all' && $cat === 'balls') $sortParams['calibr'] = $calibr;
if($sort !== '') $sortParams['short'] = $sort;
?>
<main class="catalog-page">
	<?= catalogMenu($cat) ?>
	<div class="catalog-tools">
		<a href="/?cat=home" class="catalog-home"><img src="/images/home.png" width="250" height="50" alt="На главную"></a>
		<form method="get" class="catalog-sort">
			<input type="hidden" name="cat" value="<?= htmlspecialchars($cat, ENT_QUOTES, 'UTF-8') ?>">
			<input type="hidden" name="page" value="1">
			<?php if($cat === 'balls'): ?>
				<input type="hidden" name="calibr" value="<?= htmlspecialchars($calibr, ENT_QUOTES, 'UTF-8') ?>">
			<?php endif; ?>
			<label for="catalog-sort">Сортировка:</label>
			<select id="catalog-sort" name="short" onchange="this.form.submit()">
				<option value="" <?= $sort === '' ? 'selected' : '' ?>>По умолчанию</option>
				<option value="price" <?= $sort === 'price' ? 'selected' : '' ?>>По цене</option>
				<option value="diameter" <?= $sort === 'diameter' ? 'selected' : '' ?>>По калибру</option>
			</select>
			<noscript><button type="submit">Применить</button></noscript>
		</form>
	</div>
	<?php if($cat === 'balls'): ?>
		<form action="/action.php" method="post" class="catalog-filter">
			<strong>ВЫБРАТЬ КАЛИБР:</strong>
			<?php foreach(['2.5', '3', '4', '5', '6', 'all'] as $size): ?>
				<label><input type="radio" name="calibr" value="<?= $size ?>" <?= (float)$calibr === (float)$size && $calibr !== 'all' || $size === 'all' && $calibr === 'all' ? 'checked' : '' ?>> <?= $size === 'all' ? 'Все' : $size.'"' ?></label>
			<?php endforeach; ?>
			<button type="submit">Применить</button>
		</form>
	<?php endif; ?>
	<?php if($total): ?>
		<div class="catalog-grid">
			<?php foreach($items as $item): ?>
				<article class="product-card">
					<h2 class="product-name"><?= htmlspecialchars($item['name'] ?? '', ENT_QUOTES, 'UTF-8') ?></h2>
					<div class="product-video">
						<?php if(preg_match('/^[a-zA-Z0-9_-]{11}$/', trim($item['video'] ?? ''))): ?>
							<iframe loading="lazy" title="Видео: <?= htmlspecialchars($item['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>" src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars(trim($item['video']), ENT_QUOTES, 'UTF-8') ?>" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<?php endif; ?>
					</div>
					<div class="product-details">
						<p class="product-price">Цена: <strong><?= htmlspecialchars($item['price'] ?? '', ENT_QUOTES, 'UTF-8') ?> р</strong></p>
						<dl>
							<dt>Калибр:</dt><dd><?= htmlspecialchars($item['diameter'] ?? '', ENT_QUOTES, 'UTF-8') ?>"</dd>
							<dt>Объем:</dt><dd><?= htmlspecialchars($item['amount'] ?? '', ENT_QUOTES, 'UTF-8') ?> м³</dd>
							<dt>Вес:</dt><dd><?= htmlspecialchars($item['weight'] ?? '', ENT_QUOTES, 'UTF-8') ?> кг</dd>
						</dl>
						<p class="product-effect"><strong>Описание:</strong> <?= htmlspecialchars($item['effect'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<?php if($total > 9): ?>
			<nav class="catalog-pagination" aria-label="Страницы каталога">
				<?php for($i = 1; $i <= (int)ceil($total / 9); $i++): ?>
					<?php $sortParams['page'] = $i; ?>
					<a href="/?<?= htmlspecialchars(http_build_query($sortParams), ENT_QUOTES, 'UTF-8') ?>" <?= $page === $i ? 'aria-current="page"' : '' ?>><?= $i ?></a>
				<?php endfor; ?>
			</nav>
		<?php endif; ?>
	<?php else: ?>
		<div class="catalog-empty"><img src="/images/noitems.png" alt=""><p>В данный момент в этой категории нет товара. Перейдите в другую категорию или на главную страницу.</p></div>
	<?php endif; ?>
</main>
