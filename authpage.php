<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</title>
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
<h1>Авторизация</h1>
<div class="reg_auth">
 <form action="auth.php" method="POST">
            <strong> Введите ваш логин: </strong>
            <br>
            <input type="text" name="login" placeholder="Введите логин">
            <br>
            <strong>Введите  ваш пароль:</strong>
            <br>
            <input type="password" name="pass" placeholder="Введите пароль">
            <br>
             <input type="submit" value="Отправить">
            <br>
        </form>
        <h3> Нет аккаунта? Нажмите <a href="regpage.php">сюда</a>, чтобы зарегистрироваться.</h3>
    </div>
    </body>
</div>
</body>
</html>