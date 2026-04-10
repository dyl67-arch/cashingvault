<?php include "header.php"; 
    $sql = "SELECT * FROM users_account WHERE blocked='1'";
    $query = mysqli_query($connected,$sql);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Total blocked users:</h1>
    <div class="row">
               <?php if(isset($_GET['resetMsgSuc'])) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_GET['resetMsgSuc']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>   
                       <?php if(isset($_GET['resetMsgErr'])) : ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong><?php echo $_GET['resetMsgErr']; ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                <?php endif; ?>                 
                <table class="table table-sm table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">sn</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">email</th>
                            <th scope="col">balance</th>
                            <th scope="col">Unblock</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!$query) {
                            echo "No record Found";
                        } ?>
                        <?php 
                        $counter=1;
                        while($row = mysqli_fetch_assoc($query)) : ?>
                            <?php $checkeddeleted = $row['deleted']; ?>
                            <?php if($checkeddeleted == '0') : ?>
                                <tr>
                                    <th scope="row"><?php echo $counter;?></th>
                                    <td><?php echo $row['firstname']?></td>
                                    <td><?php echo $row['lastname']?></td>
                                    <td><?php echo $row['email']?></td>
                                    
                                    <td><?php echo $row['balance']?></td>
                                    <td><a href="unblock-user?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning">Unblock</a></td>
                                    <td><a href="delete-user?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                                <?php $counter = $counter + 1; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </tbody>
                </table>            
    </div>
</div>
<?php include "footer.php"; ?>