<?php include('config/dbconnection.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $upd_block = "UPDATE users_account SET auto_trading = '1' WHERE id = '$id' ";
        $query_upd_block = mysqli_query($connected,$upd_block);
        if($query_upd_block){
            header("Location: active-users?success=Auto trading was started successfully");
            exit();
        }
        else{
            header("Location: active-users?error=Error encountered while starting auto trade");
            exit();
        }
    }
    else{
        header("Location: index");
        exit();
    }