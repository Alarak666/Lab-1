<?php
    require_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="back">
		<a class="button-back" href="index.php">На главную</a>
	</div>
</body>
</html>
<?php

$sql = "INSERT INTO MyGroup (firstname, lastname, email)
		VALUES('Vitaly', 'Savochka', 'syava@gmail.com')";
		
if (mysqli_query($conn, $sql)) {
	echo "Создалась новая запись";
}

mysqli_close($conn);

?>