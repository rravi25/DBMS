<?php
    $dbcon = mysqli_connect('localhost','root','','finaldb');
    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
?>