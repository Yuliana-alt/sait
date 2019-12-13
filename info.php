<?php
        if($_COOKIE['user'] == ''):
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="header">
   <h1 class="mainpage"> Coral Travel</h1>
   <h2>Ваш отдых в надежных руках!</h2>
</div>
  <ul>
  <li><a href="index.php" style="float:left">Главная</a></li>
  <li><a href="list.php" style="float:left">Туры</a></li>
  <li><a href="info.php" style="float:left">Контакты</a></li>
   <li><a href="authpage.php" style="float:right">Войти</a></li>
</ul>
<?php else: ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="header">
   <h1 class="mainpage"> Coral Travel</h1>
   <h2>Ваш отдых в надежных руках!</h2>
</div>
  <ul>
  <li><a href="index.php" style="float:left">Главная</a></li>
  <li><a href="list.php" style="float:left">Туры</a></li>
  <li><a href="info.php" style="float:left">Контакты</a></li>
   <li><a href="authpage.php" style="float:right">Выйти</a></li>
</ul>
<?php endif; ?>
<p> Наш адресс :107045, г. Москва, ул. Трубная площадь, д. 2, ТЦ «Неглинная Галерея», -1 этаж
</p>
<p> <img src="https://business-asset.com/upload/staticMaps/1a083a0a0dd5206b7f9ebdca36572317.png"></p>
<div class="footer">
  <h3>Контакты:</h3>
  <h5>Наш email: Yuliana.nevzorova@yandex.ru</h5>
<h5>Наш телефон: +7(919) *** ** **</h5>
</div>
</body>
</html>