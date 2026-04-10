<?php include "header.php"; 
    error_reporting(E_ALL^E_NOTICE);
    if(isset($_POST['add_wallet'])){
        $wallet_address = mysqli_real_escape_string($connected,$_POST['wallet_address']);
        
        $updateUser = "UPDATE tbl_wallet_address SET wallet_address='$wallet_address' WHERE id='1'";
        $queryUpdateUser = mysqli_query($connected, $updateUser);
        if($queryUpdateUser){
                $msgSucc = "Wallet was added successfully";
            }
        else {
                $msgError = "unable to add wallet";
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Add Wallet</h1>
    
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
        <form action="add-wallet" method="post">
            <div class="form-group">
                <label >Enter Wallet Address</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="wallet_address" class="form-control" id="" placeholder="add wallet address">
                </div>
            </div>
            
            <button type="submit" name="add_wallet" class="btn btn-primary mb-2">ADD WALLET</button>
        </form>
    </div>
</div>
<?php include "footer.php"; ?>