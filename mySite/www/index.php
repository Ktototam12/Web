 <!DOCTYPE html>
<html>
<head>
  <?php 
    require_once "functions/functions.php";
    $title = "Фильмы и сериалы";
    require_once "blocks/head.php" ;
	$news = getNews(3, $id);
  ?>
  <link rel="icon" type="image/png" href="/img/iconcinema.png"> 
</head>
<body>
   <?php require_once "blocks/header.php" ?>
   
   <div id="wrapper">
		<div id="leftCol">
		
		<?php
			for($i = 0; $i<count($news); $i++){
				if($i == 0){
					echo "<div id=\"bigArticle\">";
				}
				else{
					echo "<div class=\"article\">";
				}
				echo '<img src="/img/articles/'.$news[$i]["id"].'.png" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				<p>'.$news[$i]["intro_text"].'</p>
				<a href="/article.php?id='.$news[$i]["id"].'">
				<div class="more">Далее</div>
				</a>
				</div>' ;
				
			}
			if($i==0){
				echo "<div class=\"clear\"><br></div>";
			}
		?>
		
		<!-- 
        <div id="bigArticle">
         <img src="/img/articles/1.png" alt="Статья 1" title="Статья 1">
         <h2>Новинки кино</h2>
         <p>В этой статье (а она будет постоянно обновляться) мы расскажем вам о самых лучших новых фильмах
            и мультфильмах 2020 и 2021 года, которые уже вышли в хорошем качестве и которые можно посмотреть
             в онлайн-кинотеатрах или же скачать на торрент-трекерах (но естественно только для ознакомления).</p>
          <a href="/article.php">
           <div class="more">Далее</div>
          </a>
       </div>
       <div class="clear"><br></div>
       <div class="article">
           <img src="/img/articles/2.jpg" alt="Статья 1" title="Статья 1">
           <h2>Самые ожидаемые фильмы</h2>
           <p>В этой статье (а она будет постоянно обновляться) мы расскажем вам о самых ожидаемых предстоящих фильмах, 
             которые еще только выйдут на экраны российских кинотеатров, с их главными подробностями, описанием сюжета, 
             датой премьеры и трейлерами на русском.</p>
           <a href="/article.php">
             <div class="more">Далее</div>
           </a>
       </div>
       <div class="article">
           <img src="/img/articles/3.jpg" alt="Статья 1" title="Статья 1">
           <h2>Календарь выхода фильмов</h2>
           <p>На многих киносайтах можно найти подробное расписание выхода тех или иных фильмов, но так как фильмов каждый
              месяц выходит порядка сотни, то зачастую в них тяжело отыскать действительно стоящие фильмы: настоящие киношедевры
               и будущие блокбастеры. Поэтому, чтобы вам легко было ориентироваться и быть всегда в курсе о новинках российского
                кинопроката, мы публикуем этот график самых знаковых кинопремьер в России, в котором вы найдете даты выхода самых
                 ожидаемых и самых лучших фильмов, а также краткое их описание, главные подробности и лучшие трейлеры.</p>
           <a href="/article.php">
             <div class="more">Далее</div>
           </a>
       </div>
	   -->
		</div>
		
    <?php require_once "blocks/rightCol.php" ?>
   </div>
   
   <?php require_once "blocks/footer.php" ?>
</body>
</html>