<?php
if(!isset($_SESSION)) session_start();
if (!isset($_SESSION['lang'])) $_SESSION['lang'] = 'en';
$path = 'lang/'.$_SESSION['lang'].'/cry.php';
$lang = require($path);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>blog-single</title>
<?php include("includes/style.php")?>
</head>

<body>
<div class="page-wrapper">
 	
    <?php include("includes/header.php")?>
    <?php include("includes/form.php")?>
    
    <section class="page-title" style="background-image:url(images/main-slider/s2.jpg);">
        <div class="auto-container">
            <h1 class="byAndType">LATEST FROM BLOG</h1>
            <div class="title" style="color:#fff;">2 June 2018</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>LATEST FROM BLOG</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Company Section-->
    <section class="company-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            

                 <div class="content-column col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-column">                    	
                       
                        <div class="text" style="text-align:justify">
                            <p> 
                              <div class="smallText">
                              Welcome to CryptoTradex – Your Trusted Expert in Cryptocurrency CFD.
                              CryptoTradex is one of the world's leading cryptocurrency CFD service providers specializing in margin trading facility. With our proprietary Direct Market Access (DMA) technology and wide connections to global liquidity providers, orders are executed at high speeds and at highly competitive prices.
                              </div> 
                              <br> <br>                             
                              <div class="bigState"></div>
                              <br>
                            <ol class="bloglist">
                              <!-- <li>
                                 1) Date and time shown on the CryptoTradex platform is based on Coordinated Universal Time (UTC +0). As such, please be aware of the time difference between our platform and your location.
                              </li>
                              <li>
                                 2) Daily system maintenance will take place during which new trade orders cannot be placed. Kindly monitor your trades and manage risk accordingly. The system maintenance schedule is as attached to this email.
                              </li>
                              <li>
                                 3) If you wish to make a deposit or withdrawal request, kindly reach out to our Customer Service officers via various messaging platforms or email. Please have your Personal Bank Account details ready to speed up the process. It typically takes 1 working day for deposits to be processed while withdrawal requests typically take 3-7 working days to complete. Time required for withdrawal is highly dependent on the bank’s efficiency. Due to financial regulations in various jurisdictions, the transfer of funds between CryptoTradex accounts is not possible.
                              </li>
                              <li>
                                4) CryptoTradex CFDs are leveraged products that require a minimum balance to be present in the CryptoTradex trading account. This minimum balance is also known as the “maintenance margin” or “margin requirement”. If account balance is below the maintenance margin, the trader must increase his/her account balance above the maintenance margin before a stipulated time. This can be achieved by closing open positions, such that the account’s cash equity is above the maintenance margin.<br>
                                In the event that cash equity is below the maintenance margin, CryptoTradex may act in accordance to its Terms of Service, automatically assisting the trader in closing the outstanding trades (wholly or partially) without prior notice. CryptoTradex will notify traders via email. Email updates include notices on insufficient cash equity and updates on assisted trade closures.
                              </li>
                              <li>
                                5) Our Customer Service officers are available in both English and Mandarin from UTC 01:00 to 10:00. Beyond this timing, kindly email us at customerservice1@cryptotradex.com and we will attend to you as soon as possible. For other contact details, please refer to the file attached.
                              </li>
                              <li>
                                6) Please keep your account password and registered email address safe. Do also add customerservice1@cryptotradex.com to your email address book to ensure that you can receive email updates from CryptoTradex.<br>
                                If you have questions about logging in or other platform-related queries, feel free to contact our Customer Service officers. We are more than happy to assist you.
Thank you for trading with CryptoTradex.
                              </li> -->


                            </ol>


                            </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!--End Company Section-->
    
    
    <?php include("includes/footer.php")?>

</div>
<!--End pagewrapper-->

<?php include("includes/footer_extras.php")?>

</body>
<script>
  $(function(){
    var hash = window.location.hash;
    var number=hash.replace(/[^0-9]/ig,"");//截取数字
    console.log('number', number);

    var lang = "<?php echo $_SESSION['lang'] ?>";

    var url = './js/blog'+lang+'.json';
    $.ajax({
        url: url,
        type: "get",
        success: function(data) {
            console.log('test', data)
              $.each(data, function(index, obj) {
                
                    if(number == index){
                    
                        $('.page-title .title').html(obj.data);
                        $('.inner-column .smallText').html(obj.smallText);
                        $('.bigState').html(obj.bigState);

                        $.each(obj.bigText, function(index2, obj2) {
                            console.log('index2', index2);
                            console.log('obj2', obj2);
                            $('.bloglist').append($('<li>'+obj2+'</li>'));

                    })
                }


              });



        },
        error: function(msg) {
            console.log('json请求不成功！！');

        }
    });
});
</script>
</html>