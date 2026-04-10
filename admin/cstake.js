$(document).ready(function(){
            
            
            $('.menu-icon').click(function(){
                $('.nav-menu').toggle('fast');
                $("i", this).toggleClass("fa-sliders-h fa-times");
            });
            $('.upc').click(function(){
                $('.upcoming-toggler').toggle('fast');
                $("i", this).toggleClass("fa-angle-down fa-angle-up");
            });
            
 
                
            
            $('.get_percent_btn').click(function(){
               
                var radiovalue = $(this).html();
                var myID = $(this).attr('for');
                var myID_len = myID.length;
                var num = 1;
                var otpID = 'otp';
                var otp_perc = 'otp_perc';
                var otp_percent = 0;
                if(myID_len > 12){
                    num = myID.slice(-2);
                    otpID += num;
                    otp_perc += num;
                    otp_percent = document.getElementById(otp_perc).value;
                    
                }
                else{
                   num = myID.slice(-1);
                   otpID += num;
                   otp_perc += num;
                    otp_percent = document.getElementById(otp_perc).value;
               
               }
                 
                var new_otpID = "#"+ otpID;
                //alert(radiovalue+myID+num+otpID+otp_percent+new_otpID);
               if(otpID=="otp0"){
                    myamount=document.getElementById("amount0").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=90.89*(radiovalue/100);
                      $(new_otpID).text($value);
                    document.getElementById("link0").href="processstack?value=ACA&days="+radiovalue+"&amount="+myamount+"&per="+$value
                 
                }
                 if(otpID=="otp1"){
                       myamount=document.getElementById("amount1").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=50.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link1").href="processstack?value=ADA&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp2"){
                       myamount=document.getElementById("amount2").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link2").href="processstack?value=ALPHA&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp3"){
                       myamount=document.getElementById("amount3").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link3").href="processstack?value=AVAX&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp4"){
                    myamount=document.getElementById("amount4").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=66.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link4").href="processstack?value=AXS&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp5"){
                       myamount=document.getElementById("amount5").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link5").href="processstack?value=BNX&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp6"){
                       myamount=document.getElementById("amount6").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link6").href="processstack?value=BTC&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp7"){
                    myamount=document.getElementById("amount7").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link7").href="processstack?value=CAKE&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp8"){
                    myamount=document.getElementById("amount8").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link8").href="processstack?value=CALL&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp9"){
                    myamount=document.getElementById("amount9").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=63.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link9").href="processstack?value=CELO&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
               
                if(otpID=="otp10"){
                    myamount=document.getElementById("amount10").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link10").href="processstack?value=CLU&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp11"){
                    myamount=document.getElementById("amount11").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=50.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link11").href="processstack?value=COTI&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp12"){
                    myamount=document.getElementById("amount12").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link12").href="processstack?value=CTK&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp13"){
                    myamount=document.getElementById("amount13").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link13").href="processstack?value=DAR&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp14"){
                       myamount=document.getElementById("amount14").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=66.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link14").href="processstack?value=DOCK&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp15"){
                    myamount=document.getElementById("amount15").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link15").href="processstack?value=DOT&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp16"){
                    myamount=document.getElementById("amount16").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link16").href="processstack?value=EGLD&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp17"){
                       myamount=document.getElementById("amount17").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link17").href="processstack?value=ERN&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp18"){
                    myamount=document.getElementById("amount18").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link18").href="processstack?value=EZ&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp19"){
                    myamount=document.getElementById("amount19").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=63.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link19").href="processstack?value=FIL&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp20"){
                       myamount=document.getElementById("amount20").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link20").href="processstack?value=ICP&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp21"){
                    myamount=document.getElementById("amount21").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=50.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link21").href="processstack?value=LIT&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp22"){
                    myamount=document.getElementById("amount22").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link22").href="processstack?value=LUNA&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp23"){
                    myamount=document.getElementById("amount23").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link23").href="processstack?value=NEAR&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp24"){
                    myamount=document.getElementById("amount24").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=66.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link24").href="processstack?value=PNT&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp25"){
                    myamount=document.getElementById("amount25").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link25").href="processstack?value=PORTO&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp26"){
                    myamount=document.getElementById("amount26").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link26").href="processstack?value=RAY&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp27"){
                    myamount=document.getElementById("amount27").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link27").href="processstack?value=SAND&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp28"){
                    myamount=document.getElementById("amount28").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link28").href="processstack?value=SOL&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp29"){
                    myamount=document.getElementById("amount29").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=63.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link29").href="processstack?value=STX&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp30"){
                    myamount=document.getElementById("amount30").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                  
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                      document.getElementById("link30").href="processstack?value=TVK&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp31"){
                    myamount=document.getElementById("amount31").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                 
                    $value=50.89*(radiovalue/100);
                      $(new_otpID).text($value);
                       document.getElementById("link31").href="processstack?value=VGX&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp32"){
                    myamount=document.getElementById("amount4").value;
                      if(myamount<=0)
                      {
                          alert("Enter Staking Amount");
                          return;
                      }
                
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                        document.getElementById("link32").href="processstack?value=ZIL&days="+radiovalue+"&amount="+myamount+"&per="+$value;
                }
                 if(otpID=="otp33"){
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp34"){
                    $value=66.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp35"){
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp36"){
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp37"){
                    $value=60.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp38"){
                    $value=40.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                 if(otpID=="otp39"){
                    $value=63.89*(radiovalue/100);
                      $(new_otpID).text($value);
                }
                
                 
                
            });
            if ($(window).width() < 790) {
                $("#nav-m").removeClass("justify-content-end");
                $(".nmn").removeClass("container-fluid");
                $(".drp").removeClass("dropdown-menu");
                $(".bannerr").removeClass("container");
                $(".pr-s").toggleClass("order-last");
                $(".pl-s").toggleClass("order-first");
                $("#nav-m").addClass("flex-column");
                // $("#nav-m").addClass("hide-mob");
                $(document).on("click", ".mobile-toggle", function(event){
                    event.preventDefault();
                    $(this).closest('.mobile-toggle').next('.drp').toggle();
                }); 
            }
            
            // if($('input[name="stake_percent1"]').is(':checked')){
            //     alert('1 is checked');
            // }
            
        });
