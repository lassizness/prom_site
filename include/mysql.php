<?php
$link = mysql_connect('localhost','root','');
if(!$link){
	echo'Ошибка подключения к базе данных.';
	exit;
}
mysql_set_charset('utf8',$link);
$db_select = mysql_select_db('prof',$link);
if(!$db_select){
	echo'Ошибка выбора базы данных.';
	exit;
}

?>