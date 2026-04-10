<?php include 'header.php'; ?>
<?php 
    $deleted = 0;
    $select_unread = "SELECT * FROM admin_message ";
    $select_unread_query = mysqli_query($connected, $select_unread); 
    $new_message_counter = 0;
                    
    $select_read = "SELECT * FROM admin_message ";
    $select_read_query = mysqli_query($connected,$select_read);
    while($read_unseen = mysqli_fetch_assoc($select_read_query)){
        $rd = $read_unseen['seen'];
        if($rd == "0"){
            $new_message_counter++;
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
                            <span class="icon"><i class="fas fa-inbox"></i></span> Inbox 
                            <span class="new-messages">(<?php echo $new_message_counter ." "; ?> new messages)</span>
                        </div>
                    </div>
                </div>
                <?php if(mysqli_num_rows($select_unread_query) > 0) : ?>
                    <?php while($read_row = mysqli_fetch_assoc($select_unread_query)) : ?>
                        <?php $seen = $read_row['seen']; ?>
                         <?php $sender = $read_row['c_id']; 
                                            $getname = "SELECT * FROM users_account WHERE id='$sender'";
                                            $query_getname = mysqli_query($connected,$getname);
                                            while($rt = mysqli_fetch_assoc($query_getname)){
                                                $firstname = $rt['firstname'];
                                                $lastname = $rt['lastname'];
                                            }
                                        ?>
                        <?php if($seen == "0") : ?>
                            <div class="email-list-item p-2">
                                <div class="email-list-detail">
                                    <b>
                                        
                                    <span class="date float-right"><?php echo $read_row['date']; ?></span>
                                    <span class="from " style="color:#d00000">From <?php echo $firstname." ". $lastname; ?></b></span>
                                    <a href="read-message?message_id=<?php echo $read_row['m_id'];?>&use_id=<?php echo $read_row['c_id'];?>">
                                        <p class="msg" style=""><b><?php echo shorten($read_row['message'],100);?></b></p>
                                    </a>
                                </div>
                            </div>
                        <?php elseif($seen == "1") : ?>
                            <div class="email-list-item p-2">
                                <div class="email-list-detail">
                                    <span class="date float-right"><?php echo $read_row['date']; ?></span>
                                    <span class="from " style="color:#d00000">From <?php echo $firstname." ". $lastname; ?></span>
                                    <a href="read-message?message_id=<?php echo $read_row['m_id'];?>&use_id=<?php echo $read_row['c_id'];?>">
                                        <p class="msg text-dark" style=""><?php echo shorten($read_row['message'],100);?></p>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo "No record Found"; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>