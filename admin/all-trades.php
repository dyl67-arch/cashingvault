<?php include "header.php"; 
    $trade_sql = "SELECT * FROM users_trade ";
    $query_trade_sql = mysqli_query($connected,$trade_sql);
?>
<div class="container-fluid">
    <div class="row">
        <div class="frf mx-auto">
            <h4 class="">All Trades</h4>
            <table class="table table-sm table-responsive">
                <thead>
                    <tr>
                          <th scope="col">Currency Pair</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($query_trade_sql) > 0 ) : ?>
                        <?php while ($row = mysqli_fetch_assoc($query_trade_sql)) : ?>
                            <tr>
                                <th scope="row"><?php echo $row['currency_pair']; ?></th>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><a href="edit-trade?trade_id=<?php echo $row['trade_id'];?>" class="btn btn-sm btn-primary text-uppercase">Edit Trade</a></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No Record Found</p>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>