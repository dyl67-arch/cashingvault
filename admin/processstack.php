<?php include_once "config/dbconnection.php";
        
         $c_id = $_SESSION['s_id'];
        
        $currency = mysqli_real_escape_string($connected,$_GET['value']);
        $duration = mysqli_real_escape_string($connected,$_GET['days']);
        $stake_amount = mysqli_real_escape_string($connected,$_GET['amount']);
        $percentage = mysqli_real_escape_string($connected,$_GET['per']);
 
  if($duration <= 0){
            header("Location: cstake?pgname=stake&error=select stake duration&id=".$c_id);
            exit();
        }
     
        if($stake_amount <= 0){
            header("Location: cstake?pgname=stake&error=Invalid amount entered&id=".$c_id);
            exit();
        }
        
        else{
            
            $get_balance = "SELECT * FROM users_account WHERE id = '$c_id' ";
            $query_get_balance = mysqli_query($connected,$get_balance);
            while($rowww = mysqli_fetch_assoc($query_get_balance)){
                $userbalance = $rowww['balance'];
            }
            
            if($stake_amount  > $userbalance){
                header("Location: cstake?pgname=stake&error=Insufficient funds, please try again&id=".$c_id);
                exit();
            }
            else{               
                
                
              
               $expected =($percentage * $stake_amount)+$stake_amount;
               
               $new_balance = $userbalance - $stake_amount; 
               
               $upd_bal = "UPDATE users_account SET balance = '$new_balance' WHERE id = '$c_id' ";
               $query_bal = mysqli_query($connected,$upd_bal);
               
               if($query_bal){
                   $ins_stake = "INSERT INTO tbl_stakes (c_id,duration,stake_amount,expected,currency,percentage) VALUES('$c_id','$duration','$stake_amount','$expected','$currency','$percentage')";
                   $query_stake = mysqli_query($connected,$ins_stake);
                   if($query_stake){
                       header("Location: cstake?pgname=stake&success=Staking was successful&id=".$c_id);
                        exit(); 
                   }
                   else{
                      header("Location: cstake?pgname=stake&error=Error encountered while staking&id=".$c_id);
                        exit(); 
                   }
               }
               else{
                    header("Location: cstake?pgname=stake&error=Unable to process stake&id=".$c_id);
                    exit(); 
               }
            }
        }    
        ?>