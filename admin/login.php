<?php include 'config/dbconnection.php'; 
error_reporting(E_ALL^E_NOTICE);
   if(isset($_POST['submit'])){
     $admin_username = mysqli_real_escape_string($connected,$_POST['username']);
     $admin_password = mysqli_real_escape_string($connected,$_POST['password']);
     if($admin_username == " " || $admin_password == " "){
       $adminLoginMsg = "Please Ensure that all fields are Entered"; 
     }
     else {
       $sql = "SELECT * FROM admin_account WHERE username='$admin_username' AND pass='$admin_password' ";
       $result = mysqli_query($connected,$sql);
       if(mysqli_num_rows($result) > 0){
         $_SESSION['admin_username'] = $admin_username;
         $_SESSION['admin_password'] = $admin_password;
         header("Location: index");
         exit();
         }
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>imacadworldwide Admin Login</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="icon" href="../primefx/assets/img/favicon.png" type="image/x-icon">
    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            width:100%;
            height:100%;
            /*background: url(img/loginbackground.jpg);*/
           /*background-color:black;*/
             background-image:url(https://images.unsplash.com/photo-1511140973288-19bf21d7e771?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-size:cover;
            color:#fff;
            background-attachment:fixed;
        }
        .container .row .col{
            min-height:50vh;
            width:100%;
            margin:auto;
        }
    </style>
</head>
<body>
<div class="container">
<h2 class="text-center pt-5 text-light">ADMIN LOGIN</h2>
    <div class="row pt-5">
        <div class="col d-flex align-self-center justify-content-center text-white">
      
          <form method="post" action="">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username"  name="username" placeholder="Enter Username">
                <small id="username" class="form-text text-muted">Please enter your username</small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button type="submit" name="submit" class="btn btn-md btn-success">Submit</button>
          </form>    
        </div>
    </div>
</div>