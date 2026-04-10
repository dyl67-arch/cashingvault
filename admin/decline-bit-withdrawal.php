<?php include "config/dbconnection.php"; 
    error_reporting(E_ALL^E_NOTICE); 
    if(isset($_GET['client_id'])){
        $client_id = $_GET['client_id'];
        $bitcoin_id = $_GET['bitcoin_id'];
        
        $reset_query = "UPDATE users_bitcoin_withdraw SET declined='1' WHERE bitcoin_id='$bitcoin_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $upSuc = "User bitcoin withdrawal was declined successfully";
            header("Location: withdrawal-request?upSuc=".$upSuc);
            exit();
        }else{
            $upErr = "Unable to decline user bitcoin withdrawal contact webmaster";
            header("Location: withdrawal-request?upErr=".$upErr);
            exit();
        }
    }
?>