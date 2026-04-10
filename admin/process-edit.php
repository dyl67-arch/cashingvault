<?php
include "config/dbconnection.php";

if (isset($_GET['trade_id'], $_GET['client_id'])) {
    $trade_id = $_GET['trade_id'];
    $client_id = $_GET['client_id'];

    if (isset($_POST['edit_trade'])) {
        // Sanitize and fetch form inputs
        $trade_status = mysqli_real_escape_string($connected, $_POST['trade_status']);
        $amount = mysqli_real_escape_string($connected, $_POST['amount']);
        $assets = mysqli_real_escape_string($connected, $_POST['assets']);
        $profit = mysqli_real_escape_string($connected, $_POST['profit']);
        $date = mysqli_real_escape_string($connected, $_POST['date']);
        $trade_outcome = mysqli_real_escape_string($connected, $_POST['trade_outcome']);
        $payout = $amount + $profit;

        // Update trade details
        $update_trade = "UPDATE tbl_trades 
                         SET status = '$trade_status', 
                             asset = '$assets', 
                             payout = '$profit', 
                             date = '$date', 
                             amount = '$amount' 
                         WHERE t_id = '$trade_id'";
        $query_update_trade = mysqli_query($connected, $update_trade);

        if ($query_update_trade) {
            // Fetch the user's current profit and balance
            $get_account = "SELECT balance, profit FROM users_account WHERE id = '$client_id'";
            $query_get_account = mysqli_query($connected, $get_account);

            if ($query_get_account && mysqli_num_rows($query_get_account) > 0) {
                $account_data = mysqli_fetch_assoc($query_get_account);
                $pre_balance = $account_data['balance'];
                $pre_profit = $account_data['profit'];

                if ($trade_outcome == 'lost') {
                    // If trade outcome is "lost," no profit is added; only balance is restored
                    $new_balance = $pre_balance + $amount;
                    $update_account = "UPDATE users_account SET balance = '$new_balance' WHERE id = '$client_id'";
                } elseif ($trade_outcome == 'won') {
                    // If trade outcome is "won," profit is added
                    $new_profit = $pre_profit + $profit;
                    $update_account = "UPDATE users_account SET profit = '$new_profit' WHERE id = '$client_id'";
                }

                // Execute account update query
                mysqli_query($connected, $update_account);

                // Redirect with success message
                header("Location: trades?upSuc=Trade edit was successful");
                exit();
            } else {
                // Redirect with error if user account is not found
                header("Location: trades?upErr=User account not found");
                exit();
            }
        } else {
            // Redirect with error if trade update fails
            header("Location: trades?upErr=Trade edit was unsuccessful");
            exit();
        }
    }
}
