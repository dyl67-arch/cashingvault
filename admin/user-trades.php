<?php include "header.php"; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $user_counter = 1;
    $users = "SELECT * FROM tbl_trades WHERE deleted='0' AND c_id='$id'";
    $user_trades = mysqli_query($connected,$users);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h5 class="mb-4 text-dark">List of all user trades</h5>
            <div class="widget-hold2">
                <?php if(mysqli_num_rows($user_trades) <= 0) : ?>
                    <div class="my-auto">
                        <center>
                            <i class="fas fa-folder-open fa-3x"></i>
                            <p>No Trades found.</p>
                        </center>
                    </div>
                <?php else: ?>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <th>sn</th>
                            <!--<th>Account type</th>-->
                            <th>Asset</th>
                            <th>Amount</th>
                            
                            <!--<th>Bonus</th>-->
                            
                            <th>Expected</th>
                            <th>Order</th>
                            <th>Date</th>
                            <!--<th>Operation</th>-->
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($user_trades)) : ?>
                                <tr>
                                    <td><?php echo $user_counter; ?></td>
                                    <!--<td><php echo $row['account_type']; ?></td>-->
                                    <td><?php echo $row['asset'] ?></td>
                                    <td><?php echo number_format($row['amount'],2) ?></td>
                                    <td><?php echo number_format($row['payout'],2) ?></td>
                                    <td><?php echo $row['prediction']; ?></td>
                                    <!--<td><php echo number_format($row['bonus'],2) ?></td>-->
                                    <td><?php echo date("m-D-Y", strtotime($row['date'])); ?></td>
                                    <td><a href="edit-u-trade?u_id=<?php echo $row['c_id']; ?>" class="btn btn-sm btn-success">Edit trade</td>
                                    <td><a href="delete-u-trade?u_id=<?php echo $row['t_id']; ?>&uid=<?php echo $row['c_id']; ?>" class="btn btn-sm btn-light">Delete trade</td>
                                </tr>
                                <?php $user_counter++; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>