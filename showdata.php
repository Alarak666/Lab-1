<?php
    require_once 'dbh.inc.php';
?>

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

$sql = "SELECT id, firstname, lastname FROM MyGroup";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id:" . $row["id"]. " - Имя: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
