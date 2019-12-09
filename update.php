<?php

    require_once("dbh.inc.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['id'];
        $UserName = $_POST['firstname'];
        $UserSurname = $_POST['lastname'];
        $UserEmail = $_POST['email'];

        $query = " update MyGroup set firstname = '".$UserName."', lastname ='".$UserSurname."',email='".$UserEmail."' where id='".$UserID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Error ';
        }
    }
    else
    {
        header("location:view.php");
    }
?>