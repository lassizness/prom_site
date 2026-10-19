<?php
$diameter = $cat === 'balls' && $calibr !== 'all' ? (float)$calibr : null;
switch($cat){
		case "404":
		echo'
		<div class="mid" style="height:10px">
		' . catalogMenu($cat) . '
		</div><div id="error404">
		<img src="images/404.png" style="width:100%;">
		</div></div>';
		include_once("include/footer.php");
		exit;
		break;
		
		case "about":
		echo'
		<div class="mid" style="height:10px">
		' . catalogMenu($cat) . '
		</div>
	
		</div>
		<div id="gohome">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="250px"><br></a>
		</div>
			<div id="aboutc">
		<div id="about">
		<h2>О нас</h2>
		<p>Современный праздник, как правило, не обходится без салютов, фейерверков, хлопушек и петард. Возьмем, например, свадебное торжество, где во время первого танца молодоженов все гости взрывают хлопушки с разноцветными конфетти, а в самом конце пускают в небо салют в честь молодой семьи. Огненные символы верности, любви, счастья, страсти и нежности придают необыкновенно романтическую атмосферу празднику.</p><br>

		<p>Мудрые китайцы изобрели в свое время порох отнюдь не для военных целей. Они изобрели его для фейерверков. Чтобы злобных духов разгонять. Многие народы с глубокой древности украшали свои праздники огненно-световыми эффектами. Сначала были большие ярко горящие костры или множество мелких огоньков - иллюминация. Постепенно огненно-световые представления совершенствовались и, в конце концов, стали тем, что мы сейчас называем фейерверками.</p><br>

		<p>Наша компания, амбициозная и динамично развивающаяся. В отличие от большинства других, мы делаем акцент не на сиюминутную прибыль, а на долгосрочные отношения с нашими клиентами, на постоянное совершенствование, повышение качества продукции и услуг.</p><br>

		<p>Важно отметить, что с 2015 года, мы являемся компанией – импортером, что способствует поддержанию низких цен. Вся продукция сертифицирована в соответствии с законодательством РФ.</p><br>

		<p>Наша история берет начало в далеком 1994 году. Профиль работы - проведение фейерверков различного масштаба и продажа фейерверков бытового назначения. Становление компании выпало на сложный для всей России период, когда многие конкуренты не выдержали натиска времени и событий, и растворились на коммерческом горизонте. Наша компания в это время развивалась и набирала обороты на рынке пиротехники, ассортимент пиротехнических изделий постоянно расширялся. Благодаря чему, за эти годы мы приобрели не только огромный, бесценный опыт, но и бесчисленное количество положительных отзывов наших клиентов.
		</p><br>
		<p>На сегодняшний день, нам доверяют проводить мероприятия, различного масштаба, от дня рождения до дня города.</p></div></div>
		<div id="rennab"><img src="../images/imageb.png" width="1120px" height="120px" alt=""> </div>
		<div id="lowabout">
		<div id="lol">
		<img src="images/lol.png" ><br>
		</div>
		<section class="center slider">';
		$lolnews = $db->query('SELECT name, link FROM pli ORDER BY name')->fetchAll();
		foreach($lolnews as $lolrow){
			if(!preg_match('/^[a-zA-Z0-9_-]+$/', $lolrow['name'])) continue;
			if(!filter_var($lolrow['link'], FILTER_VALIDATE_URL) || !in_array(parse_url($lolrow['link'], PHP_URL_SCHEME), ['http', 'https'], true)) continue;
			echo'<div><a href="'.htmlspecialchars($lolrow['link'], ENT_QUOTES, 'UTF-8').'" target="_blank" rel="noopener noreferrer"><picture><source type="image/webp" srcset="/image.php?name='.rawurlencode($lolrow['name']).'"><img src="images/items/'.rawurlencode($lolrow['name']).'.png" alt="'.htmlspecialchars($lolrow['name'], ENT_QUOTES, 'UTF-8').'" loading="lazy" decoding="async" width="370" height="220"></picture></a></div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:"ondemand",
		infinite: true,
		centerMode: true,
		speed: 300,
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
		' . catalogMenu($cat) . '
		</div>
		<div id="gohome">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="250px"><br></a>
		</div>';
		echo'<div class="cont">Контакты
		<div class="info">
		<f> Оренбург</f><br><br>
		Адрес:<br>
		пр.Дзержинского 36<br><br>
		Телефон:<br>
		+7 (912) 347 77 78<br><br>
		Электронная почта:<br>
		fireworks@123pli.ru<br><br>
		<div class="map">
		<iframe src="https://yandex.ru/map-widget/v1/-/CBU7EScyPD" width="560" height="400" frameborder="0"></iframe>
		</div>
		</div>
		</div>';
   echo'<div id="rennab"><img src="../images/imageb.png" width="1120px" height="120px" alt=""> </div>';
		echo' <div id="lowabout">
		<div id="lol">
		<img src="images/lol.png" ><br>
		</div>
		<section class="center slider">';
		$lolnews = $db->query('SELECT name, link FROM pli ORDER BY name')->fetchAll();
		foreach($lolnews as $lolrow){
			echo'<div><a href="'.htmlspecialchars($lolrow['link'], ENT_QUOTES, 'UTF-8').'" target="_blank" rel="noopener noreferrer"><picture><source type="image/webp" srcset="/image.php?name='.rawurlencode($lolrow['name']).'"><img src="images/items/'.rawurlencode($lolrow['name']).'.png" alt="'.htmlspecialchars($lolrow['name'], ENT_QUOTES, 'UTF-8').'" loading="lazy" decoding="async" width="370" height="220"></picture></a></div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:"ondemand",
		infinite: true,
		centerMode: true,
		speed: 300,
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
		' . catalogMenu($cat) . '
		</div>';
	
		echo' <div class="works">
		<img src="images/sorry.png">
		<div id="noitems1"><div id="noitems2"><span id="textnoitems"><b><p>Страница находится в разработке.</p><p>Чтобы продолжить работу, перейдите на главную страницу сайта.</p></b></span></div><div id="gohome1">
		<a href="?cat=home" ><img src="images/home.png" height="50px" width="250px"><br></a>
		</div></div>
		</div>
		';
		
		include_once("include/footer.php");
		exit;
		break;
		
		case "single_lines":
		case "professional_batteries":
		case "single":
		case "balls":
		case "stage_pyrotechnics":
		break;
		case "home":
		echo'<div id="home">
		<div class="zagolovok">
		<h1>Наши преимущества</h1>
		</div>
			<div class="button">
		<a href="?cat=balls&page=1" ><img src="images/button.png"><br></a><br>
		<a href="/load/price.xlsx" ><img src="images/loadprice.png"><br></a>
		</div>
		<div class="text">
		<a>Профессиональный фейерверк- это творческий и в тоже время трудоемкий процесс. На подготовку только одного заказа требуется огромное количество сил и времени, поэтому для компаний, занимающихся пиротехническими изделиями очень важно, чтобы реализуемый товар был надежный и сертифицированный. Наша компания является импортером высококачественной пиротехнической продукции. У нас вы можете найти широкий ассортимент изделий.
		</a><br>
		</div>
	
		<div class="icons">
		<img src="images/icons.png" ><br>
		</div>
		<!--<div class="reklam">
		<img src="images/reklam.png" ><br>
		</div>-->
		</div>
        <div style="position: relative;width: 1120px; margin: 0 auto;"><img src="../images/imageb.png" width="1120px" height="120px" alt=""> </div>
		<div id="low">
		<div id="lol">
		<img src="images/lol.png" ><br>
		</div>
		<section class="center slider">';
		$lolnews = $db->query('SELECT name, link FROM pli ORDER BY name')->fetchAll();
		foreach($lolnews as $lolrow){
			echo'<div><a href="'.htmlspecialchars($lolrow['link'], ENT_QUOTES, 'UTF-8').'" target="_blank" rel="noopener noreferrer"><picture><source type="image/webp" srcset="/image.php?name='.rawurlencode($lolrow['name']).'"><img src="images/items/'.rawurlencode($lolrow['name']).'.png" alt="'.htmlspecialchars($lolrow['name'], ENT_QUOTES, 'UTF-8').'" loading="lazy" decoding="async" width="370" height="220"></picture></a></div>';
		}
		 
		echo'
		</section>
 
		<script src="/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(".center").slick({
		lazyLoad:"ondemand",
		infinite: true,
		centerMode: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1
				});
		</script>
		</div>';
		include_once("include/footer.php");
		exit;
		break;
		default:
		break;
	}
	$catalog = new CatalogRepository($db);
	[$items, $total, $page] = $catalog->getPage($cat, $page, $sort, $diameter);
	require __DIR__.'/catalog.php';?>