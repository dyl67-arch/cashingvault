<?php include('config/dbconnection.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $upd_block = "UPDATE users_account SET auto_trading = '0' WHERE id = '$id' ";
        $query_upd_block = mysqli_query($connected,$upd_block);
        if($query_upd_block){
            header("Location: active-users.php?success=Auto trading was stopped successfully");
            exit();
        }
        else{
            header("Location: active-users.php?error=Error encountered while stoping auto trade");
            exit();
        }
    }
    else{
        header("Location: index.php");
        exit();
    }