<?php include 'header.php'; 
    $sql_jk = "SELECT * FROM users_account";
    $query_jk = mysqli_query($connected,$sql_jk);
?>
<div class="container-fluid"> 
        <?php include "message-aside.php"; ?>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <?php if(isset($_GET['sentSuccess'])) : ?>
                <div class="container">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_GET['sentSuccess']; ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['sentErr'])) : ?>
                <div class="container">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $_GET['sentErr']; ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
            <?php endif; ?>
            <div class="pl-3 pb-3">
                    <div class="email-head-title"><h5>Compose new message</h5><span class="icon mdi mdi-edit"></span></div>
            </div>
            <div class="pl-3 pb-3">
                <form action="process-compose" method="post" enctype="multipart/form-data">
                    <div class="to">
                        <div class="form-group row pt-0">
                            <label class="col-md-1 control-label">To:</label>
                            <div class="col-md-11">
                                <select class="custom-select mr-sm-2" name="to" id="">
                                    <?php while ($ro = mysqli_fetch_assoc($query_jk)) : ?>
                                        <option value="<?php echo $ro['id'];?>"><?php echo " ".$ro['firstname']." ".$ro['lastname']." "; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="subject">
                        <div class="form-group row pt-2">
                            <label class="col-md-2 control-label">Subject</label>
                            <div class="col-md-10">
                                <input class="form-control" name="message_subject" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pl-3">
                            <label class="control-label" for="">Descriptions </label>
                            <textarea class="form-control" id="" name="message_body" rows="6" placeholder="Write Descriptions"></textarea>
                    </div>
                    <div class="form-group row pl-3">
                            <label>Attach File</label>
                            <input type="file" name="message_attachment" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="submit" name="message_send" class="btn btn-sm btn-primary text-uppercase" value="send message">
                    </div>
                </form>           
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>