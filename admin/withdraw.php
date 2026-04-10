<?php
 include_once "config/dbconnection.php";
  if(isset($_GET['activate_withdraw']))
  {
      $user="UPDATE users_account set withdrawal_error=1 where id=".$_GET['activate_withdraw'];
      $query_user = mysqli_query($connected,$user);
      header("Location: withdraw?wsuc=Withdraw Activated");
                exit();
  }
  if(isset($_GET['deactivate_withdraw']))
  {
      $user="UPDATE users_account set withdrawal_error=0 where id=".$_GET['deactivate_withdraw'];
      $query_user = mysqli_query($connected,$user);
      header("Location:withdraw?wsuc=Withdraw Deactivated");
                exit();
  }
    $user = "SELECT * FROM users_account where deleted='0'";
    $query_user = mysqli_query($connected,$user);
    $counter=1;

?>
<?php include "header.php"; ?>
 <?php if(isset($_GET['wsuc'])) : ?>
                <div class="alert alert-succcess alert-dismissible fade show" role="alert">
                  <strong><?php echo $_GET['wsuc']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
<div class="container-fluid">
    <div class="row">
            
            <div class="frf mx-auto widget-hold2">
                <h4>Bank Withdrawal</h4>
                <table class="table table-sm table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">sn</th>
                                    <th scope="col">Client Name</th>
                                     <th scope="col">Balance</th>
                                    <th scope="col">Activation Key</th>
                                    <th scope="col">Bank Private Key</th>
                                    <th scope="col">Bitcoin Private Key</th>
                                </tr>
                            </thead>
                            <tbody>      
                                <?php if(mysqli_num_rows($query_user) < 1) : ?>
                                    <?php echo "No record Found"; ?>
                                <?php else : ?>
                                    <?php while($row = mysqli_fetch_assoc($query_user)) : ?>
                                            <tr>
                                      
                                                <th scope="row"><?php echo $counter;?></th>
                                                <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
                                                <td><?php echo $row['balance']; ?></td>
                                                <td><?php echo $row['act_key']; ?></td>
                                                <td><?php echo $row['bnk_key']; ?></td>
                                                <td><?php echo $row['btc_key']; ?></td>
                                                <?php $status = $row['withdrawal_error']; ?>
                                                    <?php if($status == '0') : ?>
                                                        <td><a href="withdraw?activate_withdraw=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger text-uppercase">Activate Withdraw</a></td>
                                                    <?php else : ?>
                                                         <td><a href="withdraw?deactivate_withdraw=<?php echo $row['id'];?>" class="btn btn-sm btn-success text-uppercase">Deactivate Withdraw</a></td>
                                                <?php endif; ?>
                                               
                                                <!--<td><a href="decline-bank-withdrawal.php?bank_id=<php echo $row['bank_id']; ?>&amount=<php echo $row['amount']; ?>&client_id=<php echo $row['client_id'];?>" class="btn btn-sm btn-danger text-uppercase">decline</a></td>-->
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