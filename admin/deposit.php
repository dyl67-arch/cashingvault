<?php  
include_once "config/dbconnection.php";
 
if(isset($_POST['deposit']))  
  {
      $client_id=$_POST['c_id'];
      $c_id=$_POST['c_id'];
      $amount=$_POST['amount']; 
      
    
   
 
$keyLength = 8;
$str = "1234567890";
$invoice = substr(str_shuffle($str),0,$keyLength);

$getname = "SELECT * FROM users_account WHERE id='$client_id'";
$query_getname = mysqli_query($connected,$getname);
while($name = mysqli_fetch_assoc($query_getname)){
    $firstname = $name['firstname'];
    $lastname = $name['lastname'];
}
 

$fullname = $firstname." ".$lastname;
 
 
$ins_dep = "INSERT INTO user_deposits (c_id,invoice,amount,fullname) VALUES('$client_id','$invoice','$amount','$fullname')";
$query_ins_dep = mysqli_query($connected,$ins_dep);

if($query_ins_dep){
  header("Location: unpaid-invoices?success=Depost Was Successful");
   
}
else{
   header("Location: deposit?id=".$c_id);
   exit();
}

  }
    
 
include "header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="fr w-80 mx-auto">
            <h5 class="mb-3 text-dark">Deposit For User</h5>
            <form action="" method="post">
						 <div class="form-group row pt-0">
                            <label class="pl-2  control-label d-block" style="display:block;">Select User</label> 
                            <div class="col-md-11">
                                  <?php 
                                                                    $sel = "SELECT *FROM users_account";
                                                                    $query_sel = mysqli_query($connected,$sel);
                                                                ?>
                                                                <select id="" name="c_id" class="form-control">
                                                                    <?php while($r = mysqli_fetch_assoc($query_sel)) : ?>
                                                                        <option value="<?php echo $r['id']; ?>"><?php echo $r['firstname'].' '.$r['lastname'].' ('. $r['email']. ')';?></option>
                                                                    <?php endwhile; ?>
                                                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="number" class="form-control" value="" name="amount" required>
                             
                        </div> 
                        <!--<div class="form-group">-->
                        <!--    <label for="">Date</label>-->
                        <!--    <input type="date" class="form-control" value="" name="date" required> -->
                        <!--</div>-->
                        <div class="form-group">
                            <input type="submit" class="btn-primary" name="deposit" value="Process">
                        </div>
                    </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>