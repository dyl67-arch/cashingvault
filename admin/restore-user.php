<?php include "config/dbconnection.php"; 
    error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $deleted = 0;
        $reset_query = "UPDATE users_account SET deleted='$deleted' WHERE id='$user_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User has been restored successfully";
            header("Location:deleted-users?resetMsgSuc=".$resetMsgSuc);
            exit();
        }else{
             $resetMsgErr = "Problem restoring user contact web developer";
            header("Location:deleted-users?resetMsgErr=".$resetMsgErr);
            exit();
        }
    }
?>