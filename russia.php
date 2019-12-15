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


<h1 align=center> Россия</h1>
       <div class="card1">
 <div class="img3rd">.</div>
 </div>
 <p class="newstext">Санаторий "Русь" рассчитан на прием большого количества гостей: на территории размером 6,4 га размещаются два современных 9-этажных жилых корпуса на 418 номеров,медицинский корпус, SPA центр «ЭльМонт SPA» и комплекс  высокопрофессионального диетического питания, бизнес-центр и конференц-залы. В состав санатория входит два 9-ти этажных жилых корпуса «Эльбрус» и «Машук», 5-ти этажный корпус питания «Галерея Бештау», 5-ти этажный Медицинский центр «Здоровье» и 4-х этажный СПА центр. Все корпуса соединены теплыми переходами и оборудованы лифтами, в том числе для гостей с ограниченными физическими возможностями. В холле корпуса «Эльбрус» расположен бювет минеральной воды («Ессентуки №4»,№17 «Славяновская»).</p>
<div class="comments1">
<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','','register-bd');
  $query ="SELECT `name`,`com` FROM `comments3`";
 
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
<form action="comm3.php" method="POST">
  <label for="com"></label>
<textarea name="com" cols="100" rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>
 <?php endif; ?>
</div>
