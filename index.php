<?php
if(!isset($_GET['cat'])){header( "Refresh: 0; url=/?cat=home");}
include_once("include/mysql.php");
include_once("include/header.php");
include_once("include/body.php");
include_once("include/footer.php");
?>