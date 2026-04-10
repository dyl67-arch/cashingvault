<?php include('config/dbconnection.php');
    $assets = array("BCHUSD", "BCHBTC", "BTCUSD", "ETHBTC", "ETHUSD", "LTCBTC", "LTCUSD", "XRPUSD", "XRPBTC", "DSHUSD", "DSHBTC", "DSHMXN", "DSHPLN", "DSHETH", "DSHXAU", "DSHCNH", "DSHDKK",
    "DSHXAG", "DSHLTC", "DSHXRP", "EURUSD", "GBPUSD", "USDJPY", "USDCHF", "AUDUSD", "USDCAD", "XAUZAR", "XAUHKD", "XAUCNH", "XAUDKK", "XAUMXN", "CHFJPY", "CADJPY", "EURAUD", "EURCAD",
    "EURCHF", "EURGBP", "EURNZD", "GBPAUD", "GBPCHF", "GBPNZD", "XAUUSD", "NZDUSD", "AUDCAD", "AUDCHF", "AUDJPY", "AUDNZD", "AUDUSD", "CADCHF", "AAPL", "GOOGL", "MSFT", "GOOG", "FB", "AMZN",
    "SNE", "TSLA", "TWTR", "NFLX", "INDEXSPX", "INDEXIUXX", "INDEXDOWI", "INDEXNKY", "CME_MINIES1", "CMEE61", "COMEXGC1", "NYMEXCL1", "NYMEXNG1", "CBOTZC1", "CHRISCME_CL1", "CMEGE1", "CBOTZB1",
    "CBOTUD1", "EUREXGG1", "EUREXII1", "EUREXHR1");
    
    $predicts = array("buy", "sell");
    
    $sel_acc = "SELECT * FROM users_account WHERE auto_trading = '1' ";
    $query_sel_acc = mysqli_query($connected,$sel_acc);
    while($row = mysqli_fetch_assoc($query_sel_acc)){
        $c_id = $row['id'];
        
        $get_user = "SELECT * FROM users_account WHERE id = '$c_id'";
        $query_get_user = mysqli_query($connected,$get_user);
        while($row_c = mysqli_fetch_assoc($query_get_user)){
            $c_balance = $row['balance'];
            $trade_outcome = $row['trade_out'];
            $trade_firstname = $row['firstname'];
            $trade_amount = $row['trade_amount'];   
            $trade_percent = $row['trade_percent'];   
        }
        
        if($c_balance < $trade_amount){}
        else{
            if($trade_outcome == 'won'){
                $status = "Won";
                $percent = $trade_percent / 100;
                $payout = $trade_amount * $percent;
                $ne_bala = $c_balance + $payout; 
                
                $predict_index = shuffle($predicts);
                $prediction = $predicts[$predict_index];
                
                $asset_index = shuffle($assets);
                $asset = $assets[$asset_index];

                $ins_trade = "INSERT INTO tbl_trades (c_id,amount,prediction,payout,status,asset) VALUES('$c_id','$trade_amount','$prediction', '$payout', '$status','$asset')";
                $query_ins_trade = mysqli_query($connected,$ins_trade);
                
                if($query_ins_trade){
                    $up_balan = "UPDATE users_account SET balance = '$ne_bala' WHERE id = '$c_id' ";
                    $query_up_balan = mysqli_query($connected,$up_balan);
                }
            }
            else{
                $status = "Lost";
                $percent = $trade_percent / 100;
                $payout = $trade_amount * $percent;
                $ne_bala = $c_balance - $trade_amount; 
                
                $prediction = shuffle($predicts);
                $asset = shuffle($assets);

                
                $ins_trade = "INSERT INTO tbl_trades (c_id,amount,prediction,payout,status,asset) VALUES('$c_id','$trade_amount','$prediction', '$payout', '$status','$asset')";
                $query_ins_trade = mysqli_query($connected,$ins_trade);
                
                if($query_ins_trade){
                    $up_balan = "UPDATE users_account SET balance = '$ne_bala' WHERE id = '$c_id' ";
                    $query_up_balan = mysqli_query($connected,$up_balan);
                }
            }
        }
    }
    