<?php
$minp=0;
$maxp=90000;
$mind="2.5";
$maxd="2.5";

/*
if(isset($_POST['amountprice'])){
$tmp=$_POST['amountprice'];
$minmax=explode("-",$tmp);
$minp=preg_replace("/[^0-9]/", '', $minmax[0]);
$maxp=preg_replace("/[^0-9]/", '', $minmax[1]);	
}

if(isset($_POST['amountdiameter'])){
$tmp=$_POST['amountdiameter'];
$minmax=explode("-",$tmp);
$mind=preg_replace("/[^0-9]/", '', $minmax[0]);
$maxd=preg_replace("/[^0-9]/", '', $minmax[1]);		
	
}*/
if(isset($_GET['calibr'])){
	if($_GET['calibr']=="all"){
		$mind=0;
		$maxd=6;
	}else{
		switch($_GET['calibr']){			
			case "2.5":
			$mind="2.5";
			$maxd="2.5";
			break;
			case "3":
			$mind="3";
			$maxd="3";
			break;
			case "4":
			$mind="4";
			$maxd="4";
			break;
			case "5":
			$mind="5";
			$maxd="5";
			break;
			case "6":
			$mind="6";
			$maxd="6";
			break;
		}
	}
}

if(isset($_GET['cat'])){
	if(!isset($_GET['page'])&&($_GET['cat']!="home")&&($_GET['cat']!="404")&&($_GET['cat']!="about")&&($_GET['cat']!="contact")){header( "Refresh: 0; url=/?cat=".$_GET['cat']."&page=1");exit;}	 
	switch($_GET['cat']){
		case "404":
		echo'
		<div class="mid" style="height:10px">
		<div class="menu">
		<a href="/?cat=single_lines&page=1" class="rollover" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
		<a href="/?cat=single_lines&page=1"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

		<a href="/?cat=professional_batteries&page=1" class="rollover" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
		<a href="/?cat=professional_batteries&page=1"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

		<a href="/?cat=single&page=1" class="rollover" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
		<a href="/?cat=single&page=1"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

		<a href="/?cat=balls&page=1"  class="rollover" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
		<a href="/?cat=balls&page=1"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>


		<a href="?cat=stage_pyrotechnics&page=1" class="rollover" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
		<a href="?cat=stage_pyrotechnics&page=1"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
		</div>
		</div><div id="error404">
		<img src="images/404.png" style="width:100%;">
		</div></div>';
		include_once("include/footer.php");
		exit;
		break;
		
		case "about":
		echo'
		<div class="mid" style="height:10px">
		<div class="menu">
		<a href="/?cat=single_lines&page=1" class="rollover" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
		<a href="/?cat=single_lines&page=1"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

		<a href="/?cat=professional_batteries&page=1" class="rollover" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
		<a href="/?cat=professional_batteries&page=1"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

		<a href="/?cat=single&page=1" class="rollover" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
		<a href="/?cat=single&page=1"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

		<a href="/?cat=balls&page=1"  class="rollover" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
		<a href="/?cat=balls&page=1"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>

		<a href="?cat=stage_pyrotechnics&page=1" class="rollover" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
		<a href="?cat=stage_pyrotechnics&page=1"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
		</div>
		</div>
	
		</div>
		<div id="gohome">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="200px"></br></a>
		</div>
		<div id="about">
		<h2>О нас</h2>
		<p>Современный праздник, как правило, не обходится без салютов, фейерверков, хлопушек и петард. Возьмем, например, свадебное торжество, где во время первого танца молодоженов все гости взрывают хлопушки с разноцветными конфетти, а в самом конце пускают в небо салют в честь молодой семьи. Огненные символы верности, любви, счастья, страсти и нежности придают необыкновенно романтическую атмосферу празднику.</p></br>

		<p>Мудрые китайцы изобрели в свое время порох отнюдь не для военных целей. Они изобрели его для фейерверков. Чтобы злобных духов разгонять. Многие народы с глубокой древности украшали свои праздники огненно-световыми эффектами. Сначала были большие ярко горящие костры или множество мелких огоньков - иллюминация. Постепенно огненно-световые представления совершенствовались и, в конце концов, стали тем, что мы сейчас называем фейерверками.</p></br>

		<p>Наша компания, амбициозная и динамично развивающаяся. В отличие от большинства других, мы делаем акцент не на сиюминутную прибыль, а на долгосрочные отношения с нашими клиентами, на постоянное совершенствование, повышение качества продукции и услуг.</p></br>

		<p>Важно отметить, что с 2015 года, мы являемся компанией – импортером, что способствует поддержанию низких цен. Вся продукция сертифицирована в соответствии с законодательством РФ.</p></br>

		<p>Наша история берет начало в далеком 1994 году. Профиль работы - проведение фейерверков различного масштаба и продажа фейерверков бытового назначения. Становление компании выпало на сложный для всей России период, когда многие конкуренты не выдержали натиска времени и событий, и растворились на коммерческом горизонте. Наша компания в это время развивалась и набирала обороты на рынке пиротехники, ассортимент пиротехнических изделий постоянно расширялся. Благодаря чему, за эти годы мы приобрели не только огромный, бесценный опыт, но и бесчисленное количество положительных отзывов наших клиентов.
		</p></br>
		<p>На сегодняшний день, нам доверяют проводить мероприятия, различного масштаба, от дня рождения до дня города.</p></div>
		<div id="lowabout">
		<div id="lol">
		<img src="images/lol.png" ></br>
		</div>
		<section class="center slider">';
		$lolquery=("SELECT * FROM pli");
		$lolnews = mysql_query($lolquery);
		$lolrow = @mysql_fetch_assoc($lolnews, MYSQL_ASSOC);
		$lolrowcount=mysql_num_rows(mysql_query($lolquery));

		while($lolrow = mysql_fetch_assoc($lolnews, MYSQL_ASSOC)){
			echo'<div>
			<a href="'.$lolrow['link'].'" target="_blank">
			<img src="images/items/'.$lolrow['name'].'.png"  ></a>
			</div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:true,
		infinite: true,
		centerMode: true,
		speed: 1,
		slidesToShow: 3,
		slidesToScroll: 1
		});
		</script>
		</div>';
		include_once("include/footer.php");
		exit;
		
		break;
		
		case "contact":		
		echo'
		<div class="mid" style="height:10px">
		<div class="menu">
		<a href="/?cat=single_lines&page=1" class="rollover" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
		<a href="/?cat=single_lines&page=1"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

		<a href="/?cat=professional_batteries&page=1" class="rollover" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
		<a href="/?cat=professional_batteries&page=1"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

		<a href="/?cat=single&page=1" class="rollover" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
		<a href="/?cat=single&page=1"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

		<a href="/?cat=balls&page=1"  class="rollover" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
		<a href="/?cat=balls&page=1"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>

		<a href="?cat=stage_pyrotechnics&page=1" class="rollover" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
		<a href="?cat=stage_pyrotechnics&page=1"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
		</div>
		</div>
		<div id="gohome">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="200px"></br></a>
		</div>';
		echo'<div class="cont">Контакты
		<div class="info">
		<f> Оренбург</f></br></br>
		Адрес:</br>
		пр.Дзержинского 36</br></br>
		Телефон:</br>
		+7 (912) 347 77 78</br></br>
		Электронная почта:</br>
		fireworks@123pli.ru</br></br>
		<div class="map">
		<iframe src="https://yandex.ru/map-widget/v1/-/CBU7EScyPD" width="560" height="400" frameborder="0"></iframe>
		</div>
		</div>
		</div>';
   
		echo' <div id="lowabout">
		<div id="lol">
		<img src="images/lol.png" ></br>
		</div>
		<section class="center slider">';
		$lolquery=("SELECT * FROM pli");
		$lolnews = mysql_query($lolquery);
		$lolrow = @mysql_fetch_assoc($lolnews, MYSQL_ASSOC);
		$lolrowcount=mysql_num_rows(mysql_query($lolquery));

		while($lolrow = mysql_fetch_assoc($lolnews, MYSQL_ASSOC)){
			echo'<div>
			<a href="'.$lolrow['link'].'" target="_blank">
			<img src="images/items/'.$lolrow['name'].'.png"  ></a>
			</div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:true,
		infinite: true,
		centerMode: true,
		speed: 1,
		slidesToShow: 3,
		slidesToScroll: 1
		});
		</script>
		</div>';
		
		include_once("include/footer.php");
		exit;
	    
		break;
		
		case "engineering_works":
		echo'<div class="mid" style="height:10px">
		<div class="menu">
		<a href="/?cat=single_lines&page=1" class="rollover" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
		<a href="/?cat=single_lines&page=1"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

		<a href="/?cat=professional_batteries&page=1" class="rollover" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
		<a href="/?cat=professional_batteries&page=1"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

		<a href="/?cat=single&page=1" class="rollover" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
		<a href="/?cat=single&page=1"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

		<a href="/?cat=balls&page=1"  class="rollover" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
		<a href="/?cat=balls&page=1"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>

		<a href="?cat=stage_pyrotechnics&page=1" class="rollover" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
		<a href="?cat=stage_pyrotechnics&page=1"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
		</div>
		</div>
		<div id="gohome">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="200px"></br></a>
		</div>';
	
		echo' <div class="works">
		<img src="images/sorry.png">
		</div>
		';
		
		include_once("include/footer.php");
		exit;
		break;
		
		case "single_lines":
		$qyerycount="SELECT * FROM `singleline` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd;
		
		if(!isset($_GET['short'])){		
		
			if($_GET['page']>1){
				$lim=9*($_GET['page']-1);
				$query="SELECT * FROM `singleline` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}else{
				$query="SELECT * FROM `singleline` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";
			}
		}else{
			switch($_GET['short']){
				case "price":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `singleline` ORDER BY `price` ";}else{
					$query="SELECT * FROM `singleline` ORDER BY `price` ";
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
		$qyerycount="SELECT * FROM `batter` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd."";
		
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `batter` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}else{
			$query="SELECT * FROM `batter` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}

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
		$qyerycount="SELECT * FROM `singl` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd."";
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `singl` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}else{
			$query="SELECT * FROM `singl` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}

		if($_GET['cat']=="single"){
			$tag="rollover";
			$tag1="rollover";
			$tag2="rollover2";
			$tag3="rollover";
			$tag4="rollover";
		}
		break;
		case "balls":
		$qyerycount="SELECT * FROM `balls` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd."";
		if(!isset($_GET['short'])){
			if($_GET['page']>1){
				$lim=9*($_GET['page']-1);
				$query="SELECT * FROM `balls` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}else{
				$query="SELECT * FROM `balls` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";	 
			}
		}else{
			switch($_GET['short']){
				case "price":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `balls` ORDER BY price+0 ASC ";}else{
					$query="SELECT * FROM `balls` ORDER BY price+0 ASC ";
				}
				break;
			
				case "diameter":
				if($_GET['page']>1){
					$lim=9*($_GET['page']-1);
					$query="SELECT * FROM `balls` ORDER BY diameter+0 ASC ";}else{
					$query="SELECT * FROM `balls` ORDER BY diameter+0 ASC ";
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
		$qyerycount="SELECT * FROM `scenepir` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd."";
		if($_GET['page']>1){
			$lim=9*($_GET['page']-1);
			$query="SELECT * FROM `scenepir` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";}else{
			$query="SELECT * FROM `scenepir` WHERE price>=".$minp." AND price<=".$maxp." AND diameter>=".$mind." AND diameter<=".$maxd." ";		 
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
		<h1>Наши преимущества</h1>
		</div>
		<div class="text">
		<a>Профессиональный фейерверк- это творческий и в тоже время трудоемкий процесс. На подготовку только одного заказа требуется огромное количество сил и времени, поэтому для компаний, занимающихся пиротехническими изделиями очень важно, чтобы реализуемый товар был надежный и сертифицированный. Наша компания является импортером высококачественной пиротехнической продукции. У нас вы можете найти широкий ассортимент изделий.
		</a></br>
		</div>
		<div class="button">
		<a href="?cat=balls" ><img src="images/button.png"></br></a>
		</div>
		<div class="icons">
		<img src="images/icons.png" ></br>
		</div>
		<!--<div class="reklam">
		<img src="images/reklam.png" ></br>
		</div>-->
		</div>

		<div id="low">
		<div id="lol">
		<img src="images/lol.png" ></br>
		</div>
		<section class="center slider">';
		$lolquery=("SELECT * FROM pli");
		$lolnews = mysql_query($lolquery);
		$lolrow = @mysql_fetch_assoc($lolnews, MYSQL_ASSOC);
		$lolrowcount=mysql_num_rows(mysql_query($lolquery));

		while($lolrow = mysql_fetch_assoc($lolnews, MYSQL_ASSOC)){
			echo'<div>
			<a href="'.$lolrow['link'].'" target="_blank">
			<img src="images/items/'.$lolrow['name'].'.png"  ></a>
			</div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:true,
		infinite: true,
		centerMode: true,
		speed: 1,
		slidesToShow: 3,
		slidesToScroll: 1
		});
		</script>
		</div>';
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
		default:
			$height=$height+465*($zz-1);
		break;
	}
echo $zz;
	echo'<div class="mid" style="height:'.$height.'px">';
	
	echo'<div class="menu">
	<a href="?cat=single_lines&page=1" class="'.$tag.'" style="position:absolute;left:-15px;"><img src="images/single.png"  style="height: 80px;position:absolute;left:50px;top:-140px;"
	<a href="?cat=single_lines&page=1"><text style="position:absolute;left:60px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ОДИНОЧНЫЕ<p>линии</font></p></a></a>

	<a href="?cat=professional_batteries&page=1" class="'.$tag1.'" style="position:absolute;left:215px;"><img src="images/prof.png"  style="height: 80px;position:absolute;left:90px;top:-140px;"
	<a href="?cat=professional_batteries&page=1"><text style="position:absolute;left:20px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ПРОФЕССИОНАЛЬНЫЕ<p>батареи</p></font></a></a></font>

	<a href="?cat=single&page=1" class="'.$tag2.'" style="position:absolute;left:453px;"><img src="images/singles.png"  style="height: 80px;position:absolute;left:65px;top:-140px;"
	<a href="?cat=single&page=1"><text style="position:absolute;left:73px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">СИНГЛЫ</font></a></a>

	<a href="?cat=balls&page=1"  class="'.$tag3.'" style="position:absolute;left:665px;"><img src="images/shar.png"  style="height: 80px;position:absolute;left:70px;top:-140px;"
	<a href="?cat=balls&page=1"><text style="position:absolute;left:75px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;"<><font color="red">ШАРЫ</font></a></a>

	<a href="?cat=stage_pyrotechnics&page=1" class="'.$tag4.'" style="position:absolute;left:865px;"><img src="images/scenic.png"  style="height: 80px;position:absolute;left:60px;top:-140px;"
	<a href="?cat=stage_pyrotechnics&page=1"><text style="position:absolute;left:40px;top:-50px;font-size:18px;font-weight:10;white-space: nowrap;text-align: center;" ><font color="red">СЦЕНИЧЕСКАЯ<p>пиротехника</font></p></a></a>
	</div>';
	echo'<div class="field_prod">';
	if($_GET['cat']=="balls" ){
		echo'<div id="filter1">
		<div id="filter2"><p>
		<form action="action.php?" method="post">
		<p><b>Калибр:</b></p>';
		
		/*echo'<p><input name="calibr" type="radio" value="2.5"';if(isset($_GET['calibr'])){if($_GET['calibr']=="2.5"){ echo 'checked';
			}} echo'>2.5"</p>';*/
		echo'<p><input name="calibr" type="radio" value="2.5" checked >2.5"</p>';
		echo' <p><input name="calibr" type="radio" value="3"';if(isset($_GET['calibr'])){if($_GET['calibr']=="3"){ echo 'checked';
			}} echo'>3"</p>';
		echo' <p><input name="calibr" type="radio" value="4"';if(isset($_GET['calibr'])){if($_GET['calibr']=="4"){ echo 'checked';
			}} echo '>4"</p>';
		echo' <p><input name="calibr" type="radio" value="5"';if(isset($_GET['calibr'])){if($_GET['calibr']=="5"){ echo 'checked';
			}} echo '>5"</p>';
		echo' <p><input name="calibr" type="radio" value="6"';if(isset($_GET['calibr'])){if($_GET['calibr']=="6"){ echo 'checked';
			}} echo '>6"</p>';
		echo'<p><input name="calibr" type="radio" value="all"'; if(isset($_GET['calibr'])){if($_GET['calibr']=="all"){echo 'checked';
			}} echo'> Все</p>';
		echo'</div>
		<div id="okfilter">
		<input type="image" src="images/accept.png" width=210px height=40px; value="Проверить"">
		</form>
		</div>
		</div>';
	}
		
	echo'<div id="sort">
	<a href="?cat=home" ><img src="images/home.png" height="50px" width="200px"></br></a>
	</div>';
	$xx=0;
	$yy=0;
	$topp=1;
	$leftt=1;
	if($rowcount2>0){
		while($row = mysql_fetch_assoc($news, MYSQL_ASSOC)){ 
			$xx++;
			if(($xx==1)||($xx==4
			)){
				$leftt=1;	
			}else{
				$leftt=$leftt+375;
			}			
			if($xx==4){
				$topp=$topp+465;	
				$yy++;
				$xx=0;	
			}
			echo'
			<div id="prod" style="left:'.$leftt.'px; top:'.$topp.'px;">
			<div id="product_name"><span class="letter"><b>'.$row['name'].'</b></span>
			</div>
			<div id="product_video">
			<iframe width="320" height="195" src="https://www.youtube.com/embed/'.$row['video'].'" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="product_discr">
			<div id="product_price">
			<span class="letter"> <b>Цена:</b></span><b><span class="letter2">'.$row['price'].'</span></b></span><span class="letter"><b>р</b></span> 
			</div>
			</br>
			<table class="table">
			<tbody>
			<tr>
			<td></br><span class="letter"> <b>Калибр:</b></span></td>
			<td></br><span class="letter2"><b><span class="letter2">'.$row['diameter'].'</span></b></span><span class="letter"><b>"</b></span></td>
			</tr>
			<!--<tr>
			<td><span class="letter"><b>Высота:</b></span></td>
			<td><span class="letter2"> 20</span> <span class="letter"><b>м</b></span></td>
			</tr>-->
			<tr>
			<td><span class="letter"> <b>Объем:</b></span></td>
			<td><span class="letter2"><b><span class="letter2">'.$row['amount'].'</span></b></span><span class="letter"><b> м³</b></span></td>
			</tr>
			<tr>
			<td><span class="letter"><b>Вес:</b></td></span>
			<td><span class="letter2"><b><span class="letter2">'.$row['weight'].'</span></b></span><span class="letter"><b> кг</></span></td>
			</tr>
			<tr>
			</tbody>
			</table>
			<div id="product_discr1">
			<span class="letter"><b>Описание:</b></span></br>'.$row['effect'].'</div>
			</div>
			</div>';
		
		}
	}else{echo'</br><span class="letter2" ><strong>К сожалению, в данный момент, в данной категории нет товара.</strong></span>';}
	echo'</div><!--Закрывает поле с товаром--> </div><!-- Конец контент -->';
	/*if($_GET['cat']!="home"){
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
	echo'<li class="next" ><a href="?cat='.$_GET['cat'].'&page='.$next.'
	">Вперед »</a></li></ul>';}else{
	echo'<li class="next" ><a href="?cat='.$_GET['cat'].'&page='.$next.'" class="disabled">Вперед »</a></li></ul>';
	}
	echo'</div></br></br>';}}*/

	echo'</div> <!--Конец мидл -->';	}

?>