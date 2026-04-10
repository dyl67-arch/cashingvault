<?php 
    require('../config/dbconnection.php');
    if(isset($_POST['btn_edit_trade_amount'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        
        $edit_trade_amount = mysqli_real_escape_string($connected,$_POST['edit_trade_amount']);
        $trade_outcome = mysqli_real_escape_string($connected,$_POST['outcome']);
        $trade_percent = mysqli_real_escape_string($connected,$_POST['percent']);
        // $user_balance = mysqli_real_escape_string($connected,$_POST['user_balance']);

        // $new_balance = $user_balance + $credit_amount;
        $upd_edit_trade_amount = "UPDATE users_account SET trade_amount = '$edit_trade_amount', trade_out = '$trade_outcome', trade_percent = '$trade_percent'  WHERE id = '$id' ";
        $query_upd_edit_trade_amount = mysqli_query($connected,$upd_edit_trade_amount);
        if($query_upd_edit_trade_amount){
            header("Location: ../edit-auto-trade?success=You have successfully edited users auto trade amount");
            exit();
        }
        else{
            header("Location: ../edit-auto-trade?error=Error while editing selected user auto trade amount");
            exit(); 
        }
    }
    elseif(isset($_POST['process_trade'])){
        $c_id = mysqli_real_escape_string($connected,$_POST['c_id']);
        $assets = mysqli_real_escape_string($connected,$_POST['assets']);
        $order_placed = mysqli_real_escape_string($connected,$_POST['prediction']);
        $stock = mysqli_real_escape_string($connected,$_POST['stock']);
        $trade = mysqli_real_escape_string($connected,$_POST['inv_amount']);
       
        $status = mysqli_real_escape_string($connected,$_POST['status']);
        $payout = mysqli_real_escape_string($connected,$_POST['payout']);
        // $date_traded = mysqli_real_escape_string($connected,$_POST['date']);
        // $c_id = mysqli_real_escape_string($connected,$_POST['c_id']);
        
        $debit = "SELECT * FROM users_account WHERE id='$c_id'";
        $query_debit = mysqli_query($connected,$debit);
        while($row_deb = mysqli_fetch_assoc($query_debit)){
            $prev_bal = $row_deb['balance'];
        }
        if($prev_bal < $trade){
            $mssg = "User do not have sufficient account balance";
            header("Location: ../trade?id=".$c_id."&error=".$mssg);
            exit();
        }
        else{
            $new_bl = $prev_bal - $trade;
            if($status == 'Won'){
                $new_bl = $prev_bal + $payout;
                $upd_c_bal = "UPDATE users_account SET balance = '$new_bl' WHERE id= '$c_id' ";
                $query_upd_c_bal = mysqli_query($connected,$upd_c_bal);
            }
        }
        $ins_trade = "INSERT INTO tbl_trades (c_id,asset,prediction,amount,status,payout) 
        VALUES('$c_id','$assets','$order_placed','$trade','$status','$payout')";
        $query_ins_trade = mysqli_query($connected,$ins_trade);
        if($query_ins_trade){
            
            $upd_ball = "UPDATE users_account SET balance = '$new_bl' WHERE id = '$c_id' ";
            $query_upd_ball = mysqli_query($connected,$upd_ball);
            if($query_upd_ball){
                header("Location: ../trade?success=You have successfully traded for selected user&id=$c_id");
                exit(); 
            }
            else{
                header("Location: ../trade?error=Unable to process request&id=$c_id");
                exit(); 
            }
        }
        else{
            header("Location: ../trade?error=Error while trading for selected user&id=$c_id");
            exit();
        }
    }
    elseif(isset($_POST['process_edit_trade'])){
        $c_id = mysqli_real_escape_string($connected,$_POST['c_id']);
        $t_id = mysqli_real_escape_string($connected,$_POST['t_id']);
        $assets = mysqli_real_escape_string($connected,$_POST['assets']);
         
        $order_placed = mysqli_real_escape_string($connected,$_POST['prediction']);
        // $stock = mysqli_real_escape_string($connected,$_POST['stock']);
        $trade = mysqli_real_escape_string($connected,$_POST['inv_amount']);
        // $open_close = mysqli_real_escape_string($connected,$_POST['open_close']);
        // $opens = mysqli_real_escape_string($connected,$_POST['opens']);
        // $closes = mysqli_real_escape_string($connected,$_POST['closes']);
        $status = mysqli_real_escape_string($connected,$_POST['status']);
        $payout = mysqli_real_escape_string($connected,$_POST['payout']);
        $date = mysqli_real_escape_string($connected,$_POST['date']);
        // $c_id = mysqli_real_escape_string($connected,$_POST['c_id']);
        
        $debit = "SELECT * FROM users_account WHERE id='$c_id'";
        $query_debit = mysqli_query($connected,$debit);
        while($row_deb = mysqli_fetch_assoc($query_debit)){
            $prev_bal = $row_deb['balance'];
        }
        if($prev_bal < $trade){
            $mssg = "User do not have sufficient account balance";
            header("Location: ../edit-u-trade?u_id=".$c_id."&error=".$mssg);
            exit();
        }
        else{
            // if($status == 'Won'){
            //     $new_bl = $prev_bal + $trade + $payout;
            //     $upd_c_bal = "UPDATE users_account SET balance = '$new_bl' WHERE id= '$c_id' ";
            //     $query_upd_c_bal = mysqli_query($connected,$upd_c_bal);
            // }
            
            $upd_trade = "UPDATE tbl_trades SET asset = '$assets', prediction = '$order_placed', amount = '$trade', status = '$status', payout = '$payout', date = '$date' WHERE c_id = '$c_id' AND t_id = '$t_id'";
            // $upd_trade = "UPDATE tbl_trades SET c_id = '$c_id', asset = '$assets', prediction = '$order_placed', amount = '$trade', stock = '$stock', status = '$status', payout = '$payout', date = '$date' WHERE c_id = '$c_id' AND t_id = '$t_id'";
            $query_upd_trade = mysqli_query($connected,$upd_trade);
            if($query_upd_trade){
                
                // $upd_ball = "UPDATE users_account SET balance = '$new_bl' WHERE id = '$c_id' ";
                // $query_upd_ball = mysqli_query($connected,$upd_ball);
                // if($query_upd_ball){
                    header("Location: ../edit-u-trade?success=You have successfully update trade for selected user");
                    exit(); 
                // }
                // else{
                //     header("Location: ../../trade?error=Unable to process request");
                //     exit(); 
                // }
            }
            else{
                header("Location: ../edit-u-trade?error=Error while updating trade for selected user");
                exit();
            }
        }
        
    }
    elseif(isset($_POST['edit_account_plan'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        
        $account_type = mysqli_real_escape_string($connected,$_POST['account_type']);
        $upd_acc = "UPDATE users_account SET account_type = '$account_type' WHERE id = '$id' ";
        $query_upd_acc = mysqli_query($connected, $upd_acc);
        if($query_upd_acc){
            header("Location: ../upgrade?id=".$id."&success=Account was upgraded successfully.");
            exit();
        }
        else{
            header("Location: ../upgrade?error=Error encountered while upgrading account");
            exit();
        }
    }