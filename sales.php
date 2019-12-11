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
  <li><a href="sales.php" style="float:left">Акции</a></li>
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
  <li><a href="sales.php" style="float:left">Акции</a></li>
  <li><a href="list.php" style="float:left">Туры</a></li>
  <li><a href="info.php" style="float:left">Контакты</a></li>
   <li><a href="authpage.php" style="float:right">Выйти</a></li>
   <form class="serch">
   <p><input type="search" name="q" placeholder="Поиск по сайту" > 
   <input type="submit" value="Найти"></p>
  </form>
</ul>
<?php endif; ?>
<p> Акции</p>
</body>
</html>