<?php include "../../configuration/dbconnection.php";
if(isset($_GET['rt'])){
    $rt = $_GET['rt'];
    
    if(isset($_POST['submit_trade'])){
        $currency_pair = mysqli_real_escape_string($connected,$_POST['currency_pair']);
        $trade_type = mysqli_real_escape_string($connected,$_POST['trade_type']);
        $lot_size = mysqli_real_escape_string($connected,$_POST['lot_size']);
        $ask = mysqli_real_escape_string($connected,$_POST['ask']);
        $bid = mysqli_real_escape_string($connected,$_POST['bid']);
        $profit = mysqli_real_escape_string($connected,$_POST['profit']);
        
        
        
        $see = "SELECT * FROM user_cryptobinge WHERE id='$rt'";
        $query_see = mysqli_query($connected,$see);
        while($rew = mysqli_fetch_assoc($query_see)){
            $prev_balance = $rew['balance'];
        }
        
        if($trade_type == "sell"){
            if($ask > $bid){
                // $difference = $ask - $bid;
                // $profit = $difference * $lot_size;
                $prev_balance += $profit;
                $status = "won";
            }else{
                // $difference = $bid - $ask;
                // $profit = $difference * $lot_size;
                $prev_balance -= $profit;
                $status = "loss";
            }
        }
        else{
            if($ask > $bid){
                // $j = %($ask);
                // $difference = $ask - $bid;
                // $profit = $difference * $lot_size;
                $prev_balance -= $profit;
                $status = "loss";
            }else{
                // $difference = $bid - $ask;
                // $profit = $difference * $lot_size;
                $prev_balance += $profit;
                $status = "won";
            }
        }
        
        
        
        $inser = "INSERT INTO tbl_trade (client_id,currency_pair,trade_type,lot_size,ask,bid,profit,balance,status) VALUES('$rt','$currency_pair','$trade_type','$lot_size','$ask','$bid','$profit','$prev_balance','$status')";
        $query_inser = mysqli_query($connected,$inser);
        if($query_inser){
            
            $updateUser = "UPDATE user_cryptobinge SET balance='$prev_balance' WHERE id='$rt'";
            $queryUpdateUser = mysqli_query($connected, $updateUser);
            if($queryUpdateUser){
                $tradeSuc = "Trading for user was successful";
                header("Location:trade.php?tradeSuc=".$tradeSuc);
                exit();
            }
        }
        else{
            $tradeErr = "Trading for user was unsuccessful";
            header("Location:trade.php?tradeErr=".$tradeErr);
            exit();
        }
    }
}