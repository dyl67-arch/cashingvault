<?php include "header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Website Overview:</h1>
        <div class="row"> 
            <button type="button" class="btn btn-sm btn-secondary mb-2 mr-2">Total Invested <span class="badge badge-light"><?php echo "$ ".number_format(($total_invested ) /*2, '.', ','*/); ?></span></button>
            <button type="button" class="btn btn-sm btn-success mb-2 mr-2">Total Profit <span class="badge badge-light"><?php echo "$ ".number_format($total_bonus); ?></span></button>
            <button type="button" class="btn btn-sm btn-warning mb-2 mr-2">Pending Withdrawals <span class="badge badge-light"><?php echo "$ ".number_format($total_pwithdraw); ?></span></button>
            <button type="button" class="btn btn-sm btn-success mb-2 mr-2">Approved Withdrawals <span class="badge badge-light"><?php echo "$ ".number_format($total_awithdraw); ?></span></button>
            <button type="button" class="btn btn-sm btn-primary mb-2 mr-2">Total Registered <span class="badge badge-light"><?php echo $total_registered; ?></span></button>
            <button type="button" class="btn btn-sm btn-info mb-2 mr-2">Total Active <span class="badge badge-light"><?php echo $active_counter; ?></span></button>
            <button type="button" class="btn btn-sm btn-dark mb-2 mr-2">Total Blocked <span class="badge badge-light"><?php echo $blocked_counter; ?></span></button>
            <!--<button type="button" class="btn btn-sm  mb-2 mr-2">Total Upgraded <span class="badge badge-light"><?php //echo $upgraded_counter; ?></span></button>-->
            <button type="button" class="btn btn-sm btn-danger mb-2 mr-2">Total Deleted <span class="badge badge-light"><?php echo $deleted_counter; ?></span></button>
        </div>
        <!--<div id="bitcoin-widget"></div>-->
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 m-0 p-0">
            <div id="top_x_div" style="width: 800px; height: 600px;"></div>
            </div>
   
        </div>
</div>
<!-- /.container-fluid -->
<?php include "footer.php"; ?>