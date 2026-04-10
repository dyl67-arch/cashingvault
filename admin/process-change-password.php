<?php include "config/dbconnection.php";
if(isset($_POST['change_submit'])){
    
    $sql = "SELECT * FROM admin_account";
    $query = mysqli_query($connected,$sql);
    while($row = mysqli_fetch_assoc($query)){
        $password = $row['pass'];
    }
    
    $current_password = mysqli_real_escape_string($connected,$_POST['current_password']);
    $new_password = mysqli_real_escape_string($connected,$_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($connected,$_POST['confirm_password']);
    
    if($current_password !== $password){
        $changeErrMsg = "Incorrect Password";
        header("Location: change-password?changeErrMsg=".$changeErrMsg);
        exit();
    }else{
        if($new_password !== $confirm_password){
           $changeErrMsg = "Password do not match";
            header("Location: change-password?changeErrMsg=".$changeErrMsg);
            exit(); 
        }
        else{
            $sql_update = "UPDATE admin_account SET pass='$new_password' WHERE id='1'";
            $query_sql_update = mysqli_query($connected,$sql_update); 
            if($query_sql_update){
                $changeSucMsg = "Password update was successful";
                header("Location: change-password?changeSucMsg=".$changeSucMsg);
                exit();
            }
        }
    }
}