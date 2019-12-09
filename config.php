<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="back">
		<a class="button-back" href="index.php">На главную</a>
	</div>
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "База данных создана успешно";
} else {
  echo "Ошибка создания базы данных: " . mysqli_error($conn);
}

mysqli_close($conn);
?>