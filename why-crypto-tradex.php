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
<title>Why CryptoTradex : CryptoTradex</title>
<?php include("includes/style.php")?>
</head>

<body>
<div class="page-wrapper">
 	
    <?php include("includes/header.php")?>
    <?php include("includes/form.php")?>
    
    <section class="page-title" style="background-image:url(images/main-slider/s2.jpg);">
        <div class="auto-container">
            <h1>Why CryptoTradex</h1>
            <div class="title" style="color:#fff;">The CryptoTradex platform uses a professional cryptocurrency trading engine</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Why CryptoTradex</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Company Section-->
    <section class="company-section">
    	<div class="newauto-container">
            <div class="newContainer">
                <div class="listbox">
                    <div>
                      <img src="images/icons1.png">
                    </div>
                    <div class="newright new1">
                       <h5> User-friendly interface </h5>
                       <div class="newtext">
                          The CryptoTradex platform uses a professional cryptocurrency trading engine that utilizes Direct Market Access (DMA) technology to execute orders at high speeds, keeping prices competitive. The interface is simple and intuitive, perfect for first-time investors. CryptoTradex’s platform is accessible from any device that has a web browser and internet connectivity, allowing investors to trade anywhere anytime; no software installation is required. 
                       </div>
                    </div>
                </div>

                <div class="listbox boxleft0 new2">
                   <div class="newright">
                       <h5> Extensive range of technical indicators </h5>
                       <div class="newtext">
                       CryptoTradex strongly believe that all experienced traders have their own unique trading strategy, requiring different technical indicator setups. Thus, our platform is equipped with a highly-configurable chart, supporting 70 different technical indicators and complete with drawing tools. Investors can save their custom chart templates on the secure cloud server, allowing for quick access in response to changing market conditions. 
                       </div>
                    </div>
                    <div>
                      <img src="images/icons2.png">
                    </div> 
                   
                </div>

                <div class="listbox">
                    <div>
                      <img src="images/icons3.png">
                    </div>
                    <div class="newright new3">
                       <h5> Competitive spread</h5>
                       <div class="newtext">
                       Cryptocurrency CFD is a relatively new and emerging financial product, with strong competition amongst CFD providers. CryptoTradex has always aligned itself with the interest of its clients. The group’s team of market analysts constantly monitors prices on competing platforms as we strive to be a leading platform with the lowest spreads, most accurate quotes and greatest stability. 
                    </div>
                    </div>
                </div>
                <div class="wrapbox">
                    <div class="tablebox">
                        <p>The following is a comparison of the average price difference between CryptoTradex and its peers:  </p>
                        <table>
                            <thead>
                                <tr>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>CryptoTradex’s spread (pips)</th>
                                    <th>Large global exchanges’ spread (pips)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>BTC       </td><td>6600</td><td>6500 – 11000</td></tr>
                                <tr><td>ETH       </td><td>600</td><td>650-1000</td></tr>
                                <tr><td>BCH</td><td>1100</td><td>1150-1500</td></tr>
                                <tr><td>LTC</td><td>130</td><td>130-200</td></tr>
                            </tbody>

                        </table>
                        <ul>
                          <li>Note:</li>
                          <li>- The data is as of May 31, 2018.</li>
                          <li>- List is non-exhaustive.</li>
                        </ul>

                    </div>
                </div>
                
                <div class="listbox boxleft0 new4">
                <div class="newright">
                       <h5> Low commission and fees </h5>
                       <div class="newtext">
                       Most of the customer support services are provided free of charge for CryptoTradex’s customer. Although charges may be incurred during trading activities, they are guaranteed to be the lowest in the industry. 
                    </div>
                    </div>
                    <div>
                      <img src="images/icons4.png">
                    </div>
                    
                </div>
                <div class="listbox">
                    <div>
                      <img src="images/icons5.png">
                    </div>
                    <div class="newright new5">
                       <h5> Risk management and Balance Protection functions. </h5>
                       <div class="newtext">
                        By placing a limit order, traders may have their trades automatically closed at specified price levels, thereby protecting their gains and limiting their losses. This feature is free of charge on our platform. 
Furthermore, cryptocurrency CFDs on CryptoTradex have different initial margins requirements and maintenance margins requirements. This gives traders greater flexibility, allowing them freedom to allocate capital based on their risk appetite.                       
                      </div>
                      <div class="smalltext">(Note: Slippage may result in gains or losses during periods of high volatility.) </div>
                    </div>
                   
                </div>
                <div class="listbox boxleft0 new6">
                <div class="newright">
                       <h5>Dedicated 24/7 customer service support </h5>
                       <div class="newtext">
                       Our English and Mandarin customer service support is available 24/7, 7 days a week. Feel free to contact us if you face any problems while trading. We are more than happy to assist you. (For contact details, please refer to the Customer Service page) <br>
Contracts for Difference (“CFDs”) are derivative financial instruments, where the value of a CFD is derived from the price of the underlying asset with no actual ownership of the underlying asset. When leveraged, CFDs may result in significant gains as well as losses. Therefore, it is crucial that the Client fully understands the risks involved before trading and carefully manage his/her risk exposure. Please read our full Risk Disclaimer carefully before trading.                        </div>
                    </div>
                    <div>
                      <img src="images/icons6.png">
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
</html>