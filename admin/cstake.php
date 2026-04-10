<?php include "header.php"; 
if(isset($_GET['id']))
{
 $uid= $_GET['id'];
 $sql = "SELECT * FROM users_account WHERE id='$uid'";
    $query = mysqli_query($connected,$sql);

    while($row = mysqli_fetch_assoc($query)){
        $prevbalance = $row['balance'];
        $email = $row['email'];
        $firstname = $row['firstname'];
    }
    
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <h1 class="h3 mb-4 text-gray-800">You are staking for <?php echo $firstname;?></h1>
    
    
    
        <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Token</th>
                <th>Est. APY</th>
                <th>Duration (days)</th> 
                <th>Amount</th>
                <!-- <th></th> -->
            </tr>
        </thead>
        <tbody><style>
            button, input {
    display: none;
    overflow: visible;
}
      label{
    font-size:13px !important;
}
.crypto-icon {
    height: 30px;
    width: 30px;
}
        </style>
                        <tr>
                <td>
                    <img src="../accounts/libs/img/aca.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">aca</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp0">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_10" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_10">15</label>
                            <input type="hidden" id="otp_perc0" value="15.8" class="form-control">
                            <input type="hidden" name="currency" value="aca" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_20" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_20">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_30" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_30">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount0" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link0" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/ada.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">ada</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp1">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_11" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_11">15</label>
                            <input type="hidden" id="otp_perc1" value="8.21" class="form-control">
                            <input type="hidden" name="currency" value="ada" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_21" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_21">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_31" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_31">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount1" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link1" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/alpha.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">alpha</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp2">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_12" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_12">15</label>
                            <input type="hidden" id="otp_perc2" value="19.6" class="form-control">
                            <input type="hidden" name="currency" value="alpha" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_22" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_22">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_32" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_32">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount2" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link2" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/avax.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">avax</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp3">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_13" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_13">15</label>
                            <input type="hidden" id="otp_perc3" value="11.7" class="form-control">
                            <input type="hidden" name="currency" value="avax" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_23" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_23">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_33" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_33">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount3" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link3" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/axs.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">axs</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp4">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_14" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_14">15</label>
                            <input type="hidden" id="otp_perc4" value="11.9" class="form-control">
                            <input type="hidden" name="currency" value="axs" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_24" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_24">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_34" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_34">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount4" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link4" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/bnx.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">bnx</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp5">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_15" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_15">15</label>
                            <input type="hidden" id="otp_perc5" value="10.7" class="form-control">
                            <input type="hidden" name="currency" value="bnx" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_25" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_25">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_35" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_35">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount5" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link5" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/btc.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">btc</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp6">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_16" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_16">15</label>
                            <input type="hidden" id="otp_perc6" value="15" class="form-control">
                            <input type="hidden" name="currency" value="btc" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_26" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_26">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_36" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_36">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount6" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link6" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/cake.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">cake</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp7">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_17" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_17">15</label>
                            <input type="hidden" id="otp_perc7" value="9.3" class="form-control">
                            <input type="hidden" name="currency" value="cake" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_27" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_27">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_37" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_37">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount7" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link7" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/call.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">call</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp8">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_18" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_18">15</label>
                            <input type="hidden" id="otp_perc8" value="18.7" class="form-control">
                            <input type="hidden" name="currency" value="call" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_28" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_28">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_38" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_38">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount8" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link8" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/celo.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">celo</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp9">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_19" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_19">15</label>
                            <input type="hidden" id="otp_perc9" value="8.21" class="form-control">
                            <input type="hidden" name="currency" value="celo" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_29" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_29">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_39" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_39">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount9" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link9" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/clu.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">clu</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp10">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_110" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_110">15</label>
                            <input type="hidden" id="otp_perc10" value="10.9" class="form-control">
                            <input type="hidden" name="currency" value="clu" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_210" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_210">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_310" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_310">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount10" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link10" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/coti.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">coti</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp11">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_111" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_111">15</label>
                            <input type="hidden" id="otp_perc11" value="9.25" class="form-control">
                            <input type="hidden" name="currency" value="coti" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_211" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_211">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_311" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_311">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                   
                    <td>
                        <input type="number" id="amount11" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link11" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/ctk.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">ctk</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp12">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_112" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_112">15</label>
                            <input type="hidden" id="otp_perc12" value="7.37" class="form-control">
                            <input type="hidden" name="currency" value="ctk" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_212" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_212">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_312" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_312">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount12" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link12" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/dar.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">dar</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp13">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_113" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_113">15</label>
                            <input type="hidden" id="otp_perc13" value="10.41" class="form-control">
                            <input type="hidden" name="currency" value="dar" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_213" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_213">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_313" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_313">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount13" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link13" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/dock.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">dock</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp14">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_114" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_114">15</label>
                            <input type="hidden" id="otp_perc14" value="9.23" class="form-control">
                            <input type="hidden" name="currency" value="dock" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_214" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_214">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_314" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_314">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount14" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link14" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/dot.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">dot</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp15">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_115" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_115">15</label>
                            <input type="hidden" id="otp_perc15" value="7.8" class="form-control">
                            <input type="hidden" name="currency" value="dot" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_215" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_215">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_315" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_315">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount15" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link15" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/egld.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">egld</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp16">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_116" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_116">15</label>
                            <input type="hidden" id="otp_perc16" value="15.6" class="form-control">
                            <input type="hidden" name="currency" value="egld" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_216" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_216">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_316" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_316">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount16" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link16" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/ern.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">ern</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp17">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_117" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_117">15</label>
                            <input type="hidden" id="otp_perc17" value="16" class="form-control">
                            <input type="hidden" name="currency" value="ern" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_217" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_217">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_317" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_317">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount17" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link17" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/ez.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">ez</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp18">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_118" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_118">15</label>
                            <input type="hidden" id="otp_perc18" value="13.2" class="form-control">
                            <input type="hidden" name="currency" value="ez" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_218" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_218">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_318" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_318">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount18" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link18" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/fil.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">fil</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp19">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_119" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_119">15</label>
                            <input type="hidden" id="otp_perc19" value="9.27" class="form-control">
                            <input type="hidden" name="currency" value="fil" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_219" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_219">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_319" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_319">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount19" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link19" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/icp.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">icp</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp20">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_120" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_120">15</label>
                            <input type="hidden" id="otp_perc20" value="7.37" class="form-control">
                            <input type="hidden" name="currency" value="icp" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_220" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_220">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_320" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_320">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount20" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link20" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                   
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/lit.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">lit</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp21">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_121" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_121">15</label>
                            <input type="hidden" id="otp_perc21" value="8" class="form-control">
                            <input type="hidden" name="currency" value="lit" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_221" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_221">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_321" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_321">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount21" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link21" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/luna.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">luna</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp22">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_122" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_122">15</label>
                            <input type="hidden" id="otp_perc22" value="17.8" class="form-control">
                            <input type="hidden" name="currency" value="luna" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_222" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_222">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_322" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_322">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount22" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link22" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/near.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">near</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp23">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_123" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_123">15</label>
                            <input type="hidden" id="otp_perc23" value="13.2" class="form-control">
                            <input type="hidden" name="currency" value="near" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_223" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_223">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_323" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_323">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount23" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link23" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/pnt.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">pnt</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp24">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_124" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_124">15</label>
                            <input type="hidden" id="otp_perc24" value="13" class="form-control">
                            <input type="hidden" name="currency" value="pnt" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_224" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_224">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_324" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_324">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount24" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link24" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/porto.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">porto</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp25">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_125" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_125">15</label>
                            <input type="hidden" id="otp_perc25" value="9.18" class="form-control">
                            <input type="hidden" name="currency" value="porto" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_225" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_225">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_325" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_325">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td> 
                    <td>
                        <input type="number" id="amount25" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link25" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/ray.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">ray</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp26">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_126" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_126">15</label>
                            <input type="hidden" id="otp_perc26" value="10.8" class="form-control">
                            <input type="hidden" name="currency" value="ray" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_226" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_226">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_326" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_326">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount26" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link26" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/sand.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">sand</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp27">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_127" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_127">15</label>
                            <input type="hidden" id="otp_perc27" value="19" class="form-control">
                            <input type="hidden" name="currency" value="sand" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_227" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_227">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_327" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_327">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount27" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link27" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/sol.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">sol</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp28">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_128" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_128">15</label>
                            <input type="hidden" id="otp_perc28" value="8.21" class="form-control">
                            <input type="hidden" name="currency" value="sol" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_228" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_228">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_328" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_328">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount28" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link28" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/stx.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">stx</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp29">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_129" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_129">15</label>
                            <input type="hidden" id="otp_perc29" value="15" class="form-control">
                            <input type="hidden" name="currency" value="stx" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_229" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_229">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_329" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_329">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount29" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link29" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/tvk.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">tvk</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp30">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_130" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_130">15</label>
                            <input type="hidden" id="otp_perc30" value="10.41" class="form-control">
                            <input type="hidden" name="currency" value="tvk" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_230" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_230">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_330" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_330">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amoun30" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link30" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/vgx.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">vgx</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp31">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_131" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_131">15</label>
                            <input type="hidden" id="otp_perc31" value="19" class="form-control">
                            <input type="hidden" name="currency" value="vgx" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_231" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_231">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_331" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_331">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount31" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link31" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    <tr>
                <td>
                    <img src="../accounts/libs/img/zil.svg" alt="" class="crypto-icon">&nbsp;&nbsp;<span class="text-uppercase">zil</span>
                </td>
                <form action="libs/process/transact?client_id=18" class="form-inline" method="post"></form>
                <td>
                    <span class="text-success">
                        <span class="" id="otp32">0</span>%
                    </span>
                </td>
                
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="15" name="stake_percent" id="stake_btn_132" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_132">15</label>
                            <input type="hidden" id="otp_perc32" value="8.9" class="form-control">
                            <input type="hidden" name="currency" value="zil" class="form-control">
                            
                            
                            <input type="radio" class="btn-check" value="30" name="stake_percent" id="stake_btn_232" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_232">30</label>

                            <input type="radio" class="btn-check" value="60" name="stake_percent" id="stake_btn_332" autocomplete="off">
                            <label class="btn btn-outline-primary get_percent_btn" for="stake_btn_332">60</label>
                            <input type="hidden" name="stake_pent" value="">
                            <!--<div class="" id="new_percent"></div>-->

                        </div>
                    </td>
                    <td>
                        <input type="number" id="amount32" placeholder="0.00" class="form-control" required="">
                    </td>
                    <td>
                        <a  href="processstack?value=0&=0&amount=0&per=0" id="link32" name="stake_btn" value="Stake" class="btn btn-sm btn-primary text-uppercase">STAKE</a>
                    </td>
                
            </tr>
                                    
        </tbody>
    </table>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>
<!-- /.container-fluid -->
<?php include "footer.php"; ?>
<script src="cstake.js"></script>