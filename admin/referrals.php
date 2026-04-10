<?php include "header.php"; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $user_counter = 1;
    $users = "SELECT * FROM users_account WHERE NOT referral_id = '' AND NOT referrer_id=''";
    $user_trades = mysqli_query($connected,$users);
?>
<div class="container-fluid">
    <div class="row">
        <div class="frf mx-auto">
            <h5 class="mb-4 text-dark">List of all Referrals</h5>
            <div class="widget-hold2">
                <?php if(mysqli_num_rows($user_trades) <= 0) : ?>
                    <div class="my-auto">
                        <center>
                            <i class="fas fa-folder-open fa-3x"></i>
                            <p>No Referrals found.</p>
                        </center>
                    </div>
                <?php else: ?>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <th>sn</th>
                            <th>Referrer Name</th>
                            <th>Referral Name</th>
                            <th>Date</th>
                            <!--<th>Operation</th>-->
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($user_trades)) : ?>
                                <tr>
                                    <?php
$users = "SELECT * FROM users_account WHERE referral_id = '".$row["referrer_id"]."'";
$user_trade = mysqli_query($connected,$users);
 
?>
                                    <td><?php echo $user_counter; ?></td>
                                    <td><?php echo $row['firstname'].' '.$row['lastname'];?></td>
                                 <td> <?php   
                                        while($rowdata=mysqli_fetch_assoc($user_trade))
                                        {
                                        echo $rowdata['firstname'].' '.$rowdata['lastname'];
                                        }
                                  ?></td>
                                    <td><?php echo date("m-D-Y", strtotime($row['reg_date'])); ?></td>
                                    
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