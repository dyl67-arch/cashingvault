<?php include "config/dbconnection.php";
if(isset($_POST['message_send'])){
        // $receiver_id = $_SESSION['usr_id'];
        $to = mysqli_real_escape_string($connected,$_POST['to']);

        $gue = "SELECT * FROM users_account WHERE id='$to'";
        $query_gue = mysqli_query($connected,$gue);
        
        $filename_new = '';
        $file = $_FILES['message_attachment'];
        // if(!empty($file)){
            $filename = $_FILES['message_attachment']['name'];
            $file_tmp_name = $_FILES['message_attachment']['tmp_name'];
            $file_type = $_FILES['message_attachment']['type'];
            $file_size = $_FILES['message_attachment']['size'];
            $file_upload_stat = $_FILES['message_attachment']['error'];
            
            $file_ext = explode('.', $filename);
            $file_actual_ext = strtolower(end($file_ext));
            
            $allowed = array("jpg","jpeg","png");
            
            if(in_array($file_actual_ext, $allowed)){
                if($file_upload_stat === 0){
                    if($file_size < 1000000){
                        $filename_new = uniqid('',true).".".$file_actual_ext;
                        $file_destination = '../accounts/libs/img_ups/'.$filename_new;
                        move_uploaded_file($file_tmp_name,$file_destination);
                    }
                    else{
                        header("Location: compose?error=Maximum upload file is 1MB&p=Message Center");
                        exit();
                    }
                }
                else{
                    header("Location: compose?error=Error while uploading file&p=Message Center");
                    exit(); 
                }
            }
            // else{
            //     header("Location: compose.php?error=Error while uploading file, ensure you upload correct format&p=Message Center"."&file=".$file);
            //     exit();
            // }
        // }
        
        $message_subject = mysqli_real_escape_string($connected,$_POST['message_subject']);
        $message_body = mysqli_real_escape_string($connected,$_POST['message_body']);


        $insert_to_admin_inbox = "INSERT INTO user_message (c_id,subject,message,message_attachment) VALUES('$to','$message_subject','$message_body','$filename_new')";
        $insert_to_admin_inbox_query = mysqli_query($connected,$insert_to_admin_inbox);


        if($insert_to_admin_inbox_query){
            $sentSuccess = "Message was sent Successfully !";
            header("Location: compose?sentSuccess=".$sentSuccess."&file=".$file);
            exit();
        }
        else{
            $sentErr = "Unable to send Message !";
            header("Location: compose?sentErr=".$sentErr);
            exit();
        }
    }