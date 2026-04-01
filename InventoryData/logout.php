<?php
// session start
    session_start();

// session unset
    session_unset();
    
// session destroy
    session_destroy();

// page redirect to login page
    header('Location: ./InventoryLogin.php');

// exit
    exit();
?>