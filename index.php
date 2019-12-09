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
<h1>Пример</h1>

<div class="button-conteiner">

	<h5>Создать БД</h5>
	<div class="button-bd">
		<a href="/config.php">Создать</a>
	</div>
	<h5>Создать таблицу</h5>
	<div class="button-tb">
		<a href="/table.php">Создать</a>
	</div>
	<h5>Добавить пользователя</h5>
	<div class="button-add">
		<a href="/addchib.php">Добавить Андрея Чибукина</a>
		<a href="/addsyav.php">Добавить Виталия Савочку</a>
	</div>
	<h5>Вывести данные</h5>
	<div class="button-data">
		<a href="/showdata.php">Вывести данные</a>
	</div>
    <form action="addInfo.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname">
        <br>
        <input type="text" name="lastname" placeholder="Lastname">
        <br>
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>

