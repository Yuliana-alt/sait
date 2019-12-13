<?php
$mysql = mysqli_connect("localhost","root","",'register-bd');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT * FROM users";
$result = mysqli_query($mysql, $query);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$email_exists = false;
$username_exists = false;
$info_is_valid = true;

while($row = mysqli_fetch_assoc($result))
{
	if($row["email"] == $_POST["email"])
		$email_exists = true;
	if($row["login"] == $_POST["login"])
		$username_exists = true;
}
if ($_POST["login"] != NULL &&
	strlen($_POST["login"]) >= 6 &&
 	preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["login"]) &&
 	($username_exists == false))
{
    echo "";
}
else
{
    echo "Логин введен неверно или занят другим пользователем" . "<br />";
    echo "<h3> Нажмите <a href='regpage.php'>сюда</a>, чтобы зарегистрироваться.</h3>";
    $info_is_valid = false;
    exit();
}
if ($_POST["pass"] != NULL &&
	strlen($_POST["pass"]) >= 6 &&
 	preg_match("![a-z]!", $_POST["pass"]) &&
 	preg_match("![A-Z]!", $_POST["pass"]) &&
 	preg_match("![0-9]!", $_POST["pass"]) &&
 	($_POST["pass"] == $_POST["pass_2"]))
{  
    echo "";
}
else
{
	echo "Пароль введен не верно" . "<br />";
	echo "<h3> Нажмите <a href='regpage.php'>сюда</a>, чтобы зарегистрироваться.</h3>";
	exit();
}
if (preg_match("![0-9a-z-]+@[a-z]+[.][a-z]!", $_POST["email"]) &&
	($email_exists == false))
{
    echo "";
}
else
{
    echo "email неверный или занят другим пользователем" . "<br />";
     echo "<h3> Нажмите <a href='regpage.php'>сюда</a>, чтобы зарегистрироваться.</h3>";
    $info_is_valid = false;
    exit();
}
if($info_is_valid == true) 
{
	$pass= md5($pass."slkf;sjkdf;d");

  $mysql -> query("INSERT INTO `users` (`login`, `pass`, `email`)
VALUES ('$login', '".md5($pass)."', '$email')");
  echo "Регестрация пройдена успешно!";
echo "<h3> Нажмите <a href='authpage.php'>сюда</a>, чтобы войти.</h3>";
}
  else
{
	echo "Ошибка при регистрации.";
}
    $mysql ->close();
;
exit();
?>