<?php include "header.php"; 
    if(isset($_GET['trade_id'])){
        $trade_id = $_GET['trade_id'];
        $client_id = $_GET['client_id'];
    }
    $sql = "SELECT * FROM tbl_trades WHERE t_id ='$trade_id' AND c_id='$client_id' ";
    $query = mysqli_query($connected,$sql);
?>
<div class="container-fluid">
    <div class="row">
        <div class="fr w-80 mx-auto">
            <?php if(isset($_GET['success'])) : ?>
                <div class="alert alert-succcess alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['success']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['tradeErr'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['tradeErr']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <form action="process-edit?trade_id=<?php echo $trade_id; ?>&client_id=<?php echo $client_id; ?>" method="post" class="form">
                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <div class="form-group">
                    <label>Currency Pair</label>
                    <select name="assets" class="form-control">
                        <option value="<?php echo $row['asset']; ?>" selected><?php echo $row['asset']; ?></option>
                        <option value="EUR/USD">EUR/USD</option>
                        <option value="USD/JPY">USD/JPY</option>
                        <option value="GBP/USD">GBP/USD</option>
                        <option value="USD/CHF">USD/CHF</option>
                        <option value="AUD/USD">AUD/USD</option>
                        <option value="USD/CAD">USD/CAD</option>
                        <option value="NZD/USD">NZD/USD</option>
                        <option value="GBP/EUR">GBP/EUR</option>
                        <option value="EUR/CHF">EUR/CHF</option>
                        <option value="EUR/JPY">EUR/JPY</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Trade Amount</label>
                    <input type="number" name="amount" class="form-control" value="<?php echo $row['amount']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Set Trade Status</label>
                   <select name="trade_status" class="form-control">
                        <option value="pending" <?php  if($row['status']=='pending'){echo 'selected';} ?>>Pending</option>
                        <option value="approved"  <?php  if($row['status']=='approved'){echo 'selected';} ?>>Approved</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Trade outcome</label>
                    <select name="trade_outcome" class="form-control">
                        <option value="lost">Lost</option>
                        <option value="won">Won</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date" class="form-control" value="<?php echo $row['date']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Set Profit</label>
                    <input type="text" name="profit" class="form-control" value="<?php echo $row['payout']; ?>" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit_trade" class="btn btn-sm btn-success text-uppercase" value="save">
                    <input type="hidden" name="logic"  value="<?php if($row['status']=='approved'){
                        echo '1';
                        }
                        else {
                            {
                                echo '0';
                            }
                        }?>">
                    <!--<input type="submit" name="delete_trade" class="btn btn-sm btn-danger text-uppercase" value="delete trade">-->
                </div>
                <?php endwhile; ?>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>