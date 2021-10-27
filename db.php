<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "soijin";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySql : " . mysqli_connect_error();
    }
?>