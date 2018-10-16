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
        <title>FAQ : CryptoTradex</title>
        <?php include("includes/style.php")?>
        <style>
            a:link{color:#febe28;} 
            a:visited{color:#febe28;} 
            a:hover{color:rgba(254,190,40,0.8);} 
            a:active{color:#febe28;}
            #accordion ol{padding-left:10px;}
            #accordion .panel{
                margin-bottom:10px;
                border:none;
                box-shadow:none;
                background: transparent;
            }
            #accordion .panel>a{
                font-size:16px;
            }
            #accordion .panel h4{
                font-size:16px;
                cursor: pointer;
                color:#1ba9d3;
                
            }
            #accordion .panel h4:hover{
            
                opacity:0.8
                
            }
        </style>
    </head>

    <body>
        <div class="page-wrapper">

            <?php include("includes/header.php")?>
            <?php include("includes/form.php")?>

            <section class="page-title" style="background-image:url(images/main-slider/s2.jpg);">
                <div class="auto-container">
                    <h1>FAQ</h1>
                    <!-- <div class="title" style="color:#fff;">The CryptoTradex platform uses a professional cryptocurrency trading engine</div> -->
                </div>
                <!--Page Info-->
                <div class="page-info">
                    <div class="auto-container">
                        <div class="inner-container">
                            <ul class="bread-crumb">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>FAQ</li>
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


                        <div class="content-column col-md-12 col-sm-12 col-xs-12" style="background:#ddd">
                            <div class="inner-column">

                                <div class="text" style="text-align:justify">
                                    <ol id="accordion">
                                        <li class="panel">
                                            <a  role="button" data-toggle="collapse" href="#faq1" data-parent="#accordion">1.Getting started</a>
                                            <ol class="collapse" id="faq1">
                                            <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq1a" data-parent=".panel">1.1.What is CryptoTradex?</h4>
                                                    <div class="collapse" id="faq1a">
                                                    CryptoTradex is one of the world’s most sophisticated cryptocurrency trading platform, allowing clients to trade CFDs on margin round the clock, with multi-language customer service and lightning-fast execution, delivering unparalleled customer satisfaction. <br>
                                                    Our direct access to various liquidity providers, such as global banks, financial institutions and other cryptocurrency exchanges, ensures that client orders get matched in the shortest possible time at the desired prices.
                                                    </div>
                                               </li><br>
                                                <li>
                                                     <h4 data-toggle="collapse"  href="#faq1b"  data-parent=".panel">1.2.Where is CryptoTradex located?</h4> 
                                                    <div class="collapse" id="faq1b">
                                                    Our headquarters is based in Zurich, Switzerland.
                                                    </div>
                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1c"  data-parent=".panel">1.3.What is a CFD?</h4>
                                                    <div class="collapse" id="faq1c">
                                                    A contract for difference (CFD) is a contract allowing for the speculation of future price movements of an underlying asset. 
                                                    <br>
                                                    Taking the buying and selling of BTC as an example
                                                    <br>
                                                    Buy (Long) a CFD to profit when price rises in the future.
                                                    <br>
                                                    <img class="center-block img-responsive" src="./images/faq1.png" alt="">
                                                    <br>
                                                    Sell (Short) a CFD to profit when price falls in the future.
                                                    <br>
                                                    <img class="center-block img-responsive" src="./images/faq2.png" alt="">
                                                    </div>
                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1d"  data-parent=".panel">
                                                    1.4.How old do I need to be able to trade?
                                                    </h4>
                                                    <div class="collapse" id="faq1d">
                                                
                                                    You can trade on our platform as long as you have a valid government-issued ID. This is needed to unlock the full functionality of your account.
                                                    </div>
                                                    </li>
                                                    <br>
                                                    <li>
                                                    <h4 data-toggle="collapse"  href="#faq15"  data-parent=".panel"> 1.5.How can I short cryptocurrencies?</h4>
                                                    <div class="collapse" id="faq15">
                                                    In traditional trading, there is no way to short cryptocurrencies if you expect prices to fall. However, at CryptoTradex, we bring the opportunity to our clients via CFDs. 
                                                    </div>
                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1e"  data-parent=".panel">
                                                    1.6.Which cryptocurrencies pairs are available?
                                                    </h4>
                                                    <div class="collapse" id="faq1e">
                                                    As of now, our platform provides the following currency pairs, but we are eager to accept more cryptocurrencies in the near future.
                                                    -BTC/USD<br>
                                                    -BTG/USD<br>
                                                    -BCH/USD<br>
                                                    -ETC/USD<br>
                                                    -ETH/USD<br>
                                                    -DASH/USD<br>
                                                    -LTC/USD<br>
                                                    -XRP/USD<br>
                                                    </div>
                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1f"  data-parent=".panel">
                                                    1.7.What are the fees and commission?
                                                    </h4>
                                                    <div class="collapse" id="faq1f">
                                                    Most services on our platform are free. We charge a small fee for trade activities. Rates are as listed below:
                                                    <br>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th></th>
                                                            <th class="text-center">Commission -  Open Position (Per Qty) / USD</th>
                                                            <th class="text-center">*Overnight Funding Rate %</th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BTC/USD</td>
                                                            <td>8</td>
                                                            <td style="vertical-align: middle;" rowspan="8">0.4</td>                     
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BTG/USD</td>
                                                            <td>0.1</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BCH/USD</td>
                                                            <td>1.5</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>ETC/USD</td>
                                                            <td>0.05</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>ETH/USD</td>
                                                            <td>1.2</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>DASH/USD</td>
                                                            <td>0.05</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>LTC/USD</td>
                                                            <td>0.2</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>XRP/USD</td>
                                                            <td>0.001</td>                                    
                                                        </tr>
                                                        </table>
                                                        
                                                        <strong>* When holding a position overnight, the overnight funding amount is deducted from your account. Daily overnight funding charge: Trade Qty x Opening Rate x Overnight Funding Rate %. </strong>
                                                        </div>

                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1g"  data-parent=".panel">
                                                    1.8.Which countries’ residents do you accept on your platform ?
                                                    </h4>
                                                    <div class="collapse" id="faq1g">
                                                    Traders who are able to access our platform from their location would be accepted. Thus, wherever you are, as long as you can access our website, you can trade with us.
                                                    </div>
                                                </li><br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq1h"  data-parent=".panel">
                                                    1.9.How do I contact customer service?
                                                    </h4>
                                                    <div class="collapse" id="faq1h">
                                                    You can reach us on the following platforms: 
                                                    <br>
                                                    1) Email : <a href="javascript:; ">customerservice1@cryptotradex.com</a> <br>
                                                    2) Telegram : cryptotradexcs1 & cryptotradexcs2  <br>  
                                                    3) Wechat : ctdkefu1 & ctdkefu3    <br>
                                                    4) QQ : ctdkefu1 & ctdkefu3 
                                                    </div>
                                                </li><br>
                                                <li data-toggle="collapse"  href="#faq1i"  data-parent=".panel">
                                                   <h4>
                                                    1.10.How can I stay updated with CryptoTradex’s news and developments?
                                                    </h4>
                                                    <div class="collapse" id="faq1i">
                                                    Join us on the following platforms to stay updated with the latest happenings. <br>
                                                    1) Twitter : CryptoTradex_ <br>
                                                    2) Telegram : cryptotradexofficial <br>
                                                    3) Weibo : <a href="https://www.weibo.com/u/6579571191">https://www.weibo.com/u/6579571191</a>
                                                    </div>
                                                </li>
                                                <br>
                                            </ol>
                                    
                                        </li>
                                        <li class="panel">
                                            <a role="button" data-toggle="collapse" href="#faq2" data-parent="#accordion">2.Account Application</a>
                                        
                                            <ol class="collapse" id="faq2">
                                            <br>
                                                <li>
                                                   <h4   data-toggle="collapse"  href="#faq2a" data-parent=".panel">
                                                    2.1.How do I apply for an account with CryptoTradex?
                                                    </h4>
                                                    <div  class="collapse" id="faq2a">
                                                    Kindly go to the registration page <a href="http://trade.cryptotradex.com/registration/index.php "> here</a>. <br><br> 
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq2b" data-parent=".panel">
                                                    2.2.How long does it take for my account application to be processed?
                                                    </h4>
                                                    <div class="collapse" id="faq2b">
                                                    Account application is processed almost instantly and you may make a deposit to your CryptoTradex account for trading. For more information about making a deposit, kindly refer to <a role="button" data-toggle="collapse" href="#faq6" data-parent="#accordion">FAQ: How do I make a deposit </a><br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq2c" data-parent=".panel">
                                                    2.3.Can I have more than one account?
                                                    </h4>
                                                    <div class="collapse" id="faq2c">
                                                    Yes, you may have more than one account to facilitate your trading strategy. Do remember to keep a record of your login details to avoid the inconvenience of resetting your password. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq2d" data-parent=".panel">
                                                    2.4.How do I set-up a demo account?
                                                    </h4>
                                                    <div class="collapse" id="faq2d">
                                                    Kindly go to the demo registration page <a href="http://trade.cryptotradex.com/registration/index.php ">here</a>.  <br> 
                                                    Each new demo user is given $50,000 in virtual funds to practice their trading strategies on our platform risk-free. <br>
                                                    A demo account is perfect for traders to explore the functionalities of the CryptoTrade platform. <br>
                                                    Kindly refer to our User <span style="text-decoration:underline;">Manual:Demo Account</span> for detailed illustration. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                            </ol>
                                        </li>
                                        <li class="panel">
                                            <a role="button" data-toggle="collapse" href="#faq3" data-parent="#accordion">3.Platform</a>
                                            <ol class="collapse " id="faq3">
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3a" data-parent=".panel">
                                                    3.1.Does CryptoTradex have an iOS or Android app?
                                                    </h4>
                                                    <div class="collapse" id="faq3a">
                                                    CryptoTradex does not have an app, but you can easily access the platform via a web browser in any device. Do take note that you can only be logged in on 1 web browser at any instance. An attempt at logging in on a 2nd web browser will log you out from the first login. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq3b" data-parent=".panel">
                                                    3.2.Does CryptoTradex work on all devices?
                                                    </h4>
                                                    <div class="collapse" id="faq3b">
                                                    CryptoTradex works on all devices with a web browser and internet connection. To reduce latency, consider connecting to CryptoTradex’s platform on a wired internet connection. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq3c" data-parent=".panel">
                                                    3.3.Can I be logged in at multiple devices at the same time?
                                                    </h4>
                                                    <div class="collapse" id="faq3c">
                                                    Multiple login instances are not allowed. Please take note that an attempt at logging in on a 2nd web browser will result in the earlier login instance being terminated.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq3d" data-parent=".panel">
                                                    3.4.How do I change the display language?
                                                    </h4>
                                                    <div class="collapse" id="faq3d">
                                                    Go to <strong>Settings → Account Settings → Language → Save settings</strong> 
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3e" data-parent=".panel">
                                                    3.5.How can I change my login password?
                                                    </h4>
                                                    <div class="collapse" id="faq3e">
                                                    Go to <strong>Settings → Account Settings</strong>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3f" data-parent=".panel">
                                                    3.6.How can I access my account history?
                                                    </h4>
                                                    <div class="collapse" id="faq3f">
                                                    Go to <strong>Settings</strong> to see your <strong>Account Login History</strong>.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3g" data-parent=".panel">
                                                    3.7.How can I find my account statement?
                                                    </h4>
                                                    <div class="collapse" id="faq3g">
                                                    Click on <strong>Reports</strong> located in the top navigation panel.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3h" data-parent=".panel">
                                                    3.8.How can I update my email address?
                                                    </h4>
                                                    <div class="collapse" id="faq3h">
                                                    Kindly contact our <span style="text-decoration:underline;">customer support</span>  for assistance.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3i" data-parent=".panel">
                                                    3.9.How can I reset my forgotten password?
                                                    </h4>
                                                    <div class="collapse" id="faq3i">
                                                    Kindly contact our <span style="text-decoration:underline;">customer support</span>  for assistance.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq3j" data-parent=".panel">
                                                    3.10.How can I leave a feedback?
                                                    </h4>
                                                    <div class="collapse" id="faq3j">
                                                    Kindly contact our <span style="text-decoration:underline;">customer support</span>  for assistance. Your feedback would be able to make our platform and related systems better.
                                                    </div>
                                                </li>
                                                <br>
                                            </ol>
                                        </li>
                                        <li class="panel">
                                            <a role="button" data-toggle="collapse" href="#faq4" data-parent="#accordion">4.Security</a>
                                            <ol class="collapse " id="faq4">
                                                  <br>
                                                    <li>
                                                        <h4  data-toggle="collapse"  href="#faq4a" data-parent=".panel">
                                                        4.1.How safe is it to deposit/withdraw and place orders on your website?
                                                        </h4>
                                                        <div class="collapse" id="faq4a">
                                                        -&nbsp;&nbsp;Be assured that we are dedicated in ensuring the security of our system. Connection with the CryptoTradex website is encrypted, ensuring that they are not intercepted nor modified by malicious third-parties. We also have a team of IT experts and a robust IT security system to monitor transactions for suspicious activities 24/7 every day. <br>
                                                        -&nbsp;&nbsp;It is also important for traders to make sure that their personal crypto wallets are safe, by using a strong and secure password kept in a safe place, such as a vault or a physical safe. <br><br>
                                                        </div>
                                                    </li>
                                                    <br>
                                            </ol>
                                        </li>
                                        <li class="panel">
                                            <a role="button" data-toggle="collapse" href="#faq5" data-parent="#accordion">5.Trading</a>
                                            <ol class="collapse " id="faq5">
                                            <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5a" data-parent=".panel">
                                                    5.1.What are the market hours?
                                                    </h4>
                                                    <div  class="collapse" id="faq5a">
                                                    For easier reference, we have created a Non-Market Trading Hours table for reference.
                                                    Note: Non-Market Hours are timeframes where a trading instrument is NOT available for trading i.e. it is impossible to open or close a trade within these periods.
                                                    <br><br>
                                                    <img class="center-block img-responsive" src="./images/faq3.png" alt="">
                                                    <br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5b" data-parent=".panel">
                                                    5.2.What timezone does CryptoTradex use on its charts? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5b">
                                                    <strong>Coordinated Universal Time (UTC)</strong> is used on all charts.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5c" data-parent=".panel">
                                                    5.3.What is overnight funding charge? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5c">
                                                    -&nbsp;&nbsp;Overnight funding charge is the cost incurred in keeping a leveraged trading position overnight. When trading CFDs, you are only paying for a portion of the position and borrowing the rest. As such, for positions kept overnight, a small fee will be imposed to cover the cost of the money you have effectively borrowed to maintain the position overnight. <br>
                                                    -&nbsp;&nbsp;The overnight funding charge: Trade Qty x Opening Rate x Overnight Funding Rate % <br>
                                                    -&nbsp;&nbsp;The charge is incurred at UTC 2100. If a position is closed on the same day before UTC 2100, there will be no overnight funding cost involved. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5d" data-parent=".panel">
                                                    5.4.What is commission? How is it calculated?
                                                    </h4>
                                                    <div class="collapse" id="faq5d">
                                                    It is a fee CryptoTradex charges for trade activities. CryptoTradex is dedicated in providing one of the lowest commissions in the market. Kindly refer to <a role="button" data-toggle="collapse" href="#faq6" data-parent="#accordion">FAQ:Fees and Commission page for more information.</a> <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5e" data-parent=".panel">
                                                    5.5.What is margin trading?
                                                    </h4>
                                                    <div class="collapse" id="faq5e">
                                                    It is the trading of an asset using a smaller capital, by borrowing, thereby maximising potential returns. Margin trading gives traders the flexibility in trading many different cryptocurrency pairs with the same amount of capital that might otherwise be used to buy cryptocurrencies. This allows traders to greatly diversify their cryptocurrency portfolio, reducing their risk exposure. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5f" data-parent=".panel">
                                                    5.6.What is Initial Margin?
                                                    </h4>
                                                    <div class="collapse" id="faq5f">
                                                    It is the price a trader has to pay with his/her account balance to trade a single quantity of an asset.  <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5g" data-parent=".panel">
                                                    5.7.What is Maintenance Margin and Margin Call?
                                                    </h4>
                                                    <div class="collapse" id="faq5g">
                                                    <strong>Maintenance Margin</strong> is the minimum amount of equity balance needed to be in your trading account in order for trading to continue. When equity balance falls below the <strong>Maintenance Margin</strong>, traders will receive a <strong>Margin Call</strong> alert via email and positions may be automatically closed by our trading system. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq5h" data-parent=".panel">
                                                    5.8.Why did my trade close automatically? 
                                                    </h4>
                                                    <div class="collapse" id="faq5h">
                                                    Your trade may be closed if your account’s equity balance falls below the <strong>Maintenance Margin</strong>. Unfortunately, we are unable to reinstate your trade. To prevent this from happening, make sure that your equity balance does not fall below the <strong>Maintenance Margin</strong>.  <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5i" data-parent=".panel">
                                                    5.9.What is a Bid price, Ask price and Spread? 
                                                    </h4>
                                                    <div class="collapse" id="faq5i">
                                                    <strong>Bid price</strong> is the maximum price that buyers on the exchange are willing to pay for the cryptocurrency pair. <br>
                                                    <strong>Ask price</strong> is the minimum price that sellers on the exchange are willing to sell the cryptocurrency pair for. <br>
                                                    <strong>Spread</strong> is the difference between the bid and ask price. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5j" data-parent=".panel">
                                                    5.10.What is slippage? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5j">
                                                    Cryptocurrency prices can move really fast, such that prices may change while orders are being executed. Slippage is the phenomenon where the executed order price differs from what a trader had indicated, due to an imbalance between buyers and sellers, prices and trade volumes. The trading platform quickly matches orders that are closest in price. As such, the prices matched may differ slightly from what the trader had stated. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5k" data-parent=".panel">
                                                    5.11.What is “long” and “short”? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5k">
                                                    <strong>“Long”</strong> and <strong>“short”</strong> positions are trading terms used to describe directional speculation by market participants.  <br>

                                                        A <strong>“long”</strong> trade refers to the buying of an asset with the intention to profit from a rising market. <br>

                                                        A <strong>“short”</strong> trade refers to the borrowing of an asset with the intention to profit from a falling market. In theory, it is done by borrowing an asset to sell and then buying back the same asset at a lower price in the future to return the earlier borrowed asset. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5l" data-parent=".panel">
                                                    5.12.What is a Limit Order? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5l">
                                                    A <strong>limit order</strong> is an order to buy or sell an asset for a set price or better. Here are a few examples: <br>

                                                    A <strong>buy limit order</strong>, set at BTC/USD 5960, is executed when price falls from BTC/USD 6060 to BTC/USD 5960 or below. <br>
                                                    A <strong>sell limit order</strong>, set at BTC/USD 5890, is executed when price rises from BTC/USD 5790 to BTC/USD 5890 or above. <br>

                                                    In addition, a buy or sell limit can be a <strong>limit entry order</strong> or <strong>limit closing order</strong>. A <strong>limit entry order</strong> is a limit order used to open a position, while a <strong>limit closing order</strong> is a limit order used to close an existing position. <br>
                                                    -&nbsp;&nbsp;Learn how to open a limit order at User Manual:Limit Order  <br>
                                                    -&nbsp;&nbsp;On CryptoTradex, limit orders are GTC (Good Till Cancelled), meaning that they do not expire on their own. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5m" data-parent=".panel">
                                                    5.13.What is OCO?
                                                    </h4>
                                                    <div  class="collapse" id="faq5m">
                                                    -&nbsp;&nbsp;OCO stands for <strong>One-Cancels-the-Other </strong> Order. It combines a stop loss order with a limit order. When either of the orders get executed, the other is automatically cancelled. <br> 
                                                    -&nbsp;&nbsp;A trader who expects greater volatility of an asset in the future may utilize OCO to gain profits regardless of the directional of price movement. This is because the OCO allows him/her to sell if price drops, and buy if it rises. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5n" data-parent=".panel">
                                                    5.14.What is the minimum and maximum order size? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5n">
                                                    The table below shows the minimum and maximum trade size for each cryptocurrency pair.
                                                    Take note that the <strong>maximum order size</strong> applies to <span style="text-decoration:underline;">individual trades only</span>. For example, in order to buy 40 BTC/USD, you may execute 2 buy orders of 20 BTC/USD each. <br> <br>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th></th>
                                                            <th class="text-center">Minimum Order Size / Qty</th>
                                                            <th class="text-center">Maximum Order Size per Trade / Qty</th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BTC/USD</td>
                                                            <td style="vertical-align: middle;" rowspan="8">1</td>   
                                                            <td>20</td>                  
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BTG/USD</td>
                                                            <td>100</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>BCH/USD</td>
                                                            <td>20</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>ETC/USD</td>
                                                            <td>1000</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>ETH/USD</td>
                                                            <td>30</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>DASH/USD</td>
                                                            <td>30</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>LTC/USD</td>
                                                            <td>100</td>                                    
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>XRP/USD</td>
                                                            <td>10000</td>                                    
                                                        </tr>
                                                        </table>
                                                
                                                        </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5o" data-parent=".panel">
                                                    5.15.Are there fees per trade? 
                                                    </h4>
                                                    <div  class="collapse" id="faq5o">
                                                    Yes. CryptoTradex is dedicated in providing one of the lowest commissions in the market.
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq5p" data-parent=".panel">
                                                    5.16.Does CryptoTradex charge overnight fees? 
                                                    </h4>
                                                    <div class="collapse" id="faq5p">
                                                    Yes, kindly refer to <a role="button" data-toggle="collapse" href="#faq6" data-parent="#accordion">FAQ:What are the fees and commission</a>. CryptoTradex is dedicated in providing a highly competitive overnight fee. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq5q" data-parent=".panel">
                                                    5.17.Why was my stop loss not executed when I see price reaching the level?
                                                    </h4>
                                                    <div class="collapse" id="faq5q">
                                                    As with any trading platforms, <span style="text-decoration:underline;">slippage</span> may occur. At CryptoTradex, we are dedicated in keeping slippage to the absolute minimum. We achieve this by having both state-of-the-art hardware and software, complimented by a large team of IT experts who monitor the platform 24/7 daily.  <br><br>
                                                    </div>

                                                </li>
                                                <br>
                                            </ol>
                                        </li>    
                                        <li class="panel">
                                            <a role="button" data-toggle="collapse" href="#faq6" data-parent="#accordion">6.Deposit and withdrawal</a>
                                            <ol class="collapse" id="faq6">
                                            <br>
                                                <li>
                                                   <h4 data-toggle="collapse"  href="#faq6a" data-parent=".panel">
                                                    6.1.How do I make a deposit?
                                                    </h4>
                                                    <div class="collapse" id="faq6a">
                                                    1) Contact customer service <br>
                                                    2) Account verification is done <br>
                                                    3) Exchange rates are shown <br>
                                                    4) Detailed instructions are given on the deposit procedures <br>
                                                    5) A summary of the transaction is shown <br>
                                                    6) An email notification is sent to inform you that your deposit has been successful <br>
                                                    <strong>
                                                    CryptoTradex does not charge a fee, but bank charges may be applicable </strong>
                                                    </div>
                                                    
                                                </li>
                                                <br>
                                                <li>
                                                    <h4 data-toggle="collapse"  href="#faq6b" data-parent=".panel">
                                                    6.2.How do I make a withdrawal? 
                                                    </h4>
                                                    <div class="collapse" id="faq6b">
                                                    1) Make sure there is sufficient balance to withdraw from <br>
                                                    2) Contact customer service <br>
                                                    3) Account verification is done <br>
                                                    4) Detailed instructions are given on the withdrawal procedures <br>
                                                    5) Exchange rates are shown <br>
                                                    6) A summary of the transaction is shown for your confirmation <br>
                                                    7) An email notification is sent to inform you that CryptoTradex has successfully processed your withdrawal request. <br>
                                                    <strong>
                                                    For CryptoTradex’s charges click here (FAQ:What are the fees and commission). Bank charges may be applicable.
                                                    </strong>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq6c" data-parent=".panel">
                                                    6.3.Which currencies can I deposit in?
                                                    </h4>
                                                    <div class="collapse" id="faq6c">
                                                    As of now, we accept USD deposits only. Deposits in other currencies will be converted to USD according to our FX rates. CryptoTradex will support deposits in other currencies in the near future. 
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4  data-toggle="collapse"  href="#faq6d" data-parent=".panel">
                                                    6.4.How long does the withdrawal process take? 
                                                    </h4>
                                                    <div class="collapse" id="faq6d">
                                                    Withdrawal requests takes 3-7 working days to process. In the event that your request has been unsuccessful, you will be notified within this 3-7 working days. Time required for withdrawal is highly dependent on the bank’s efficiency.  <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4   data-toggle="collapse"  href="#faq6e" data-parent=".panel">
                                                    6.5.What is the minimum and maximum deposit? 
                                                    </h4>
                                                    <div  class="collapse" id="faq6e">
                                                    The minimum deposit is US$100 and the maximum deposit is US$50,000 per day per account. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4   data-toggle="collapse"  href="#faq6f" data-parent=".panel">
                                                    6.6.What is the minimum and maximum withdrawal? 
                                                    </h4>
                                                    <div  class="collapse" id="faq6f">
                                                    Withdrawal limits are on a <span>monthly basis</span>
                                                    -&nbsp;&nbsp;On the first withdrawal: <br>
                                                    Minimum withdrawal is US$50. There will be no charges from CryptoTradex. Bank transaction fee may be applicable and is to be borne by the trader. CryptoTradex will automatically deduct the transaction fee from the requested withdrawal balance when being required by the bank. <br>
                                                    -&nbsp;&nbsp;On subsequent withdrawals: <br>
                                                    Minimum withdrawal is US$50. A 0.5% transaction fee is applied by CryptoTradex. Bank transaction fee may be applicable and is to be borne by the trader. CryptoTradex will automatically deduct the transaction fee from the requested withdrawal balance when being required by the bank. <br><br>
                                                
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4   data-toggle="collapse"  href="#faq6g" data-parent=".panel">
                                                    6.7.What are the fees/charges when I make a deposit?
                                                    </h4>
                                                    <div  class="collapse" id="faq6g">
                                                    As a benefit to all traders, CryptoTradex will be giving a full waiver of the deposit processing fee. Hence, there are no fees involved during deposit. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4   data-toggle="collapse"  href="#faq6h" data-parent=".panel">
                                                    6.8.What are the fees/charges when I make a withdrawal?
                                                    </h4>
                                                    <div  class="collapse" id="faq6h">
                                                    -&nbsp;&nbsp;On the first withdrawal: <br>
                                                    There will be no charges from CryptoTradex. Bank transaction fee may be applicable and is to be borne by the trader. CryptoTradex will automatically deduct the transaction fee from the requested withdrawal balance when being required by the bank. <br>
                                                    -&nbsp;&nbsp;On subsequent withdrawals: <br>
                                                    A 0.5% transaction fee is applied by CryptoTradex. Bank transaction fee may be applicable and is to be borne by the trader. CryptoTradex will automatically deduct the transaction fee from the requested withdrawal balance when being required by the bank. <br><br>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    <h4   data-toggle="collapse"  href="#faq6i" data-parent=".panel">
                                                    6.9.Can I deposit and withdraw to different accounts?
                                                    </h4>
                                                    <div  class="collapse" id="faq6i">
                                                    You may deposit from and withdraw to different accounts in most banks. Do take note that fees imposed by the banks may differ. If you are in doubt, please do not hesitate to reach out to our customer service for assistance. 
                                                    </div>
                                                </li>
                                                <br>
                                            </ol>
                                        </li>
                                    </ol>

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
      //FAQ连接a跳转
    $(function(){

        var hash = window.location.hash;
        if(hash!==""){
            if(hash === "#1"){
               
                $('#accordion li:nth-child(1) ol').collapse('show');

            }else if(hash==="#2"){
                $('#accordion li:nth-child(2) ol').collapse('show');


            }else if(hash==="#3"){
                $('#accordion li:nth-child(3) ol').collapse('show');

            }else if(hash==="#4"){
                $('#accordion li:nth-child(4) ol').collapse('show');

            }else if(hash==="#5"){
                // $('#accordion li:nth-child(5) ol').addClass('in');
                $('#accordion li:nth-child(5) ol').collapse('show');
            }
            

        }else{
            return;
        }




        //FAQ当前页尾部点击锚点 委託
        $('.page-wrapper').on('click','.footer-widget .list-links li',function(){

            var index = $(this).index() +1;
                    // $('#accordion li ol').removeClass('in');
                    // $('#accordion li:nth-child('+index+') ol').addClass('in');
                    $('#accordion li ol').collapse('hide');;
                    $('#accordion li:nth-child('+index+') ol').collapse('show');;
        })



    })


        
    </script>

    </html>