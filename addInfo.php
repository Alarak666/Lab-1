<?php

    require_once 'dbh.inc.php';

    if(isset($_POST['submit']))
    {
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']))
        {
            echo ' Pls fill';
        }
        else
        {
            $UserName = $_POST['firstname'];
            $UserSurname = $_POST['lastname'];
            $UserEmail = $_POST['email'];

            $query = " insert into MyGroup (firstname, lastname,email) values('$UserName','$UserSurname','$UserEmail')";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Error ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }

?>
