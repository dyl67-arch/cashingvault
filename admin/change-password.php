<?php include "header.php"; ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Password Reset:</h1>
    <div class="row">
        <?php if(isset($_GET['changeSucMsg'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['changeSucMsg']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET['changeErrMsg'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['changeErrMsg']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    
        <div class="frf mx-auto">
            <form action="process-change-password" method="post">
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="text" name="current_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="text" name="new_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" name="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success text-uppercase" name="change_submit" value="Proceed">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>