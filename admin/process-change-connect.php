<?php include "config/dbconnection.php"; 
    error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['client_id'])){
        $user_id = $_GET['client_id'];
        $trade_status = mysqli_real_escape_string($connected,$_POST['trade_status']);
        
        $reset_query = "UPDATE users_account SET trade_status='$trade_status' WHERE id='$user_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User account connection status changed successfully";
            header("Location: change-connect-status?msgSucc=".$resetMsgSuc);
            exit();
        }else{
           $resetMsgErr = "unable to change account connection status";
            header("Location: change-connect-status?msgErr=".$resetMsgErr);
            exit();
        }
    }
?>