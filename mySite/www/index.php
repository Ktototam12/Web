<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Фильмы и сериалы</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
   <header>
      <div id="logo">
        <a href="/" title="Перейти на главную">
           <span>Н</span>овости <span>К</span>ино
        </a>
      </div>
      <div id="menuHead">
        <a href="/about.php">
          <div style="margin-right: 5%">О нас</div>
        </a>
        <a href="/feedback.php">
          <div>Обратная связь</div>  
        </a>
      </div>
      <div id="regAuth">
      <a href="/reg.php">Регистрация</a> | <a href="auth.php"> Авторизация</a>
      </div>
   </header>
   
   <div id="wrapper">
		<div id="leftCol">
		
		</div>
		<div id="rightCol">
			<div class="banner">
				<img src="/img/banner_1.jpg" alt="Баннер 1" title="Баннер 1">
				
			
			</div>
			<div class="banner">
				<img src="/img/banner_2.jpg" alt="Баннер 2" title="Баннер 2">
				
			
			</div>
		
		</div>
   </div>
   
   <footer>
		<div id="social">
			<a href="http://vk.com" title="Группа Вк" target= "_blank">
				<img src="/img/vk.png" alt="Вк" title="Вк">
			</a>
			<a href="http://facebook.com" title="Группа Facebook" target= "_blank">
				<img src="/img/facebook.png" alt="Facebook" title="Facebook">
			</a>
			<a href="http://twitter.com" title="Группа Twitter" target= "_blank">
				<img src="/img/twitter.png" alt="Twitter" title="Twitter">
			</a>
		</div>
		<div id="rights">
			Все права защищены &copy;<?php echo date('Y')?>
		</div>
   
   </footer>
</body>
</html>