<?php include 'header.php'; ?>
<?php 
    $select_inbox = "SELECT * FROM user_message";
    $select_inbox_query = mysqli_query($connected,$select_inbox);
    $sent_message_counter = 0;

    $select_inbox2 = "SELECT * FROM user_message";
    $select_inbox_query2 = mysqli_query($connected,$select_inbox2);
    while($r = mysqli_fetch_assoc($select_inbox_query2)){
        $sent_message_counter++;
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
                <?php if(mysqli_num_rows($select_inbox_query) > 0) : ?>
                    <?php while($admin_sent_row = mysqli_fetch_assoc($select_inbox_query)) : ?>
                    
                        <?php $receiver = $admin_sent_row['c_id']; 
                                $getn = "SELECT * FROM users_account WHERE id='$receiver'";
                                $query_getn = mysqli_query($connected,$getn);
                                while($re = mysqli_fetch_assoc($query_getn)){
                                    $firstname = $re['firstname'];
                                    $lastname = $re['lastname'];
                                }
                            ?>
                <div class="email-list-item p-2">
                    <div class="email-list-detail"><span class="date float-right"><?php echo $admin_sent_row['date']; ?></span><span class="from" style="color:#d00000"> To: <?php echo $firstname." ".$lastname ; ?></span>
                        <a href="read_sent_message?message_id=<?php echo $admin_sent_row['m_id']?>&use_id=<?php echo $admin_sent_row['c_id'];?>"><p class="msg" style=""><?php shorten($admin_sent_row['message'],100);?></p></a>
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