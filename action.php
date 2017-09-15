<?php
$calibr= $_POST['calibr'];
$url=explode('?',$_SERVER['HTTP_REFERER']);
$url=explode('&',$url[1]);
$urlto=$url[0]."&".$url[1];
header("Location: /?".$urlto."&calibr=".$calibr."");
?>