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
   <form class="serch">
   <p><input type="search" name="q" placeholder="Поиск по сайту" > 
   <input type="submit" value="Найти"></p>
  </form>
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
 <h1 align=center> Турция</h1>
       <div class="card1">
 <div class="img1st">.</div>
 </div>
 <p class="newstext">Paloma Oceana Resort 5*, награжденный престижным сертификатом Green Star за поддержку экологии, находится на первой береговой линии в посёлке Кумкёй в 5 км от города Сиде. Обладает большой зеленой территорией с развитой инфраструктурой, на которой расположены главные здания, бунгало, а также виллы в эксклюзивной зоне с собственным бассейном и баром. Широкий песчаный пляж награжден Голубым флагом за чистоту и безопасность.
Отель работает по концепции Luxury Ultra All Inclusive и предлагает своим гостям экологически чистые продукты и вино собственного производства из винограда, выращенного на своей же ферме. К услугам гостей – несколько бассейнов, в том числе, с водными горками, активная анимация, различные виды фитнеса, аквааэробика, мини-гольф, настольные игры и многое другое. Вечером можно расслабиться в SPA-центре, повеселиться на вечеринке с танцами под живую музыку или посмотреть профессиональные шоу-программы.</p>
<div class="comments1">
<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','','register-bd');
  $query ="SELECT `name`,`com` FROM `comments`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
    echo "<table>";
    echo "<tr>";
    echo "<td><b>".$rows["name"].":</b></td>";
        echo "<td>".$rows["com"]."</td>";
    echo "</tr>"; 
        echo "</table>";        
  }
    mysqli_free_result($result);
mysqli_close($mysql);
?>
<?php 
   error_reporting(0);
   if($_COOKIE['user'] == ''):
     ?>
   <p class="warn"><a href="authpage.php">Войдите</a>
  или <a href="regpage.php">зарегистрируйтесь</a>, чтобы получить доступ к комментариям!</p>
   <?php else: ?>
    <p> <?=$_COOKIE['user']?>:</p>
<form action="comm1.php" method="POST">
  <label for="com"></label>
<textarea name="com" cols="100" rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>
 <?php endif; ?>
</div>