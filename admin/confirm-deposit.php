<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "config/dbconnection.php";

if (isset($_GET['deposit_id']) && isset($_GET['amount']) && isset($_GET['client_id'])) {
    $deposit_id = $_GET['deposit_id'];
    $amount = $_GET['amount'];
    $client_id = $_GET['client_id'];

    // Fetch the user's account details
    $sqru = "SELECT * FROM users_account WHERE id = '$client_id'";
    $query_sqru = mysqli_query($connected, $sqru);

    if ($query_sqru && mysqli_num_rows($query_sqru) > 0) {
        $suv = mysqli_fetch_assoc($query_sqru);

        // Extract previous balance and invested amount
        $prev_balance = $suv['balance'];
        $prev_invested = isset($suv['invested']) ? $suv['invested'] : 0; // Default to 0 if not set
        $email = $suv['email'];
        $firstname = $suv['firstname'];

        // Calculate the new balance and invested amount
        $new_balance = $prev_balance + $amount;
        $new_invested = $prev_invested + $amount;

        // Update the user's account
        $ss = "UPDATE users_account SET balance='$new_balance', invested='$new_invested' WHERE id='$client_id'";
        $query_ss = mysqli_query($connected, $ss);

        if ($query_ss) {
            // Mark the deposit as approved and confirmed
            $confirmed = 'Confirmed';
            $sql = "UPDATE user_deposits SET approved='1', payment_status='$confirmed' WHERE d_id='$deposit_id'";
            $query = mysqli_query($connected, $sql);

            if ($query) {
                // Redirect with success message
                $confirmSuc = "Payment was confirmed successfully";
                header("Location: unpaid-invoices?confirmSuc=" . $confirmSuc);
                exit();
            } else {
                // Redirect with error message if deposit update fails
                $confirmErr = "Unable to update deposit status";
                header("Location: unpaid-invoices?confirmErr=" . $confirmErr);
                exit();
            }
        } else {
            // Redirect with error message if balance update fails
            $confirmErr = "Unable to update user balance or invested amount";
            header("Location: unpaid-invoices?confirmErr=" . $confirmErr);
            exit();
        }
    } else {
        // Redirect with error message if user not found
        $confirmErr = "User account not found";
        header("Location: unpaid-invoices?confirmErr=" . $confirmErr);
        exit();
    }
} else {
    // Redirect with error message if required parameters are missing
    $confirmErr = "Missing required parameters";
    header("Location: unpaid-invoices?confirmErr=" . $confirmErr);
    exit();
}
