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
<h1 class="center">Туры</h1>
<form action="" method="POST">
    <select name="sort" size="1">
    <p>Сортировка:
   <option value="Цена">Цена</option>
   <option value="Алфавит">Алфавит</option>
  </select></p>
  <input type="submit" value="Подвтвердить">
      <?php
  $namepr = filter_var(trim($_POST['namepr']),
  FILTER_SANITIZE_STRING);
  $descr = filter_var(trim($_POST['descr']),
  FILTER_SANITIZE_STRING);
  $cost = filter_var(trim($_POST['cost']),
  FILTER_SANITIZE_STRING);
  $sort = filter_var(trim($_POST['sort']),
  FILTER_SANITIZE_STRING);
  
$mysql = new mysqli('localhost','root','','register-bd');
if ($sort == "Цена") {
$query ="SELECT `namepr`,`descr`,`cost`,`photo`,`href` FROM `katalog` ORDER BY `cost` ";}
elseif ($sort == "Алфавит") {
$query ="SELECT `namepr`,`descr`,`cost`,`photo`,`href` FROM `katalog` ORDER BY `namepr` ";}
elseif ($sort == "") {
$query ="SELECT `namepr`,`descr`,`cost`,`photo`,`href` FROM `katalog` ";}
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
      echo "<link rel='stylesheet' href='table.css'>";
    echo "<table >";
    echo "<tr><td rowspan=3 width=650 height=250>";
    echo "<img width=650 height=250 src=\"data:image/png;base64,".base64_encode($rows["photo"])."\" />";
    echo "</td>";
    echo "<td><b>".$rows["namepr"]."</b></td>";
    echo "</tr>";
        echo "<tr><td colspan=3>".$rows["descr"]."<br> <br>
       <a href=".$rows["href"].">Побдробнее..</a> </td></tr>";
    echo "<tr>";
        echo "<td> Цена: ".$rows["cost"]."</td>"; 
    echo "</tr>"; 
        echo "</table>";        
  }
    mysqli_free_result($result);
mysqli_close($mysql);
?>
</body>
</html>