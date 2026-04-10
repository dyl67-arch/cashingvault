<?php include "header.php"; 
    if(isset($_GET['id'])){
        $u_id = $_GET['id'];
    }
    $getamt = "SELECT * FROM users_account WHERE id = '$u_id'";
    $query_getamt = mysqli_query($connected,$getamt);
    while($row_getamt = mysqli_fetch_assoc($query_getamt)){
        $trade_amount = $row_getamt['trade_amount'];
        $username = $row_getamt['username'];
        // $c_id = $row_getamt['c_id'];
        // $c_id = $row_getamt['c_id'];
    }
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Auto trade edit</h1>
    <div class="row">
        <div class="frf mx-auto">
                <form action="process/transact?id=<?php echo $u_id; ?>" method="post">
                    <div class="form-group">
                        <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                            <label for="">Outcome</label>
                            <select class="form-control" name="outcome">
                                <option value="won">Won</option>
                                <option value="lost">Lost</option>
                                <!--<option value="3">Three</option>-->
                            </select> 
                        <!--</div>-->
                    </div>
                    <div class="form-group">
                        <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                            <label for="">Percent</label>
                            <input type="number" name="percent" class="form-control" required> 
                        <!--</div>-->
                    </div>
                    <div class="form-group">
                        <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                            <label for="">Amount</label>
                            <input type="number" class="form-control" value="" name="edit_trade_amount" required> 
                            <input type="hidden" class="form-control" value="<?php echo $balance; ?>" name="user_balance"> 
                        <!--</div>-->
                    </div>
                    <div class="form-group">
                        <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                            <!--<label for="">Country</label>-->
                            <input type="submit" class="btn-primary" name="btn_edit_trade_amount" value="Update auto trade"> 
                        <!--</div>-->
                    </div>
                </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>