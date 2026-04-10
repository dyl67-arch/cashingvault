<?php include "config/dbconnection.php"; 
error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $deleted = 1;
        $reset_query = "UPDATE users_account SET deleted=1 WHERE id ='$user_id'";
        // $reset_query = "UPDATE users_account SET deleted='$deleted' WHERE id='$user_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User was deleted successfully!";
            header("Location:active-users?resetMsgSuc=".$resetMsgSuc);
            exit();
        }else{
             $resetMsgErr = "Problem deleting user please contact web developer";
            header("Location:active-users?resetMsgErr=".$resetMsgErr);
            exit();
        }
    }
?>