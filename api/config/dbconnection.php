<?php session_start();
    error_reporting(E_ALL^E_NOTICE);
    $host = 'localhost';
    $user = 'digitalind';
    $password = 'Emeka6767';
    $dbname = 'digitalind';

    $connected = mysqli_connect($host,$user,$password,$dbname); 
    if(!$connected){
        die("Connection to Database Failed ".mysqli_error($connected));
    }