<?php include "header.php"; 
    $sql_bit = "SELECT * FROM bitcoin_withdraw WHERE deleted='0'";
    $query_bit = mysqli_query($connected,$sql_bit);
    
    $sql_bank = "SELECT * FROM bank_withdraw WHERE deleted='0'";
    $query_bank = mysqli_query($connected,$sql_bank);
    $counter = 1;
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
                                                    $uid = $row['c_id'];
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
                                                <?php $status = $row['status']; ?>
                                                    <?php if($status == 'Approved') : ?>
                                                        <td><span class="badge badge-secondary"><?php echo 'Approved'; ?></span></td>
                                                    <?php else : ?>
                                                         <td><a href="approve-bank-withdrawal?bank_id=<?php echo $row['b_id']; ?>&amount=<?php echo $row['amount']; ?>&client_id=<?php echo $row['c_id'];?>" class="btn btn-sm btn-success text-uppercase">approve</a></td>
                                                <?php endif; ?>
                                               
                                                <!--<td><a href="decline-bank-withdrawal.php?bank_id=<php echo $row['bank_id']; ?>&amount=<php echo $row['amount']; ?>&client_id=<php echo $row['client_id'];?>" class="btn btn-sm btn-danger text-uppercase">decline</a></td>-->
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
                                    <?php $count_bit = 1; ?>
                                    <?php while($row = mysqli_fetch_assoc($query_bit)) : ?>
                                            <tr>
                                                <?php 
                                                    $uid = $row['c_id'];
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
                                                <?php $status = $row['status']; ?>
                                                    <?php if($status == 'Approved') : ?>
                                                        <td><span class="badge badge-secondary"><?php echo 'Approved'; ?></span></td>
                                                    <?php else : ?>
                                                        <td><a href="approve-bit-withdrawal?bitcoin_id=<?php echo $row['w_id']; ?>&amount=<?php echo $row['amount']; ?>&client_id=<?php echo $row['c_id'];?>" class="btn btn-sm btn-success text-uppercase">approve</a></td>
                                                <?php endif; ?>
                                                
                                                <!--<td><a href="decline-bit-withdrawal.php?bitcoin_id=<php echo $row['bitcoin_id']; ?>&amount=<php echo $row['amount']; ?>&client_id=<php echo $row['client_id'];?>" class="btn btn-sm btn-danger text-uppercase">decline</a></td>-->
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