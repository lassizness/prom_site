<?php
echo'<div class="field_prod">';
 if(empty($_GET['page'])){$_GET['page']=1;}
 if(!isset($_GET['catalog'])){$_GET['catalog']=4;};
 if((isset($_GET['catalog']))||(isset($_GET['catalog'])&&isset($_GET['page']))){
 switch($_GET['catalog']){
	 case 1:
	 if($_GET['page']>1){
		 $lim=9*($_GET['page']-1);
	 $query="SELECT * FROM `singleline` LIMIT ".$lim.",9";}else{
	  $query="SELECT * FROM `singleline` LIMIT 0,9";
	 }
	 break;
	 case 2:
	 	 if($_GET['page']>1){
			  $lim=9*($_GET['page']-1);
		 $query="SELECT * FROM `batter` LIMIT ".$lim.",9";}else{
		 $query="SELECT * FROM `batter` LIMIT 0,9";}
	 break;
	 case 3:
	 if($_GET['page']>1){
		  $lim=9*($_GET['page']-1);
	 $query="SELECT * FROM `singl` LIMIT ".$lim.",9";}else{
	 $query="SELECT * FROM `singl` LIMIT 0,9";}
	 break;
	 case 4:
	 if($_GET['page']>1){
		  $lim=9*($_GET['page']-1);
	 $query="SELECT * FROM `balls` LIMIT ".$lim.",9";}else{
	 $query="SELECT * FROM `balls` LIMIT 0,9";	 
	 }
	 break;
	 case 5:
	 if($_GET['page']>1){
		  $lim=9*($_GET['page']-1);
	 $query="SELECT * FROM `scenepir` LIMIT ".$lim.",9";}else{
		 $query="SELECT * FROM `scenepir` LIMIT 0,9";		 
	 }
	 break;
	 default:{
	 $query="SELECT * FROM `balls` LIMIT 0,9"; 
	 }
 }}
$news = mysql_query($query);
$row = @mysql_fetch_assoc($news, MYSQL_ASSOC);
$count=0;
do { 
	$count++;
switch($count){
case 1;
echo'
<div id="prod">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="/images/product'.$row['articul'].'"/>		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></td></span>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 2:
echo'<div id="prod2">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b></b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></td></span>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 3:
echo'<div id="prod3">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 4:
echo'<div id="prod4">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 5:
echo'<div id="prod5">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 6:
echo'<div id="prod6">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 7:
echo'<div id="prod7">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 8:
echo'<div id="prod8">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;

case 9:
echo'<div id="prod9">
<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
</div>
<div id="product_video">
<iframe width="320" height="205" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
</div>
<div id="product_photo">
<img class="big" src="'.$row['id'].'" />		
</div>
<div id="product_discr">
<div id="product_price">
<span class="letter"> <b>Цена:</b></span>'.$row['price'].'<span class="letter"><b> р</b></span> 
</div>
</br>
<table class="table">
<tbody>
<tr>
<td></br><span class="letter"> <b>Калибр:</b></span></td>
<td></br>'.$row['diameter'].'<span class="letter"><b>"</b></span></td>
</tr>
<tr>
<td><span class="letter"><b>Высота:</b></span></td>
<td>20 <span class="letter"><b>м</b></span></td>
</tr>
<tr>
<td><span class="letter"> <b>Объем:</b></span></td>
<td>'.$row['amount'].'</td><span class="letter"><b></b></span>
</tr>
<tr>
<td><span class="letter"><b>Вес:</b></span></td>
<td>'.$row['weight'].' <span class="letter"><b>кг</></span></td>
</tr>
<tr>
</tbody>
</table>
<div id="product_discr1">
<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
</div>
</div>';
break;
default:
{
echo"Товаров данной категории пока нет.";
}
}

}while($row = mysql_fetch_assoc($news, MYSQL_ASSOC)) ;

 echo'<div id="navigation">
<ul id="pagination-digg">';
$back=$_GET['page']-1;
if($back<=0){$back=1;}
 echo'<li class="previous-off"><a href="?catalog='.$_GET['catalog'].'&page='.$back.'">«Назад </a></li>
        <li class="active">'.$_GET['page'].'</li>
        <li><a href="?page=2">2</a></li>
        <li><a href="?page=3">3</a></li>
        <li><a href="?page=4">4</a></li>
        <li><a href="?page=5">5</a></li>
        <li><a href="?page=6">6</a></li>
        <li><a href="?page=7">7</a></li>
		<li><a href="?page=6">...</a></li>
        <li><a href="?page=7">10</a></li>';
		$next=$_GET['page']+1;
 echo'<li class="next"><a href="?catalog='.$_GET['catalog'].'&page='.$next.'">Вперед »</a></li>
</ul>
 </div>
 <div id="ss"><img src="images/ss.png">
	</div>';
echo'</div><!--Закрывает поле с товаром--> 
</div><!-- Конец контент -->
</div><!-- Конец мидл -->';	
?>