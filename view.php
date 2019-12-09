<?php
    require_once 'dbh.inc.php';
    $query = " SELECT * FROM MyGroup ";
    $result = mysqli_query($conn,$query);
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
<div>
    <table>
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Surname </td>
            <td> E-mail </td>
            <td> Edit </td>
            <td> Delete </td>
        </tr>
        <?php

        while($row=mysqli_fetch_assoc($result))
        {
            $UserID = $row['id'];
            $UserName = $row['firstname'];
            $UserSurname = $row['lastname'];
            $UserEmail = $row['email'];
            ?>
            <tr>
                <td><?php echo $UserID ?></td>
                <td><?php echo $UserName ?></td>
                <td><?php echo $UserSurname ?></td>
                <td><?php echo $UserEmail ?></td>
                <td><a class="EdDel" href="edit.php?Getid=<?php echo $UserID ?>">Edit</a></td>
                <td><a class="EdDel" href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

</body>
</html>