<?php


$message=nl2br($_POST['message']);
$email=$_POST['email'];
$subject=$_POST['subject'];

upgrade($email,$subject,$message);



function upgrade($email,$subject,$message)
    {
          require "../Emailing.php";
                        
                        if(Emailing($email,$subject,$message)){
                            
                            header("Location: billingmail?success=Mail Sent");
                            exit();
                        }
                        else{
                            
                             header("Location: billingmail?error=An error Occured");
                            exit();
                        }   
    }

?>