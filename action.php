<?php
$calibr = $_POST['calibr'] ?? 'all';
if(!is_string($calibr) || !in_array($calibr, ['all', '2.5', '3', '4', '5', '6'], true)) $calibr = 'all';
header('Location: /?'.http_build_query(['cat' => 'balls', 'page' => 1, 'calibr' => $calibr]), true, 303);
exit;
