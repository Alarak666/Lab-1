<?php

    require_once 'dbh.inc.php';
    if(isset($_GET['Del']))
    {
        $UserID = $_GET['Del'];
        $query = " DELETE FROM MyGroup WHERE id = '".$UserID."'";
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