<?php
if(isset($_GET['cat'])){
	if(!isset($_GET['page'])&&($_GET['cat']!="home")){header( "Refresh: 0; url=/?cat=".$_GET['cat']."&page=1");exit;}	 
	switch($_GET['cat']){
		case "single_lines":
		$qyerycount="SELECT * FROM `singleline`";
		
		if(!isset($_GET['short'])){		
		
			if($_GET['page']>1){
				$lim=9*($_GET['page']-1);
				$query="SELECT * FROM `singleline` LIMIT ".$lim.",9";}else{
				$query="SELECT * FROM `singleline` LIMIT 0,9";
			}
		}else{
			switch($_GET['short']){
				case "price":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `singleline` ORDER BY `price` ASC LIMIT ".$lim.",9";}else{
					$query="SELECT * FROM `singleline` ORDER BY `price` ASC LIMIT 0,9";
				}
				break;
			
				case "diameter":
				break;
			}
			
		}

		if($_GET['cat']=="single_lines"){
			$tag="rollover2";
			$tag1="rollover";
			$tag2="rollover";
			$tag3="rollover";
			$tag4="rollover";
		}
		break;
		case "professional_batteries":
		$qyerycount="SELECT * FROM `batter`";
		
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `batter` LIMIT ".$lim.",9";}else{
			$query="SELECT * FROM `batter` LIMIT 0,9";}

		if($_GET['cat']=="professional_batteries"){
			$tag="rollover";
			$tag1="rollover2";
			$tag2="rollover";
			$tag2="rollover";
			$tag3="rollover";
			$tag4="rollover";
		}

		break;
		case "single":
		$qyerycount="SELECT * FROM `single`";
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `singl` LIMIT ".$lim.",9";}else{
			$query="SELECT * FROM `singl` LIMIT 0,9";}

		if($_GET['cat']=="single"){
			$tag="rollover";
			$tag1="rollover";
			$tag2="rollover2";
			$tag3="rollover";
			$tag4="rollover";
		}
		break;
		case "balls":
		$qyerycount="SELECT * FROM `balls`";
		if(!isset($_GET['short'])){
			if($_GET['page']>1){
				$lim=9*($_GET['page']-1);
				$query="SELECT * FROM `balls` LIMIT ".$lim.",9";}else{
				$query="SELECT * FROM `balls` LIMIT 0,9";	 
			}
		}else{
			switch($_GET['short']){
				case "price":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `balls` ORDER BY price+0 ASC LIMIT ".$lim.",9";}else{
					$query="SELECT * FROM `balls` ORDER BY price+0 ASC LIMIT 0,9";
				}
				break;
			
				case "diameter":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `balls` ORDER BY diameter+0 ASC LIMIT ".$lim.",9";}else{
					$query="SELECT * FROM `balls` ORDER BY diameter+0 ASC LIMIT 0,9";
				}
				break;
			}	
			
		}

		if($_GET['cat']=="balls"){
			$tag="rollover";
			$tag1="rollover";
			$tag2="rollover";
			$tag3="rollover2";
			$tag4="rollover";
		}
		break;
		case "stage_pyrotechnics":
		$qyerycount="SELECT * FROM `scenepir`";
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `scenepir` LIMIT ".$lim.",9";}else{
			$query="SELECT * FROM `scenepir` LIMIT 0,9";		 
		}

		if($_GET['cat']=="stage_pyrotechnics"){
			$tag="rollover";
			$tag1="rollover";
			$tag2="rollover";
			$tag3="rollover";
			$tag4="rollover2";
		}
		break;
		case "home":
		echo'<div id="home">

		<div class="zagolovok">
		<a>Наши преимущества</a>
		</div>
		<div class="text">
		<a>Магазины «Феерия.ру» – это качественная сертифицированная пиротехника в Санкт-Петербурге, области и регионах России.</br> 
		Мы предлагаем богатый ассортимент фейерверков на любые запросы и бюджет - от недорогих ракет и бенгальских огней для </br> 
		семейных торжеств до крупных батарей салютов для масштабных мероприятий. В магазинах действует дисконтная система,</br> 
		проводятся распродажи и акции, благодаря чему даже в предновогодний сезон можно купить пиротехнику со скидкой.</br>
		Интернет-магазин пиротехники с бесплатной доставкойдоставкой на дом.</a></br>
		</div>
		<div class="button">
		<a href="?cat=balls" ><img src="images/button.png"></br></a>
		</div>
		<div class="icons">
		<img src="images/icons.png" ></br>
		</div>
		<div class="reklam">
		<img src="images/reklam.png" ></br>
		</div>
		</div>
		</br></br>
		';
		include_once("include/footer.php");
		exit;
		break;
		default:{
			$query="SELECT * FROM `balls` LIMIT 0,9"; 
			$qyerycount="SELECT COUNT(*) FROM `balls`";
		}
	}
	$news = mysql_query($query);
	$row = @mysql_fetch_assoc($news, MYSQL_ASSOC);
	$count=0;
	$rowcount=mysql_num_rows(mysql_query($qyerycount));
	$rowcount2=mysql_num_rows(mysql_query($query));
	$height=225;
	$zz=ceil($rowcount2/3);

	switch($zz){
		case 1:
		$height=$height+465;
		break;
		case 2:
		$height=$height+465*2;
		break;
		case 3:
		$height=$height+465*3;
		break;
	}

	echo'<div class="mid" style="height:'.$height.'px">
	<div class="menu">
	<a href="?cat=single_lines" class="'.$tag.'" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
	<a href="?cat=single_lines"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

	<a href="?cat=professional_batteries" class="'.$tag1.'" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
	<a href="?cat=professional_batteries"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

	<a href="?cat=single" class="'.$tag2.'" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
	<a href="?cat=single"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

	<a href="?cat=balls"  class="'.$tag3.'" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
	<a href="?cat=balls"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>


	<a href="?cat=stage_pyrotechnics" class="'.$tag4.'" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
	<a href="?cat=stage_pyrotechnics"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
	</div>';
	echo'<div class="field_prod">
	<div id="sort">
	<a href="?cat=home" ><img src="images/home.png" height="50px" width="200px"></br></a>
	</div>';
	if($rowcount2>0){
		do{ 
			$count++;
			switch($count){
				case 1;
				echo'
				<div id="prod">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2"> 20</span> <span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></td></span>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod2">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20 </span><span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></td></span>
				<td><span class="letter2">'.$row['weight'].'</span> <span class="letter"><b>кг</></span></td>
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
				echo'

				<div id="prod3">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20 </span><span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod4">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe></div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20</span> <span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].'</span> <span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod5">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20</span> <span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod6">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20 </span><span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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

				echo'
				<div id="prod7">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20 </span><span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod8">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20 </span><span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].' </span><span class="letter"><b>кг</></span></td>
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
				echo'
				<div id="prod9">
				<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
				</div>
				<div id="product_video">
				<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="product_discr">
				<div id="product_price">
				<span class="letter"> <b>Цена:</b></span><span class="letter2">'.$row['price'].'</span><span class="letter"><b>р</b></span> 
				</div>
				</br>
				<table class="table">
				<tbody>
				<tr>
				<td></br><span class="letter"> <b>Калибр:</b></span></td>
				<td></br><span class="letter2">'.$row['diameter'].'</span><span class="letter"><b>"</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"><b>Высота:</b></span></td>
				<td><span class="letter2">20</span> <span class="letter"><b>м</b></span></td>
				</tr>
				<tr>
				<td><span class="letter"> <b>Объем:</b></span></td>
				<td><span class="letter2">'.$row['amount'].'</span></td><span class="letter"><b></b></span>
				</tr>
				<tr>
				<td><span class="letter"><b>Вес:</b></span></td>
				<td><span class="letter2">'.$row['weight'].'</span> <span class="letter"><b>кг</></span></td>
				</tr>
				<tr>
				</tbody>
				</table>
				<div id="product_discr1">
				<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
				</div>
				</div>';
				break;
			}
		}while($row = mysql_fetch_assoc($news, MYSQL_ASSOC)) ;
	}else{echo'</br><span class="letter2" ><strong>К сожалению, в данный момент, в данной категории нет товара.</strong></span>';}
	echo'</div><!--Закрывает поле с товаром--> </div><!-- Конец контент -->';
	if($_GET['cat']!="home"){
		if($rowcount2>0){
			echo'<div id="navigation">
			<ul id="pagination-digg">';
			$back=$_GET['page']-1;
			if($back<=0){$back=1;}
			$next=$_GET['page'];
			if($next>=(ceil($rowcount/9))){$next=ceil(($rowcount/9));}else{
				$next=$_GET['page']+1;}
			echo' <li class="previous-off"><a href="?cat='.$_GET['cat'].'&page='.$back.'">«Назад </a></li>';
 
			if($_GET['page']==1){
				echo' <li class="active">'.$_GET['page'].'</li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">'.($_GET['page']+4).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+5).'">'.($_GET['page']+5).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+6).'">'.($_GET['page']+6).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+7).'">'.($_GET['page']+7).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+8).'">...</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
				';}
 
			if($_GET['page']==2){
 
				echo'<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
				<li class="active">'.$_GET['page'].'</li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">'.($_GET['page']+4).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+5).'">'.($_GET['page']+5).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+6).'">'.($_GET['page']+6).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+7).'">...</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
				';} 
 
			if($_GET['page']==3){

				echo'
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
				<li class="active">'.$_GET['page'].'</li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">'.($_GET['page']+4).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+5).'">'.($_GET['page']+5).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+6).'">...</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
				';
			} 

			if($_GET['page']==4){

				echo'
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
				<li class="active">'.$_GET['page'].'</li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">'.($_GET['page']+4).'</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+5).'">...</a></li>
				<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
				';
			}  
 
			if($_GET['page']>=5){
				if((((ceil($rowcount/9))-5))==($_GET['page'])){
					echo'
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
					<li class="active">'.$_GET['page'].'</li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">...</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
					';
				}else{

					if((((ceil($rowcount/9))-4))==$_GET['page']){
						echo'
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-5).'">'.($_GET['page']-4).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-1).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
						<li class="active">'.$_GET['page'].'</li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
						';
					}
					if((((ceil($rowcount/9))-3))==$_GET['page']){
						echo'
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-6).'">'.($_GET['page']-6).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-5).'">'.($_GET['page']-5).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
						<li class="active">'.$_GET['page'].'</li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
						';
					}
					if((((ceil($rowcount/9))-2))==$_GET['page']){
						echo'
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-7).'">'.($_GET['page']-7).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-6).'">'.($_GET['page']-6).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-5).'">'.($_GET['page']-5).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
						<li class="active">'.$_GET['page'].'</li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
						';
					}
					if((((ceil($rowcount/9))-1))==$_GET['page']){
						echo'
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-8).'">'.($_GET['page']-8).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-7).'">'.($_GET['page']-7).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-6).'">'.($_GET['page']-6).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-5).'">'.($_GET['page']-5).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
						<li class="active">'.$_GET['page'].'</li>
						<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
						';
					}
					if((ceil($rowcount/9))==$_GET['page']){
						echo'
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-9).'">'.($_GET['page']-9).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-8).'">'.($_GET['page']-8).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-7).'">'.($_GET['page']-7).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-6).'">'.($_GET['page']-6).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-5).'">'.($_GET['page']-5).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
						<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
						<li class="active">'.$_GET['page'].'</li>
						';
					}
				}
 
				if(($_GET['page']>=5)&&($_GET['page']<(ceil($rowcount/9))-5)){
					echo'
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-4).'">'.($_GET['page']-4).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-3).'">'.($_GET['page']-3).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-2).'">'.($_GET['page']-2).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']-1).'">'.($_GET['page']-1).'</a></li>
					<li class="active">'.$_GET['page'].'</li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+1).'">'.($_GET['page']+1).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+2).'">'.($_GET['page']+2).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+3).'">'.($_GET['page']+3).'</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.($_GET['page']+4).'">...</a></li>
					<li><a href="?cat='.$_GET['cat'].'&page='.ceil($rowcount/9).'">'.ceil($rowcount/9).'</a></li>
					';}}

			if($_GET['page']!=ceil($rowcount/9)){
				if(isset($_GET['short'])){$short="short=";}
				echo'<li class="next" ><a href="?cat='.$_GET['cat'].'&page='.$next.'&'.$short.'">Вперед »</a></li></ul>';}else{
				echo'<li class="next" ><a href="?cat='.$_GET['cat'].'&page='.$next.'" class="disabled">Вперед »</a></li></ul>';
			}
			echo'</div></br></br>';}}

	echo'</div> <!--Конец мидл -->';	}

?>