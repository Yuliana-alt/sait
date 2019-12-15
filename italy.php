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

<h1 align=center> Италия</h1>
       <div class="card1">
 <div class="img5th">.</div>
 </div>
 <p class="newstext">Vinpearl Discovery 1 Nha Trang (Ex. Vinpearl Golf Land Resort & Villas) 5* – один из отелей цепочки Vinpearl, расположенный на острове Хон Че, в отдалении от города Нячанг. Недалеко от отеля есть парк Vinpearl Land, в котором можно посетить аквапарк и морской океанариум. 
Отель состоит из главного корпуса и вилл с личными бассейнами, расположенными вглубь острова. По территории отеля курсируют гольф-кары.
В отеле работает ресторан, бар, SPA-центр с сауной и джакузи, бассейн, теннисные корты. Для детей есть мини-клуб, развлекательные программы и бассейн.</p>
<div class="comments1">

<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','','register-bd');
  $query ="SELECT `name`,`com` FROM `comments5`";
 
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
<form action="comm5.php" method="POST">
  <label for="com"></label>
<textarea name="com" cols="100" rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>
 <?php endif; ?>
</div>
