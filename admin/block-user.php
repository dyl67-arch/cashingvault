<?php include "config/dbconnection.php"; 
error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $blocked = 1;
        $reset_query = "UPDATE users_account SET blocked='$blocked' WHERE id='$user_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User was blocked successfully!";
            header("Location:active-users?resetMsgSuc=".$resetMsgSuc);
            exit();
        }else{
             $resetMsgErr = "Problem blocking user please contact web developer";
            header("Location:active-users?resetMsgErr=".$resetMsgErr);
            exit();
        }
    }
?>