<?php
require __DIR__.'/../include/catalog_repository.php';

$db = new PDO('sqlite::memory:');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
foreach(['balls', 'batter', 'singl', 'singleline', 'scenepir'] as $table){
	$db->exec("CREATE TABLE $table (id INTEGER PRIMARY KEY, articul TEXT, name TEXT, diameter DECIMAL(4,1), effect TEXT, video TEXT, packaging TEXT, amount TEXT, weight TEXT, price DECIMAL(12,2))");
}
$insert = $db->prepare('INSERT INTO balls (id, articul, name, diameter, effect, video, packaging, amount, weight, price) VALUES (:id, :articul, :name, :diameter, :effect, :video, :packaging, :amount, :weight, :price)');
for($i = 1; $i <= 21; $i++){
	$insert->execute([
		':id' => $i,
		':articul' => 'CSH',
		':name' => 'Product '.$i,
		':diameter' => $i <= 11 ? 3.0 : 4.0,
		':effect' => 'Effect',
		':video' => '',
		':packaging' => '',
		':amount' => '',
		':weight' => '',
		':price' => 100 - $i,
	]);
}
$catalog = new CatalogRepository($db);
[$items, $total, $page] = $catalog->getPage('balls', 1, '', null);
if(count($items) !== 9 || $total !== 21 || $page !== 1 || $items[0]['id'] != 1) throw new RuntimeException('First page failed');
[$items, $total, $page] = $catalog->getPage('balls', 2, '', null);
if(count($items) !== 9 || $items[0]['id'] != 10) throw new RuntimeException('Second page failed');
[$items, $total, $page] = $catalog->getPage('balls', 3, '', null);
if(count($items) !== 3 || $items[0]['id'] != 19) throw new RuntimeException('Last page failed');
[$items, $total, $page] = $catalog->getPage('balls', 300, '', null);
if($page !== 3 || count($items) !== 3) throw new RuntimeException('Out of range page failed');
[$items, $total, $page] = $catalog->getPage('balls', 1, 'price', null);
if($items[0]['id'] != 21) throw new RuntimeException('Price sorting failed');
[$items, $total, $page] = $catalog->getPage('balls', 1, '', 3.0);
if($total !== 11 || count($items) !== 9) throw new RuntimeException('Diameter filter failed');
[$items, $total, $page] = $catalog->getPage('single_lines', 1, '', null);
if($total !== 0 || $items !== []) throw new RuntimeException('Empty category failed');
[$items, $total, $page] = $catalog->getPage('not-a-category', 1, '', null);
if($total !== 0 || $items !== []) throw new RuntimeException('Unknown category failed');
echo "Catalog tests passed\n";
