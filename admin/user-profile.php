<?php include "header.php"; 
    if(isset($_GET['id'])){
        $id  = $_GET['id'];
        $sq = "SELECT * FROM users_account WHERE id='$id'";
        $query_sq = mysqli_query($connected,$sq);
        
        while($row = mysqli_fetch_assoc($query_sq)){
            $client_firstname = $row['firstname'];
            $client_lastname = $row['lastname'];
            $client_email = $row['email'];
            $client_country = $row['country'];
            $client_phone = $row['phone'];
            $client_reg_date = $row['reg_date']; 
            $ao = $row['ao'];
            $client_balance = $row['balance'];
            $client_password = $row['pass'];
            $client_plan= $row['account_type'];
            $exp = $row['te'];
            
        }
    }
?>
<div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800 text-center" >Account Details</h1>
    <div class="row">
        <div class="form-bank w-95 mx-auto">
            <form action="">
                <div class="form-group">
                    Firstname : <?php echo $client_firstname; ?>
                </div>
                <div class="form-group">
                    Lastname : <?php echo $client_lastname; ?>
                </div>
                <div class="form-group">
                    Username : <?php echo $client_username; ?>
                </div>
                 <div class="form-group">
                    Plan Type : <?php echo $client_plan; ?>
                </div>
                <div class="form-group">
                    Country : <?php echo $client_country; ?>
                </div>
                <div class="form-group">
                    Phone : <?php echo $client_phone; ?>
                </div>
                <div class="form-group">
                    Trading Exp : <?php echo $exp; ?>
                </div>
                 <div class="form-group">
                    Account Optioin : <?php echo $ao; ?>
                </div>
                <div class="form-group">
                    Date Registered : <?php echo $client_reg_date; ?>
                </div>
                <div class="form-group">
                    Balance : <?php echo "$".number_format($client_balance).".00"; ?>
                </div>
                <div class="form-group">
                    Password : <?php echo $client_password; ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>