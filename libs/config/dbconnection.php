<?php session_start();
    error_reporting(E_ALL^E_NOTICE);
    $host = 'localhost';
    $host = 'localhost';
    $user = 'imacadworldw';
    $password = 'Emeka6?6?';
    $dbname = 'imacadworldw';

    $connected = mysqli_connect($host,$user,$password,$dbname); 
    if(!$connected){
        die("Connection to Database Failed ".mysqli_error($connected));
    } 
