<?php   include "header.php"; 
    error_reporting(E_ALL^E_NOTICE);
    if(isset($_GET['id'])){
        $userId = $_GET['id'];
        $_SESSION['uid'] = $_GET['id'];
    }
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM users_account WHERE id='$uid'";
    $query = mysqli_query($connected,$sql);

    while($row = mysqli_fetch_assoc($query)){
        $prevbalance = $row['invested'];
        $email = $row['email'];
        $firstname = $row['firstname'];
    }
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        // $bonus = $_POST['bonuses'];
        // $pack = $_POST['packs'];
        // $percent = 100;
        $balance = $prevbalance + $amount;
        // $bonus = $bonus / $percent;
        // $profit = $amount * $bonus;
        
        $updateUser = "UPDATE users_account SET invested='$invested' WHERE id='$uid'";
        $queryUpdateUser = mysqli_query($connected, $updateUser);
        if($queryUpdateUser){
            
                $msgSucc = "User's invested was set Successfully";
            }
        else {
            $msgError = "Unable to set user's invested";
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Set Invested:</h1>
    <h4 class="">You are setting invested for : <?php echo $firstname; ?></h4>
    <div class="row mx-auto">
        <?php if($msgSucc) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $msgSucc; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php endif; ?> 
        <?php if($msgError) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $msgError; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <form action="invested" method="post">
            <div class="form-group">
                <label >Enter Amount</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="text" name="amount" class="form-control" id="" placeholder="Amount">
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</div>
<?php include "footer.php"; ?>