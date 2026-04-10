<?php include "header.php"; 
    $deposit_sql = "SELECT * FROM tbl_stakes WHERE  deleted='0' ";
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
           
            <h4 class="">Stakings</h4>
            <div class="widget-hold2">
                <table class="table table-sm table-responsive">
                    <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Account Name</th>
                              <th scope="col">Amount</th>
                              <th scope="col">Duration</th>
                              <th scope="col">Percentage</th>
                              <th scope="col">Date</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(mysqli_num_rows($query_deposit_sql) > 0 ) : ?>
                            <?php while ($row = mysqli_fetch_assoc($query_deposit_sql)) : ?>
                                
                                
                                <tr>
                                   
                                    <td><?php echo $c;?></td>
                                    <td> <?php $sender = $row['c_id']; 
                                            $getname = "SELECT * FROM users_account WHERE id='$sender'";
                                            $query_getname = mysqli_query($connected,$getname);
                                            while($rt = mysqli_fetch_assoc($query_getname)){
                                                $firstname = $rt['firstname'];
                                                $lastname = $rt['lastname'];
                                            }
                                            echo $firstname." ".$lastname;
                                        ?></td>
                                    <td><?php echo $row['stake_amount']; ?></td>
                                    <td><?php echo $row['duration']; ?></td>
                                <td><?php echo $row['percentage'];?>%</td>
                                <td><?php echo $row['date']; ?></td>
                             <td><a href="deletestake?s_id=<?php echo $row['s_id']; ?>&c_id=<?php echo $row['c_id'];?>" class="btn btn-sm btn-danger text-uppercase">Delete</td>
                                    
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