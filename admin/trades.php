<?php include "header.php"; 
    $sql_trade = "SELECT * FROM tbl_trades where deleted=0";
    $query_trade = mysqli_query($connected,$sql_trade);
    $counter=1;
?>
<div class="container-fluid">
    <div class="row">
            <?php if(isset($_GET['msgSuc'])) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['msgSuc']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['msgErr'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['msgErr']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['upSuc'])) : ?>
                <div class="alert alert-succcess alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['upSuc']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['upErr'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['upErr']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            <div class="frf mx-auto widget-hold2">
                <h4>User Trades</h4>
                <table class="table table-sm table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">sn</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Assets</th>
                                    <th scope="col">Prediction</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Payout</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>      
                                <?php if(mysqli_num_rows($query_trade) < 1) : ?>
                                    <?php echo "No record Found"; ?>
                                <?php else : ?>
                                    <?php while($row = mysqli_fetch_assoc($query_trade)) : ?>
                                    <?php 
                                        $trader = $row['c_id'];
                                        $select_trader = "SELECT * FROM users_account WHERE id='$trader'";
                                        $query_select_trader = mysqli_query($connected,$select_trader);
                                        while($ty = mysqli_fetch_assoc($query_select_trader)){
                                            $firstname = $ty['firstname'];
                                            $lastname = $ty['lastname'];
                                        }
                                        $fullname = $firstname .' '.$lastname;
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $counter;?></th>
                                                
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $row['asset']; ?></td>
                                                <td><?php echo $row['prediction']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['payout']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><a href="edit-trade?trade_id=<?php echo $row['t_id']; ?>&client_id=<?php echo $row['c_id'];?>" class="btn btn-sm btn-primary text-uppercase">Edit Trade</a></td>
                                                
                                            </tr>
                                            <?php $counter = $counter + 1; ?>
                                    <?php endwhile; ?>              
                                <?php endif; ?>
                            </tbody>
                </table> 
                
            </div>
    </div>
</div>
<?php include "footer.php"; ?>