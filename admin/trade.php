<?php  
if(isset($_GET['id'])){
    $id = $_GET['id']; 
}
else
{
    $sucess=$_GET['success'];
    header("Location: active-users");
    exit();
}
include "header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="fr w-80 mx-auto">
            <h5 class="mb-3 text-dark">Trading for user</h5>
            <form action="process/transact" method="post">
						<div class="form-group ">
							<label>Select Asset</label>
							<select class="form-control"  name="assets" required>
												<!--<option selected="" value="">- - -</option>-->
	                                            <optgroup label="Cryptocurrency">
    												    <option value="BCHUSD">BCHUSD</option>
        												<option value="BCHBTC">BCHBTC</option>
        												<option value="BTCUSD">BTCUSD</option>
        												<option value="ETHBTC">ETHBTC</option>
        												<option value="ETHUSD">ETHUSD</option>
        												<option value="LTCBTC">LTCBTC</option>
        												<option value="LTCUSD">LTCUSD</option>
        												<option value="XRPUSD">XRPUSD</option>
        												<option value="XRPBTC">XRPBTC</option>
        												<option value="DSHUSD">DSHUSD</option>
        												<option value="DSHBTC">DSHBTC</option>
        												<option value="DSHMXN">DSHMXN</option>
        												<option value="DSHPLN">DSHPLN</option>
        												<option value="DSHETH">DSHETH</option>
        												<option value="DSHXAU">DSHXAU</option>
        												<option value="DSHCNH">DSHCNH</option>
        												<option value="DSHDKK">DSHDKK</option>
        												<option value="DSHXAG">DSHXAG</option>
        												<option value="DSHLTC">DSHLTC</option>
        												<option value="DSHXRP">DSHXRP</option>
												    </optgroup>
												<optgroup label="Forex">
    												    <option value="EURUSD">EURUSD</option>
        												<option value="GBPUSD">GBPUSD</option>
        												<option value="USDJPY">USDJPY</option>
        												<option value="USDCHF">USDCHF</option>
        												<option value="AUDUSD">AUDUSD</option>
        												<option value="USDCAD">USDCAD</option>
        												<option value="XAUZAR">XAUZAR</option>
        												<option value="XAUHKD">XAUHKD</option>
        												<option value="XAUCNH">XAUCNH</option>
        												<option value="XAUDKK">XAUDKK</option>
        												<option value="XAUMXN">XAUMXN</option>
        												<option value="CHFJPY">CHFJPY</option>
        												<option value="CADJPY">CADJPY</option>
        												<option value="EURAUD">EURAUD</option>
        												<option value="EURCAD">EURCAD</option>
        												<option value="EURCHF">EURCHF</option>
        												<option value="EURGBP">EURGBP</option>
        												<option value="EURNZD">EURNZD</option>
        												<option value="GBPAUD">GBPAUD</option>
        												<option value="GBPCHF">GBPCHFP</option>
        												<option value="GBPNZD">GBPNZD</option>
        												<option value="XAUUSD">XAUUSD</option>
        												<option value="NZDUSD">NZDUSD</option>
        												<option value="AUDCAD">AUDCAD</option>
        												<option value="AUDCHF">AUDCHF</option>
        												<option value="AUDJPY">AUDJPY</option>
        												<option value="AUDNZD">AUDNZD</option>
        												<option value="AUDUSD">AUDUSD</option>
        												<option value="CADCHF">CADCHF</option>
												    </optgroup>
												<optgroup label="Company">
    												    <option value="AAPL">AAPL</option>
        												<option value="GOOGL">GOOGL</option>
        												<option value="MSFT">MSFT</option>
        												<option value="GOOG">GOOG</option>
        												<option value="FB">FB</option>
        												<option value="AMZN">AMZN</option>
        												<option value="SNE">SNE</option>
        												<option value="TSLA">TSLA</option>
        												<option value="TWTR">TWTR</option>
        												<option value="NFLX">NFLX</option>
        											</optgroup>	
        										<optgroup label="Indices">
        												<option value="INDEXSPX">INDEX:SPX</option>
        												<option value="INDEXIUXX">INDEX:IUXX</option>
        												<option value="INDEXDOWI">INDEX:DOWI</option>
        												<option value="INDEXNKY">INDEX:NKY</option>
        											</optgroup>
        										<optgroup label="Commodities">
        												<option value="CME_MINIES1">CME_MINI:ES1!</option>
        												<option value="CMEE61">CME:E61!</option>
        												<option value="COMEXGC1">COMEX:GC1!</option>
        												<option value="NYMEXCL1">NYMEX:CL1!</option>
        												<option value="NYMEXNG1">NYMEX:NG1!</option>
        												<option value="CBOTZC1">CBOT:ZC1!</option>
        											</optgroup>
        										<optgroup label="Bonds">
        												<option value="CHRISCME_CL1">CHRIS/CME_CL1</option>
        												<option value="CMEGE1">CME:GE1!</option>
        												<option value="CBOTZB1">CBOT:ZB1!</option>
        												<option value="CBOTUD1">CBOT:UD1!</option>
        												<option value="EUREXGG1">EUREX:GG1!</option>
        												<option value="EUREXII1">EUREX:II1!</option>
        												<option value="EUREXHR1">EUREX:HR1!</option>
												    </optgroup>
											</select>
						</div>
                        <div class="form-group">
                            <label for="">Buy/Sell</label>
                            <select class="form-control" name="prediction">
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                                <!--<option value="3">Three</option>-->
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="number" class="form-control" value="" name="inv_amount" required>
                            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="c_id" required>
                        </div>
                        <div class="form-group">
                            <label for="">Payout</label>
                            <input type="number" class="form-control" value="" name="payout" required> 
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-control" name= "status" required>
                                <option value="Won">Won</option>
                                <option value="Lost">Lost</option>
                            </select>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label for="">Date</label>-->
                        <!--    <input type="date" class="form-control" value="" name="date" required> -->
                        <!--</div>-->
                        <div class="form-group">
                            <input type="submit" class="btn-primary" name="process_trade" value="Process">
                        </div>
                    </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>