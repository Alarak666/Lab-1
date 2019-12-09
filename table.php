<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
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
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Подключение не удалось: " . mysqli_connect_error());
}

$sql = "CREATE TABLE MyGroup (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";
if (mysqli_query($conn, $sql)) {
  echo "Таблица MyGroup создана успешно";
} else {
   echo "Ошибка создания таблицы: " . mysqli_error($conn);
}

mysqli_close($conn);
?>