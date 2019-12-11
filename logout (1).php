<?php
	session_start();
	session_destroy();
	setcookie('user', $user['login'], time() - 3600, "/");
	setcookie('email', $user['email'], time() - 3600, "/");
header("Location: authpage.php");
?>
