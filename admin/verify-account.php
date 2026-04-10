<?php include "config/dbconnection.php"; 
error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $blocked = 1;
        $reset_query = "UPDATE users_account SET verified='1', account_status='Verified' WHERE id='$user_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User account was verified successfully!";
            header("Location: unverified?resetMsgSuc=".$resetMsgSuc);
            exit();
        }else{
             $resetMsgErr = "Problem verifying user acccount please contact web developer";
            header("Location: unverified?resetMsgErr=".$resetMsgErr);
            exit();
        }
    }
?>