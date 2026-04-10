<?php include "header.php"; 
    error_reporting(E_ALL^E_NOTICE);
    if(isset($_GET['id'])){
        $userId = $_GET['id'];
        $_SESSION['uid'] = $_GET['id'];
    }
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM users_account WHERE id='$uid'";
    $query = mysqli_query($connected,$sql);
    
    while($row = mysqli_fetch_assoc($query)){
        $connect_status = $row['trade_status'];
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Connection Status Edit:</h1>
    <div class="row mx-auto">
        <?php if(isset($_GET['msgSucc'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['msgSucc']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php endif; ?> 
        <?php if(isset($_GET['msgErr'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['msgErr']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php endif; ?> 
    </div>
    <div class="row">
        <form action="process-change-connect?client_id=<?php echo $uid; ?>" method="post">
            
            <div class="form-group">
                <label >Account Name</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="trade_status" value="<?php echo $connect_status; ?>" class="form-control" id="" placeholder="">
                </div>
            </div>
          
            <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</div>
<?php include "footer.php"; ?>