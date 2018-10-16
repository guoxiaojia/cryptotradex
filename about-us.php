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
<title>About Us : CryptoTradex</title>
<?php include("includes/style.php")?>
</head>

<body>
<div class="page-wrapper">
 	
    <?php include("includes/header.php")?>
    <?php include("includes/form.php")?>

    <section class="page-title" style="background-image:url(images/main-slider/s2.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="title" style="color:#fff;">CryptoTradex is one of the world's leading cryptocurrency CFD service providers <br>specializing in cryptocurrency margin trading facility.</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About us</li>
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
            	<!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<h2>COMPANY OVERVIEW</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="dark-text">CryptoTradex is always ready to fulfill customer needs, providing both robust and practical expertise and the latest technology, allowing customers to manage their trading activities effortlessly, from order placement to balance withdrawal. </div>
                        <div class="text" style="text-align:justify">
                        	<p> 
                            Through our connections with many large global banks and cryptocurrency exchanges, we are able to expand our trading volume and provide customers with high liquidity at the most affordable prices.                                
                                </p>
                            <p>
                            In the world of cryptocurrencies, market changes are rapid and prices are highly volatile. Coupled with the characteristics of high daily volumes, strong anonymity and high returns, cryptocurrencies have garnered much attention from experienced investors. Amongst the various cryptocurrency-related products, CFD stands out as the most ideal derivative product for speculative traders.                            </p>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                	<div class="image">

                        <br><br><br>

                        <img src="images/display1.png" alt=""/>
                    	
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Company Section-->
    
    <!--Features Section-->
    <section class="features-section" style="background-image:url(images/background/pattern-3.png)">
    	<div class="auto-container">
        	<div class="sec-title light centered">
            	<h2>FEATURES OF CRYPTOTRADEX</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
            
            	<!--Featured Block-->
                <div class="featured-block no-hover col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-shield"></span>
                        </div>
                        <div class="title">Trusted</div>
                        <h3><a href="services-single.html">Safe and Secure</a></h3>
                    </div>
                </div>
                
                <!--Featured Block-->
                <div class="featured-block no-hover col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-employee"></span>
                        </div>
                        <div class="title">Dedicated</div>
                        <h3><a href="services-single.html">Expert Support</a></h3>
                    </div>
                </div>
                
                <!--Featured Block-->
                <div class="featured-block no-hover col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-exchange-1"></span>
                        </div>
                        <div class="title">Quick</div>
                        <h3><a href="services-single.html">Instant Exchange</a></h3>
                    </div>
                </div>
                
                <!--Featured Block-->
                <div class="featured-block no-hover col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-smartphone-2"></span>
                        </div>
                        <div class="title">Convenient</div>
                        <h3><a href="services-single.html">One Stop Solution</a></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Features Section-->
    
    <?php include("includes/footer.php")?>

</div>
<!--End pagewrapper-->

<?php include("includes/footer_extras.php")?>

</body>
</html>