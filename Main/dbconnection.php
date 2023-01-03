<?php

    $dbcon = mysqli_connect('localhost','root','','lostandfound');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>