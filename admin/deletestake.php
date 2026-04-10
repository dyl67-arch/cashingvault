<?php include('config/dbconnection.php');
    if(isset($_GET['s_id'])){
        $sid = $_GET['s_id'];
        $cid = $_GET['c_id'];
        $upd_block = "UPDATE tbl_stakes SET deleted = '1' WHERE c_id = '$cid' and s_id='$sid' ";
        $query_upd_block = mysqli_query($connected,$upd_block);
        if($query_upd_block){
            header("Location: stack?success=was deleted successfully");
            exit();
        }
        else{
            header("Location: stack?error=Error encountered while trying to delete trade");
            exit();
        }
    }
    else{
        header("Location: index.php");
        exit();
    }