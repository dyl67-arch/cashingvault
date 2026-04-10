<?php include_once "config/dbconnection.php";
  if(($_SESSION['admin_username'] != null) && ($_SESSION['admin_password'] != null ) ){
      $admin_password = $_SESSION['admin_password'];
      $admin_username = $_SESSION['admin_username'];
  
      $sql = "SELECT * FROM admin_account WHERE username='$admin_username' AND pass='$admin_password' ";
      $query = mysqli_query($connected, $sql);
  

     

      while($row = mysqli_fetch_assoc($query)){
        $admin_username = $row['username'];
        $admin_password = $row['pass'];
      } 
      
      //counter Variables declaration.
      $active_counter = 0;
      $blocked_counter = 0;
      $deleted_counter = 0;
      $total_invested = 0;
      $total_pwithdraw = 0;
      $total_awithdraw = 0;
      $total_registered=0;
      $total_withdrawn = 0;
      $total_bonus = 0;
      $total_profit = 0;
      $upgraded_counter = 0;


      $tinvest = "SELECT * FROM users_account WHERE deleted=0 ";
      $query_tinvest = mysqli_query($connected, $tinvest);
      while($row = mysqli_fetch_assoc($query_tinvest)){
        $total_registered++;
    }
      $tinvest = "SELECT amount FROM tbl_trades WHERE deleted=0 ";
      $query_tinvest = mysqli_query($connected, $tinvest);
      while($row = mysqli_fetch_assoc($query_tinvest)){
        $total_invested+=$row['amount'];
    }

    $twithdraw = "SELECT amount FROM bank_withdraw WHERE deleted=0 and status='pending' ";
    $query_twithdraw = mysqli_query($connected, $twithdraw);
    while($row = mysqli_fetch_assoc($query_twithdraw)){
      $total_pwithdraw +=$row['amount'];
  }
  
  $tinvest = "SELECT amount FROM bitcoin_withdraw WHERE deleted=0 and status='pending' ";
  $query_tinvest = mysqli_query($connected, $tinvest);
  while($row = mysqli_fetch_assoc($query_tinvest)){
    $total_pwithdraw +=$row['amount'];
}

$twithdraw = "SELECT amount FROM bank_withdraw WHERE deleted=0 and status='approved' ";
$query_twithdraw = mysqli_query($connected, $twithdraw);
while($row = mysqli_fetch_assoc($query_twithdraw)){
  $total_awithdraw +=$row['amount'];
}

$tinvest = "SELECT amount FROM bitcoin_withdraw WHERE deleted=0 and status='approved' ";
$query_tinvest = mysqli_query($connected, $tinvest);
while($row = mysqli_fetch_assoc($query_tinvest)){
$total_awithdraw +=$row['amount'];
}
$tinvest = "SELECT amount FROM tbl_trades WHERE deleted=0 AND status='approved' ";
$query_tinvest = mysqli_query($connected, $tinvest);
while($row = mysqli_fetch_assoc($query_tinvest)){
  $total_profit+=$row['amount'];
}

      $sql_message = "SELECT * FROM admin_message WHERE seen='0'";
      $query_message = mysqli_query($connected,$sql_message);
      
      $query_message_new = mysqli_query($connected,$sql_message);
      $message_counter = 0;
      
      while($message_row = mysqli_fetch_assoc($query_message)){
          $message_counter++;
      }
      
      $sql_active = "SELECT * FROM users_account";
      $query_sql_active = mysqli_query($connected,$sql_active);
      $i = 0;
      while($result_active = mysqli_fetch_assoc($query_sql_active)){
          $active_counter++;
      }
    

      $sql = "SELECT * FROM users_account";
      $query = mysqli_query($connected, $sql);   
      if(isset($_POST['operation_btn'])){
          $operation = $_POST['operation'];
          $user_identity = $_POST['user_identity'];
          if($operation == "credit"){
              header("Location: credit-user?id=".$user_identity);
              exit();
          }
          elseif($operation == "reset_balance"){
              header("Location: edit-balance?id=".$user_identity);
              exit();
          }
          elseif($operation == "profit"){
              header("Location: profit?id=".$user_identity);
              exit();
          }
          elseif($operation == "reset_profit"){
              header("Location: reset-profit?id=".$user_identity);
              exit();
          }
          elseif($operation == "invested"){
              header("Location: invested?id=".$user_identity);
              exit();
          }
          elseif($operation == "upgrade"){
              header("Location: upgrade?id=".$user_identity);
              exit();
          }
          elseif($operation == "alert_notification"){
              header("Location: alert?id=".$user_identity);
              exit();
          }
          elseif($operation == "reset_invested"){
              header("Location: reset-invested?id=".$user_identity);
              exit();
          }
           elseif($operation == "stake"){ 
            $_SESSION['s_id'] = $user_identity;
              header("Location: cstake?id=".$user_identity);
              exit();
          }
          elseif($operation == "view_profile"){
              header("Location: user-profile?id=".$user_identity);
              exit();
          }
        //   elseif($operation == "trade"){
        //       header("Location: trade.php?id=".$user_identity);
        //       exit();
        //   }
          elseif($operation == 'trade'){
                header("Location: trade?id=".$user_identity);
                exit();
            }
            elseif($operation == 'trade_percentage'){
                header("Location: edit-tradepercent?id=".$user_identity);
                exit();
            }
            elseif($operation == 'edit_trade'){
                header("Location: user-trades?id=".$user_identity);
                exit();
            }
          elseif($operation == "block"){
              header("Location: block-user?id=".$user_identity);
              exit();    
          }
          elseif($operation == "delete"){
              header("Location: delete-user?id=".$user_identity);
              exit();    
          }
          elseif($operation == "referral_bonus"){
              header("Location: set-referral-bonus?id=".$user_identity);
              exit();    
          }
          elseif($operation == "reset_referral"){
              header("Location: reset-referral-bonus?id=".$user_identity);
              exit();    
          }
          elseif($operation == 'edit_auto_trade'){
                header("Location: edit-auto-trade?id=".$user_identity);
                exit();
            }
            elseif($operation == 'edit_auto_trade'){
                header("Location: edit-auto-trade?id=".$user_identity);
                exit();
            }
            elseif($operation == 'start_auto_trade'){
                header("Location: start-auto-trade?id=".$user_identity);
                exit();
            }
            elseif($operation == 'stop_auto_trade'){
                header("Location: stop-auto-trade?id=".$user_identity);
                exit();
            }
     
      }
 
    
    function shorten($string,$length){
        if(strlen($string) <= $length){
            echo $string;
        }else{
            $output = substr($string,0,$length). '...';
            echo $output;
        }
    }
    
  }
  else {
        header("Location: login");
        exit();
  } 
?>
<?php 
  if(isset($_GET['pagename'])){
    $pagename = $_GET['pagename'];
  }
  else{
    $pagename = "Admin Dashboard";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="alfacoins-site-verification" content="5e60b9ed6337c5e60b9ed633b15e60b9ed633e7_ALFAcoins">
  <title>Imacadworldwide - <?php echo $pagename; ?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" href="../primefx/assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/xtraclass.css" rel="stylesheet">
  <link href="css/lightbox.min.css" rel="stylesheet">
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ['Total Investment',<?php echo $total_invested; ?>],
          ['Total Pending Withdraw',<?php echo $total_pwithdraw; ?>],
          ['Total Approved Withdraw',<?php echo $total_awithdraw; ?>],
          ['Total Profit',<?php echo $total_profit; ?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'imacadworldwide',
            subtitle: 'Overview' },
          axes: {
            x: {
              0: { side: '', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

   
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">imacadworldwide</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accounts" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accounts</span>
        </a>
        <div id="accounts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="index">Dashboard</a>
            <!--<a class="collapse-item" href="online-user.php">Online Users</a>-->
            <!--<a class="collapse-item" href="unactivated-accounts.php">Unactivated Users</a>-->
            <a class="collapse-item" href="active-users">Active Users</a>
            <a class="collapse-item" href="stack">Active Stake</a>
            <a class="collapse-item" href="withdraw">Withdraw Keys</a>
            <a class="collapse-item" href="blocked-users">Blocked Users</a>
            <a class="collapse-item" href="deleted-users">Deleted Users</a>
            <a class="collapse-item" href="unverified">Accounts Verification</a>
            <a class="collapse-item" href="trades">Trades</a>
            <!--<a class="collapse-item" href="add-wallet.php">Add Wallet</a>-->
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#money" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <i class="fas fa-wallet"></i>
          <span>Deposit</span>
        </a>
        <div id="money" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="deposit">Make Deposit</a>
            <a class="collapse-item" href="unpaid-invoices">Pending Deposit</a>
            <a class="collapse-item" href="paid-invoices?">Active Deposit</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#message" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <i class="fas fa-sms"></i>
          <span>Message Center</span>
        </a>
         <div id="message" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
             <a class="collapse-item" href="billingmail">Billing Mail</a>
            <a class="collapse-item" href="compose?pagename=Compose">Compose</a>
            <a class="collapse-item" href="inbox?pagename=Inbox">Inbox <span class="badge badge-danger float-right"><?php echo $message_counter; ?></span></a>
            <a class="collapse-item" href="sent-message?pagename=Sent Messages">Sent</a>
            
          </div>
      </li>
      
      <li class="nav-item">
        <!--<a class="nav-link collapsed" href="withdrawal-request.php" data-toggle="collapse" data-target="#platfors" aria-expanded="true" aria-controls="collapseTwo">-->
        <a class="nav-link collapsed" href="withdrawal-request" >
           
          <i class="far fa-clone"></i>
          <span>Withdrawal Request</span>
        </a>
        <!--<div id="platfors" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
        <!--  <div class="bg-white py-2 collapse-inner rounded">-->
             <!--<h6 class="collapse-header">Custom Components:</h6> -->
        <!--    <a class="collapse-item" href="withdrawal-request.php">Withdrawal Request</a>-->
        <!--    <a class="collapse-item" href="approved-withdrawal.php">Approved Withdrawals</a>-->
        <!--    <a class="collapse-item" href="declined-withdrawal.php">Declined Withdrawals</a>-->
            
        <!--  </div>-->
        <!--</div>-->
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <i class="far fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="profile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <!--<a class="collapse-item" href="user-profile.php">User Profile</a>-->
            <!-- <a class="collapse-item" href="manage-subscription.php">Manage Subscriptions</a>-->
            <a class="collapse-item" href="service_details">Service Details</a>
            <a class="collapse-item" href="change-password">Change my Password</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
        
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

     
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white1 topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">
                  <?php if(mysqli_num_rows($query_message) < 1){ echo "";} else { echo $message_counter;} ?>
                </span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  New Messages
                </h6>
                <?php while($message_row_new = mysqli_fetch_assoc($query_message_new)) : ?>
                  <a class="dropdown-item d-flex align-items-center" href="read-message?use_id=<?php echo $message_row_new['sender_id'];?>&message_id=<?php echo $message_row_new['message_id']; ?>">
                    <!-- <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                      <div class="status-indicator bg-success"></div>
                    </div> -->
                    <div class="font-weight-bold">
                      <div class="text-truncate"><?php echo $message_row_new['subject']; ?></div>
                      <div class="small text-gray-500"><?php echo shorten($message_row_new['message'],15); ?> <?php echo $message_row_new['date']; ?></div>
                    </div>
                  </a>
                <?php endwhile; ?>
                <a class="dropdown-item text-center small text-gray-500" href="inbox?pagename=Inbox">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-200 small text-uppercase"><?php echo $_SESSION['admin_username']; ?></span>
                
                  <img class="img-profile rounded-circle" src="img/male-avatar.png">
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                <a class="dropdown-item" href="change-password">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <!--<a class="dropdown-item" href="#">-->
                <!--  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Settings-->
                <!--</a>-->
                <!--<a class="dropdown-item" href="#">-->
                <!--  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Activity Log-->
                <!--</a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <?php if(isset($_GET['success'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['success']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['error']; ?>!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>