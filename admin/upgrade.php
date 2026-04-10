<?php include "header.php"; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // $client_id = $_GET['client_id'];
    }
    // $sql = "SELECT * FROM users_trade WHERE trade_id ='$trade_id' ";
    // $query = mysqli_query($connected,$sql);
?>
<div class="container-fluid">
    <div class="row">
        <div class="fr w-80 mx-auto">
            
            <form action="process/transact?id=<?php echo $id; ?>" method="post" class="form">
                <div class="form-group">
                    <label>Account Plan</label>
                    <select  class="form-control" name="account_type" required> 
                      <option value="Classic">Classic</option>
                      <option value="Executive">Executive</option>
                       <option value="Platinum">Platinum </option>   
                      <option value="Deluxe">Deluxe </option>
                      <option value="Premium">Premium</option>
                  
                  </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit_account_plan" class="btn btn-sm btn-success text-uppercase" value="save">
                    <!--<input type="submit" name="delete_trade" class="btn btn-sm btn-danger text-uppercase" value="delete trade">-->
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>