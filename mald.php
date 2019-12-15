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


<h1 align=center> Мальдивы</h1>
       <div class="card1">
 <div class="img4th">.</div>
 </div>
 <p class="newstext">Veranda Resort Pattaya 5* – роскошный отель в районе Джомтьен, расположен на первой береговой линии. Зонты и шезлонги предоставляются бесплатно.
К услугам гостей – ресторан, бар, SPA-центр, бассейн, тренажерный зал, мини-клуб. Все номера в отеле имеют вид на море
В отеле предоставляют номера Residence Zone – 2 Bedrooms Residence с дополнительными привилегиями.
Veranda Resort Pattaya подойдет для любой категории туристов.</p>
<div class="comments1">
<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','','register-bd');
  $query ="SELECT `name`,`com` FROM `comments4`";
 
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
<form action="comm4.php" method="POST">
  <label for="com"></label>
<textarea name="com" cols="100" rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>
</div>
 <?php endif; ?>
