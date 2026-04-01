<?php
// session start
    session_start();

// session unset
    session_unset();
    
// session destroy
    session_destroy();

// page redirect to login page
    header('location:login.php');

// exit
    exit();
?>