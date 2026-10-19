<?php
$name = $_GET['name'] ?? '';
if(!is_string($name) || !preg_match('/^[a-zA-Z0-9_-]+$/', $name)){
	http_response_code(404);
	exit;
}
$file = __DIR__.'/images/items/'.$name.'.png';
if(!is_file($file)){
	http_response_code(404);
	exit;
}
header('Cache-Control: public, max-age=2592000');
if(strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'image/webp') === false || !function_exists('imagewebp')){
	header('Content-Type: image/png');
	readfile($file);
	exit;
}
$directory = sys_get_temp_dir().'/prom-site-webp';
$target = $directory.'/'.$name.'.webp';
if(!is_file($target) || filemtime($target) < filemtime($file)){
	if(!is_dir($directory)) @mkdir($directory, 0700, true);
	$image = @imagecreatefrompng($file);
	if($image){
		$temp = @tempnam($directory, 'webp_');
		if($temp !== false){
			if(@imagewebp($image, $temp, 80)) @rename($temp, $target);
			else @unlink($temp);
		}
		imagedestroy($image);
	}
}
if(is_file($target)){
	header('Content-Type: image/webp');
	readfile($target);
	exit;
}
header('Content-Type: image/png');
readfile($file);
