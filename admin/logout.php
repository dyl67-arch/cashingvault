<?php include "config/dbconnection.php"; 
    unset($_SESSION['admin_password']);
    unset($_SESSION['admin_username']);
    session_destroy();
    header("Location: login");
    exit();
?>