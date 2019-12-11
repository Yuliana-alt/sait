<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  $mysql = new mysqli('localhost','root','','register-bd');
  $mysql->query("INSERT INTO `comments5` (`name`,`com`,`email`)
  VALUES('$name', '$com', '$email')"); 
 
  $mysql->close();
  header('Location:italy.php');
?>