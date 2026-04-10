<?php include 'header.php'; ?>
<?php 
    if(isset($_GET['message_id'])){
        $message_id = $_GET['message_id'];
        if(isset($_GET['use_id'])){
            $user_id = $_GET['use_id'];
            {
                $select_message = "SELECT * FROM admin_message WHERE m_id = '$message_id' AND c_id = '$user_id'";
                $select_message_query = mysqli_query($connected,$select_message);

                $seen = 1;
                
                $update_seen = "UPDATE admin_message SET seen='$seen' WHERE m_id='$message_id' AND c_id='$user_id'";
                $update_seen_query = mysqli_query($connected,$update_seen);
            }
        }
    }
?>
<div class="container-fluid"> 
    <?php include "message-aside.php"; ?>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

            <div class="email-inbox-header p-2">
                <div class="row">
                    <div class="">
                        <div class="email-title">
                            <span class="icon"><i class="fas fa-fw  fa-envelope"></i></span> Sent 
                            <span class="new-messages"> (<?php echo $sent_message_counter ." "; ?> sent messages)</span> 
                        </div>
                    </div>
                </div>
                <?php if(mysqli_num_rows($select_message_query) > 0) : ?>
                            <?php while ($select_message_row = mysqli_fetch_assoc($select_message_query)) : ?>
                            <?php $sender = $select_message_row['c_id']; 
                                $getn = "SELECT * FROM users_account WHERE id='$sender'";
                                $query_getn = mysqli_query($connected,$getn);
                                while($re = mysqli_fetch_assoc($query_getn)){
                                    $firstname = $re['firstname'];
                                    $lastname = $re['lastname'];
                                }
                            ?>
                            
                <div class="email-list-item p-2">
                    <div class="email-list-detail">
                        <span class="date float-right"><?php echo $select_message_row['date']; ?></span>
                        From <span class="from" style="color:#d00000"> <?php echo $firstname." ".$lastname; ?> to <span class="text-primary">ME</span></span>
                        <div class="">
                            <?php echo $select_message_row['message']; ?>
                        </div>
                        
                        
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php echo "No record found"; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>