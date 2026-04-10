<?php include "header.php"; 
    $counter = 1;
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Total active users:</h1>
    <div class="row">
        <?php if(isset($_GET['blockMsg'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['blockMsg']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET['blockErrMsg'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['blockErrMsg']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET['resetMsgSuc'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['resetMsgSuc']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET['resetMsgErr'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['resetMsgErr']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="frf mx-auto widget-hold2">
            <table class="table table-sm table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">sn</th>
                                <th scope="col">firstname</th>
                                <th scope="col">lastname</th>
                                <th scope="col">email</th>
                                <th scope="col">balance</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Bonus</th>
                                <th scope="col">Currency</th>
                                 <th scope="col">Plan Type</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>      
                            <?php if(mysqli_num_rows($query) < 1) : ?>
                                <?php echo "No record Found"; ?>
                            <?php else : ?>
                                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                                    <?php $checkedblocked = $row['blocked']; ?>
                                    <?php $checkeddeleted = $row['deleted']; ?>
                                    <?php if( ($checkeddeleted == '0')) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $counter;?></th>
                                            <td><?php echo $row['firstname']; ?></td>
                                            <td><?php echo $row['lastname']; ?></td>
                                            <td>
                                                <?php 
                                                    echo $row['email'];
                                                    $auto_trading = $row['auto_trading'];
                                                ?>
                                            </td>
                                            <td><?php echo number_format($row['balance']??0.0,2);?></td>
                                            <td><?php echo number_format($row['invested']??0.0,2);?></td>
                                            <td><?php echo number_format($row['profit']??0.0,2);?></td>
                                             <td><?php echo $row['currency']; ?></td>
                                              <td><?php echo $row['account_type']; ?></td>
                                            <td>
                                                <form class="form-inline" action="" method="post">
                                                    <select class="form-control" name="operation" id="" class="">
                                                        <option value="block">Block</option>
                                                        <option value="upgrade">Upgrade Account</option>
                                                        <option value="credit">Credit</option>
                                                        <option value="reset_balance">Reset Balance</option>
                                                        <option value="reset_profit">Set Bonus/Invested Balance</option> 
                                                        <option value="stake">Stake</option>
                                                        <option value="alert_notification">Alert</option>
                                                        <option value="view_profile">View Profile</option>
                                                        <option value="delete">Delete</option>
                                                        <option value="trade">Trade</option> 
                                                        <option value="trade_percentage">Trade Percentage</option>
                                                        <option value="edit_trade">Trade History</option>
                                                          
                                                    </select>
                                                    <input type="hidden" name="user_identity" value="<?php echo $row['id']; ?>">
                                                
                                            </td>
                                            <td>
                                                <input type="submit" value="Process" name="operation_btn" class="btn-sm btn-primary">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $counter = $counter + 1; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>              
                            <?php endif; ?>
                        </tbody>
            </table> 
        </div>           
    </div>  
</div>
<?php include "footer.php"; ?>