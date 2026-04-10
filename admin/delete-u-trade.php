<?php include('config/dbconnection.php');
    if(isset($_GET['u_id'])){
        $id = $_GET['u_id'];
        $cid = $_GET['uid'];
        $upd_block = "UPDATE tbl_trades SET deleted = '1' WHERE t_id = '$id' ";
        $query_upd_block = mysqli_query($connected,$upd_block);
        if($query_upd_block){
            header("Location: user-trades?success=Trade was deleted successfully&id=".$cid);
            exit();
        }
        else{
            header("Location: user-trades?error=Error encountered while trying to delete trade&id=".$cid);
            exit();
        }
    }
    else{
        header("Location: index.php");
        exit();
    }