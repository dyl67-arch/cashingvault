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
            $_SESSION['invested'] = $r['invested']??0.0;
            $_SESSION['profit'] = $r['profit']??0.0;
        }
    }
    if(isset($_POST['balance_update'])){
        $profit = mysqli_real_escape_string($connected,$_POST['profit']);
        $invested = mysqli_real_escape_string($connected,$_POST['invested']);
        $new_id = $_SESSION['idd'];
        $reset_query = "UPDATE users_account SET profit='$profit',invested='$invested' WHERE id='$new_id'";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $_SESSION['invested'] = $invested;
            $_SESSION['profit'] =$profit;
            $resetMsgSuc = "User account bonus edit was successful";
        }else{
             $resetMsgErr = "Problem editting user account bonus, contact web developer";
        }
    }
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">RESET BONUS / INVESTED BALANCE:</h1>
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
                <input type="text" value="<?php echo $_SESSION['fme']." ".$_SESSION['lme']; ?>" placeholder="" class="form-control" readonly>
            </div> 
            <div class="form-group">
                <label for="">Bonus Balance</label>
                <input type="text" value="<?php echo $_SESSION['profit']; ?>" name="profit" placeholder="" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Invested Balance</label>
                <input type="text" value="<?php echo $_SESSION['invested']; ?>" name="invested" placeholder="" class="form-control" >
            </div>
            
            <input type="submit" name="balance_update" value="update" class="btn btn-primary btn-sm text-uppercase">
        </form>
    </div>
    <!-- </center> -->
    </div>
</div>
<?php include "footer.php"; ?>