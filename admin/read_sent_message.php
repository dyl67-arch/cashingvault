<?php include 'header.php'; ?>
<?php 
    if(isset($_GET['message_id'])){
        $message_id = $_GET['message_id'];
        if(isset($_GET['use_id'])){
            $user_id = $_GET['use_id'];
            {
                $select_message = "SELECT * FROM user_message WHERE m_id = '$message_id' AND c_id = '$user_id'";
                $select_message_query = mysqli_query($connected,$select_message);

                // $seen = 1;
                
                // $update_seen = "UPDATE tbl_admin_message SET message_seen='$seen' WHERE message_id='$message_id' AND sender_id=$user_id";
                // $update_seen_query = mysqli_query($connected,$update_seen);
            }
        }
    }
?>
<div class="container-fluid"> 
    <?php include "message-aside.php"; ?>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="email-head pt-2">
                            <?php if(mysqli_num_rows($select_message_query) > 0) : ?>
                                    <?php while ($select_message_row = mysqli_fetch_assoc($select_message_query)) : ?>
                                    <?php $receiver = $select_message_row['c_id']; 
                                            $getn = "SELECT * FROM users_account WHERE id='$receiver'";
                                            $query_getn = mysqli_query($connected,$getn);
                                            while($re = mysqli_fetch_assoc($query_getn)){
                                                $firstname = $re['firstname'];
                                                $lastname = $re['lastname'];
                                            }
                                        ?>
                                    <div class="email-head-sender">
                                        <div class="date float-right"><!--August 23, 3:37--><?php echo $select_message_row['date']; ?></div>
                                        <div class="sender">From <a href="#">Support</a> to <?php echo $firstname." ".$lastname; ?></div> 
                                        <!-- <div class="avatar"><img src="../assets/images/avatar-2.jpg" alt="Avatar" class="rounded-circle user-avatar-md"></div> -->
                                    </div>
                    </div>
                    <div class="email-body pt-2">
                        <?php echo $select_message_row['message']; ?>
                    </div>
                    
                    <?php endwhile; ?>
                    <?php else : ?>
                            <?php echo "No record Found"; ?>
                        <?php endif; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>