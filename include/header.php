<?php

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
 <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/styleui.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  var mins=0,maxs=1500;
  $( function() { 	
    $( "#slider-range-price" ).slider({
      range: true,
      min: 0,
      max: 1500,
	  values: [ mins,maxs],
	        slide: function( event, ui ) {
        $( "#amountprice" ).val( "Руб " + ui.values[ 0 ] + " - Руб " + ui.values[ 1 ] );
      }
    });  
    $( "#amountprice" ).val( "Руб " + $( "#slider-range-price" ).slider( "values", 0 ) +
      " - Руб " + $( "#slider-range-price" ).slider( "values", 1 ) );
      
      /*$( "#slider-range-price" ).slider( "values", 0 );
      maxs=$( "#slider-range-price" ).slider( "values", 1 );*/
  } );
  
  
  $( function() {
    $( "#slider-range-diameter" ).slider({
      range: true,
      min: 2,
      max: 6,
      values: [ 2, 6 ],
      slide: function( event, ui ) {
        $( "#amountdiameter" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amountdiameter" ).val( "" + $( "#slider-range-diameter" ).slider( "values", 0 ) +
      " - " + $( "#slider-range-diameter" ).slider( "values", 1 ) );
  } );
  </script>
<style >
*{
box-sizing: border-box;
}
.slider {
overflow:hidden;
top:-307px;
width:1150px;
left:-100px;
margin: 0 auto;
}
.slick-slide {
margin: 0px 126px;
/*left:-600px;*/
} 	
.slick-active img {
width:200px;
height:100px;
margin:52px 10px;
}	
.slick-current img{
left:-100px;
width:370px;
height:220px;
margin:0px -31px;
}
.slick-prev:before,
.slick-next:before {
color: red;	   
}	
.slick-slide {

opacity: 0;	  
}    
.slick-active {
opacity: .6;
outline: none; 
}
.slick-current {
height:10px;
width:10px;
opacity: 1;
}
</style>
<title>Профессиональная пиротехника</title>
<style>

</style>
</head>
<body> 

<!-- Начало хидер -->

<header class="header">
<div id="headlink">

<a href="/?cat=about"><b><span id="letterlink">О нас&nbsp;</b></span> <a>
<a href="/?cat=engineering_works"><b><span id="letterlink">Покупателю&nbsp;</b></span> <a>
<a href="/?cat=engineering_works"><b><span id="letterlink">Акции &nbsp;</b></span><a>
<a href="/?cat=engineering_works"><b><span id="letterlink">Новости &nbsp;</b></span><a>
<a href="/?cat=contact"><b><span id="letterlink">Контакты &nbsp;</b></span><a>
</div>
<div id="headerInner">
</div>

</header><!-- Конец хидер --> 
<!-- начало врапер -->';
 
?>