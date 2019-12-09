<?php
    require_once 'dbh.inc.php';
    $UserID = $_GET['Getid'];
    $query = " select * from MyGroup where id='".$UserID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $UserName = $row['firstname'];
        $UserSurname = $row['lastname'];
        $UserEmail = $row['email'];
}


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

<h3>Обновить</h3>

<div>
    <form action="update.php?id=<?php echo $UserID ?>" method="POST">
        <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $UserName ?>">
        <br>
        <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $UserSurname ?>">
        <br>
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $UserEmail ?>">
        <br>
        <button type="submit" name="update">Update</button>
    </form>
</div>

</body>
</html>
