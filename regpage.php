<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</title>
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
<h1>Регистрация</h1>
        <div class="reg_auth"> 
 <form action="reg.php" method="POST">
           <strong>Введите ваш email:</strong>
            <br>
            <input type="email" name="email" placeholder="Введите email" required/>
            <br>
            <strong> Введите ваш логин: </strong>
            <br>
            <input type="text" name="login" placeholder="Введите логин" title="Имя должно содержать от 6 символов, включая большие и маленькие латинские буквы."/>
            <br>
            <strong>Введите  ваш пароль:</strong>
            <br>
            <input type="password" name="pass" placeholder="Введите пароль" title="Пароль должен содержать не менее 8 символов, включая большие и маленькие латинские буквы, а также цифры.">
            <br>
            <strong>Повторите пароль:</strong>
            <br>
            <input type="password" name="pass_2" placeholder="Введите пароль еще раз">
            <br>
            <input type="submit" value="Отправить">
            <br>
        </form>
    <h3> Уже зарегистрированы? Нажмите <a href="authpage.php">сюда</a>, чтобы войти.</h3>
</div>
    </body>
</div>
</body>
</html>