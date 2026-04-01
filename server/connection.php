<?php
    error_reporting(0);

    $server_name    = "localhost"; 
    $user_name      = "manish";
    $password       = "admin@23BCA";
    $database_name  = "university";

    $connection = mysqli_connect($server_name,$user_name,$password,$database_name);

    if ($connection) {
        // echo "Connection OK";
    } else {
        echo "Failed Connection".mysqli_connect_error();
    }
?>