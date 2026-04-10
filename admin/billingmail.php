<?php include 'header.php'; 
    $sql_jk = "SELECT * FROM users_account";
    $query_jk = mysqli_query($connected,$sql_jk);
?></div> 
<div class="container-fluid">   
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
            <div class="pl-3 pb-3">
                    <div class="email-head-title"><h5>Send Mail</h5><span class="icon mdi mdi-edit"></span></div>
            </div>
            <div class="pl-3 pb-3">
                <form action="billingmail2" method="post" enctype="multipart/form-data">
                    <div class="to">
                        <div class="form-group row pt-0">
                            <label class="col-md-1 control-label">To:</label>
                            <div class="col-md-11">
                                  <?php 
                                                                    $sel = "SELECT *FROM users_account";
                                                                    $query_sel = mysqli_query($connected,$sel);
                                                                ?>
                                                                <select id="" name="email" class="form-control">
                                                                    <?php while($r = mysqli_fetch_assoc($query_sel)) : ?>
                                                                        <option value="<?php echo $r['email']; ?>"><?php echo $r['firstname'].' '.$r['lastname'].' ('. $r['email']. ')';?></option>
                                                                    <?php endwhile; ?>
                                                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="subject">
                        <div class="form-group row pt-2">
                            <label class="col-md-2 control-label">Subject</label>
                            <div class="col-md-10">
                                <input class="form-control" placeholder="Description"  name="subject" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pl-3">
                            <label class="control-label" for="">Message </label>
                            <textarea class="form-control" id="" name="message" rows="10" placeholder="Write Message"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="message_send" class="btn btn-sm btn-primary text-uppercase" value="Proceed">
                    </div>
                </form>           
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>