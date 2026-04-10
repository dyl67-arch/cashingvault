<?php include "header.php"; 
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $_SESSION['idd'] = $user_id;
        // $balance = 0
        
        $fselect = "SELECT * FROM users_account WHERE id='$user_id'";
        $fselect_query = mysqli_query($connected,$fselect);
        while($r = mysqli_fetch_assoc($fselect_query)){
            $_SESSION['uem'] = $r['email'];
            $_SESSION['fme'] = $r['firstname'];
            $_SESSION['lme'] = $r['lastname'];
            $_SESSION['bce'] = $r['balance'];
        }
    }
    if(isset($_POST['balance_update'])){
        $new_balance = mysqli_real_escape_string($connected,$_POST['new_balance']);

        $new_id = $_SESSION['idd'];
        $reset_query = "UPDATE users_account SET balance='$new_balance' WHERE id='$new_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $resetMsgSuc = "User account balance edit was successful";
        }else{
             $resetMsgErr = "Problem editting user account balance, contact web developer";
        }
    }
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Edit Balance:</h1>
    <?php if(isset($resetMsgSuc)) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $resetMsgSuc; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($resetMsgErr)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $resetMsgErr; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    <div class="row">
    <!-- <center> -->
    <div class="formm mx-auto">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" value="<?php echo $_SESSION['uem']; ?>" placeholder="" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Firstname</label>
                <input type="text" value="<?php echo $_SESSION['fme']; ?>" placeholder="" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Lastname</label>
                <input type="text" value="<?php echo $_SESSION['lme']; ?>" placeholder="" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Balance</label>
                <input type="text" value="<?php echo $_SESSION['bce']; ?>" name="new_balance" placeholder="" class="form-control" >
            </div>
            <input type="submit" name="balance_update" value="update" class="btn btn-primary btn-sm text-uppercase">
        </form>
    </div>
    <!-- </center> -->
    </div>
</div>
<?php include "footer.php"; ?>