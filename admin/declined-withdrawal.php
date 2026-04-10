<?php include "header.php"; 
    $sql_bit = "SELECT * FROM users_bitcoin_withdraw WHERE declined='1'";
    $query_bit = mysqli_query($connected,$sql_bit);
    
    $sql_bank = "SELECT * FROM users_bank_withdraw WHERE declined='1'";
    $query_bank = mysqli_query($connected,$sql_bank);
?>
<div class="container-fluid">
    <div class="row">
            <?php if(isset($_GET['msgSuc'])) : ?>
                <div class="alert alert-succcess alert-dismissible fade show" role="alert">
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
            <div class="frf mx-auto">
                <h4>Bank Withdrawal</h4>
                <table class="table table-sm table-striped table-responsive">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">sn</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Account Number</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>      
                                <?php if(mysqli_num_rows($query_bank) < 1) : ?>
                                    <?php echo "No record Found"; ?>
                                <?php else : ?>
                                    <?php while($row = mysqli_fetch_assoc($query_bank)) : ?>
                                            <tr>
                                                
                                                 <?php 
                                                    $uid = $row['client_id'];
                                                    $gett = "SELECT * FROM users_account WHERE id='$uid'";
                                                    $query_gett = mysqli_query($connected,$gett);
                                                    while($pin = mysqli_fetch_assoc($query_gett)){
                                                        $fullname = $pin['firstname'].' '.$pin['lastname']; 
                                                    }
                                                ?>
                                                
                                                <th scope="row"><?php echo $counter;?></th>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $row['account_name']; ?></td>
                                                <td><?php echo $row['account_number']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <!--<td><a href="approve-bank-withdrawal.php?id= //echo $row['bank_id']; ?>" class="btn btn-sm btn-success text-uppercase">approve</a></td>-->
                                                <!--<td><a href="deny-bank-withdrawal.php?id= //echo $row['bank_id']; ?>" class="btn btn-sm btn-danger text-uppercase">deny</a></td>-->
                                            </tr>
                                            <?php $counter = $counter + 1; ?>
                                    <?php endwhile; ?>              
                                <?php endif; ?>
                            </tbody>
                </table> 
                
                <h4 class="mt-3">Bitcoin Withdrawal</h4>
                <table class="table table-sm table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">sn</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Wallet Address</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>      
                                <?php if(mysqli_num_rows($query_bit) < 1) : ?>
                                    <?php echo "No record Found"; ?>
                                <?php else : ?>
                                <?php 
                                    $count_bit = 1;
                                ?>
                                    <?php while($row = mysqli_fetch_assoc($query_bit)) : ?>
                                            <tr>
                                                
                                                 <?php 
                                                    $uid = $row['client_id'];
                                                    $gett = "SELECT * FROM users_account WHERE id='$uid'";
                                                    $query_gett = mysqli_query($connected,$gett);
                                                    while($pin = mysqli_fetch_assoc($query_gett)){
                                                        $fullname = $pin['firstname'].' '.$pin['lastname']; 
                                                    }
                                                ?>
                                                
                                                
                                                <th scope="row"><?php echo $count_bit;?></th>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $row['wallet_address']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <!--<td><a href="approve-bit-withdrawal.php?id= //echo $row['bitcoin_id']; ?>" class="btn btn-sm btn-success text-uppercase">approve</a></td>-->
                                                <!--<td><a href="deny-bit-withdrawal.php?id= //echo $row['bitcoin_id']; ?>" class="btn btn-sm btn-danger text-uppercase">deny</a></td>-->
                                            </tr>
                                            <?php $count_bit = $count_bit + 1; ?>
                                    <?php endwhile; ?>              
                                <?php endif; ?>
                            </tbody>
                </table> 
            </div>
    </div>
</div>
<?php include "footer.php"; ?>