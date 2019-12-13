<?php 
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass= md5($pass."slkf;sjkdf;d");
$mysql = new mysqli ('localhost', 'root', '', 'register-bd');
  $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '".md5($pass)."'");
  $user = $result->fetch_assoc();
  if (count($user) == 0) {
  echo "Такой пользователь не найден, нажмите <a href='authpage.php'>сюда</a>, чтобы попробовать еще раз.";
  exit();
}
session_start();
setcookie('user', $user['login'], time() + 3600, "/");
setcookie('email', $user['email'], time() + 3600, "/");
$_SESSION['login'] = $user['login'];
    $mysql ->close();
header('Location: index.php');
?>