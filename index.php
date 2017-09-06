<?php
include_once("include/mysql.php");
/*ini_set('display_errors','Off');
error_reporting('E_ALL');*/
include_once("include/header.php");
if(!isset($_GET['cat'])){header( "Refresh: 0; url=/?cat=home");}
include_once("include/body.php");
include_once("include/footer.php");
?>