<?php include "config/dbconnection.php"; 
    error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['client_id'])){
        $client_id = $_GET['client_id'];
        $bitcoin_id = $_GET['bitcoin_id'];
        $amount = $_GET['amount'];
        
        $withdraw = "SELECT * FROM users_account WHERE id='$client_id'";
        $query_withdraw = mysqli_query($connected,$withdraw);
        
        while($rww = mysqli_fetch_assoc($query_withdraw)){
            $bal = $rww['balance'];   
        }
        
        // $newbal = $bal - $amount;
        // $up = "UPDATE users_account SET balance = '$newbal' WHERE id='$client_id' ";
        // $query_up = mysqli_query($connected,$up);
        
        // if($query_up){
            $status = "Approved";
            $reset_query = "UPDATE bitcoin_withdraw SET status='$status' WHERE w_id='$bitcoin_id'";
            $reset_result = mysqli_query($connected,$reset_query);
            if($reset_result){
                $upSuc = "User bitcoin withdrawal was approved successfully";
                header("Location: withdrawal-request?upSuc=".$upSuc);
                exit();
            }else{
                $upErr = "Unable to approve user bitcoin withdrawal contact webmaster";
                header("Location: withdrawal-request?upErr=".$upErr);
                exit();
            }
        // }
    }
?>