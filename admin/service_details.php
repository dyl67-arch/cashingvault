<?php include "header.php"; 
 
        $fselect = "SELECT * FROM admin_account WHERE id=1";
        $fselect_query = mysqli_query($connected,$fselect);
        while($r = mysqli_fetch_assoc($fselect_query)){
         //   $_SESSION['number'] = $r['number'];
            $_SESSION['wallet'] = $r['wallet'];
             $_SESSION['wallet2'] = $r['wallet2'];
             $_SESSION['wallet3'] = $r['wallet3'];
             $_SESSION['wallet4x'] = $r['wallet4x'];
             $_SESSION['wallet5s'] = $r['wallet5s'];
             $_SESSION['wallet6d'] = $r['wallet6d'];
              $_SESSION['wallet7f'] = $r['wallet7f'];
        }
    if(isset($_POST['update'])){
       // $number = mysqli_real_escape_string($connected,$_POST['number']);
        $wallet = mysqli_real_escape_string($connected,$_POST['wallet']);
        $wallet2 = mysqli_real_escape_string($connected,$_POST['wallet2']);
        $wallet3 = mysqli_real_escape_string($connected,$_POST['wallet3']);
        $wallet4x = mysqli_real_escape_string($connected,$_POST['wallet4x']);
        $wallet5s = mysqli_real_escape_string($connected,$_POST['wallet5s']);
        $wallet6d = mysqli_real_escape_string($connected,$_POST['wallet6d']);
        $wallet7f = mysqli_real_escape_string($connected,$_POST['wallet7f']);
        
        $reset_query = "UPDATE admin_account SET wallet='$wallet',wallet2='$wallet2',wallet3='$wallet3',wallet4x='$wallet4x',wallet5s='$wallet5s',wallet6d='$wallet6d',wallet7f='$wallet7f' WHERE id=1";
        $reset_result = mysqli_query($connected,$reset_query);
        if($reset_result){
            $_SESSION['wallet'] = $wallet;
            $_SESSION['wallet2'] = $wallet2;
            $_SESSION['wallet3'] = $wallet3;
            $_SESSION['wallet4x'] = $wallet4x;
            $_SESSION['wallet5s'] = $wallet5s;
            $_SESSION['wallet6d'] = $wallet6d;
            $_SESSION['wallet7f'] = $wallet7f;
         //   $_SESSION['number'] =$number;
            $resetMsgSuc = "Service edit was successful";
        }else{
             $resetMsgErr = "Problem updating, contact web developer";
        }
    }
?>


<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Update Service Details:</h1>
    <div class="row">
        <?php if(isset($resetMsgSuc)) : ?>
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $resetMsgSuc; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($resetMsgErr)) : ?>
            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $resetMsgErr; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
 
        <?php endif; ?>
 
        <div class="frf mx-auto">
            <form action="" method="post">
                <div class="form-group">
                    <label>BITCOIN Address</label>
                    <input type="text" name="wallet" value="<?php echo $_SESSION['wallet']??"";?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>ETHEREUM Address</label>
                    <input type="text" name="wallet2" value="<?php echo $_SESSION['wallet2']??"";?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>USDT Address</label>
                    <input type="text" name="wallet3" value="<?php echo $_SESSION['wallet3']??"";?>" class="form-control" required>
                </div>
              <div class="form-group">
                    <label>XRP Address</label>
                    <input type="text" name="wallet4x" value="<?php echo $_SESSION['wallet4x']??"";?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>BNB Address</label>
                    <input type="text" name="wallet5s" value="<?php echo $_SESSION['wallet5s']??"";?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Solana Address</label>
                    <input type="text" name="wallet6d" value="<?php echo $_SESSION['wallet6d']??"";?>" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>LTC Address</label>
                    <input type="text" name="wallet7f" value="<?php echo $_SESSION['wallet7f']??"";?>" class="form-control" required>
                </div>
                <!--  <div class="form-group">
                    <label>Whatsapp Number</label>
                    <input type="text" name="number" value="<?php echo $_SESSION['number']??"";?>"  class="form-control" required>
                </div> -->
                <br><br>
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success text-uppercase" name="update" value="UPDATE">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>