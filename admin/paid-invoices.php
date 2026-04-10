<?php include "header.php"; 
    $deposit_sql = "SELECT * FROM user_deposits WHERE  approved='1' ";
    $query_deposit_sql = mysqli_query($connected,$deposit_sql);
    $c = 1;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <?php if(isset($_GET['confirmSuc'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?php echo $_GET['confirmSuc']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
            <?php if(isset($_GET['confirmErr'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><?php echo $_GET['confirmErr']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
           
            <h4 class="">Active Deposits</h4>
            <div class="widget-hold2">
                <table class="table table-sm table-responsive">
                    <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Account Name</th>
                              <th scope="col">Amount</th>
                              <th scope="col">Invoice</th>
                              <th scope="col">Status</th>
                              <th scope="col">Date</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(mysqli_num_rows($query_deposit_sql) > 0 ) : ?>
                            <?php while ($row = mysqli_fetch_assoc($query_deposit_sql)) : ?>
                                
                                
                                <tr>
                                   
                                    <td><?php echo $c;?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['invoice']; ?></td>
                                <td><?php echo $row['payment_status'];?></td>
                                <td><?php echo $row['date']; ?></td>
                             
                                    
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                <?php $c++; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p>No Record Found</p>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>