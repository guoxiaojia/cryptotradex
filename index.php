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
<title><?php echo $lang['WelcomeToCryptoTradex'] ?></title>
<?php include("includes/style.php")?>
</head>
<body>
<div class="page-wrapper"> 	
    <?php include("includes/header.php")?>
    <?php include("includes/form.php")?>
    <!--Main Slider-->
    <section class="main-slider">    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery" style="height:523px !important;">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1" style="height:523px !important;">
                <ul style="height:523px !important;">

                      
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/s1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/s1.jpg"> 
                            
                            <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['650','650','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['-90','-100','-100','-85']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <h2>Competitive Spread</h2><br>
                                 <!-- <span class="theme_color">who’ve invested smarter... </span></h2> -->
                            </div>
                            
                            <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','580','580','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['50','50','25','10']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <div class="text">
                                CryptoTradex has always aligned itself with the interest of its clients. Our market analysts are constantly monitoring prices to deliver the lowest spreads, most accurate and stable quotes.
                                </div>
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','550','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['170','130','130','110']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <!-- <div class="btns-box">
                                    <a href="register.php" class="theme-btn btn-style-one">Register</a> 
                                    <a href="login.php" class="theme-btn btn-style-two">Login</a>
                                </div> -->

                                <div class="btns-box">
                        	       <a href="why-crypto-tradex.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                            
                            </li>

                	   <!-- slide2-->
                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/s2.jpg" data-title="Slide Title" data-transition="parallaxvertical" style="height:523px !important;">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/s2.jpg" style="height:523px !important;"> 
                    
                    <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['650','650','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['-90','-100','-100','-85']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <h2>Extensive range of technical indicators </h2><br>
                            </div>
                            
                            <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','580','580','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['50','50','25','10']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <div class="text">
                                Our platform is equipped with a highly-configurable chart, supporting up to 70 different technical indicators for your personalised trading needs.
                            </div>
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','550','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['170','130','130','110']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <div class="btns-box">
                        	       <a href="why-crypto-tradex.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                    
                    </li>
                    <!-- slide3 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/s3.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/s3.jpg"> 
                            
                            <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['650','650','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['-90','-100','-100','-85']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <h2>Dedicated 24/7 customer service support</h2><br>
                                
                            </div>
                            
                            <div class="tp-caption" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','580','580','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['50','50','25','10']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >
                                <div class="text">
                                Our English and Mandarin customer service support are available 24/7, ready to assist you.
                                </div>
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['550','550','550','420']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['170','130','130','110']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            >

                                <div class="btns-box">
                        	       <a href="why-crypto-tradex.php" class="theme-btn btn-style-one">Read More</a>
                                </div>

                            </div>
                            
                            </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
  
    <!--Services Section Two-->
    <section class="services-section-two" style="background:url(images/mainbg.jpg) !important">
    	<div class="auto-container">
        	<div class="sec-title light text-center">
                <h2>HOW TO TRADE</h2>
                <div style="font-size:22px;color:#fff;font-weight:bold;">Start Trading in 3 Simple Steps</div>
            </div>
            <div class="text-center">

                <img src="images/howitworks.png" alt=""/>
            	
               
            </div>
        </div>
    </section>
    <!--Services Section Two-->
    
    <!--Blog Section-->
    <section class="blog-section">
    	<div class="auto-container">
        	<div class="sec-title">
            	<h2>Latest From Blog</h2>
                <div class="separator"></div>
            </div>
            <div id="bloglists" class="three-item-carousel owl-carousel owl-theme">
            	
                <!--News Block-->
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog-single.php#0" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>2</span>
                                     <div>June</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">8</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog-single.php#0">By Irene</a></li>
                                    <li><a href="blog-single.php#0">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog-single.php#0">Welcome to CryptoTradex–Your Trusted Expert in Cryptocurrency CFD</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog-single.php#0'">
                                    CryptoTradex is one of the world's leading cryptocurrency CFD service providers specializing in margin trading facility. With our proprietary Direct Market Access (DMA) technology and wide connections to global liquidity providers, orders are executed at high speeds and at highly competitive prices.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit1.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit1.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#1" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>25</span>
                                     <div>7</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">6</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#1">By Irene</a></li>
                                    <li><a href="blog.php#1">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#1">与众不同的达世币</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#1'">
                                达世币作为主流币种之一，目前市值已经超过20亿美元。与目前广为人知的比特币相比，部分投资者认为达世币更符合中本聪提出的理念。其中最主要的是达世币具有大部分主流币种不具备的匿名性。                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit2.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit2.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#2" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>2</span>
                                     <div>8</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">9</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#2">By Irene</a></li>
                                    <li><a href="blog.php#2">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#2">暗流涌动的“聪明钱”</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#2'">
                                交易量是投资活动中一项很重要的指标，其代表着投资活动中的资金流向，也代表着市场的活跃程度。资金的流向，是影响价格的主要因素之一，但其反应未必会立竿见影。                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit3.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit3.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#3" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>27</span>
                                     <div>8</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">8</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#3">By Irene</a></li>
                                    <li><a href="blog.php#3">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#3">蓄势待发的千亿资金</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#3'">
                                随着科技的日益进步，电子游戏逐渐成为大部分人生活中必不可少的娱乐方式。游戏的不断革新，使得越来越多人愿意投入金钱到游戏中                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
           
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog-single.php#0" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>2</span>
                                     <div>June</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">6</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog-single.php#0">By Irene</a></li>
                                    <li><a href="blog-single.php#0">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog-single.php#0">Welcome to CryptoTradex–Your Trusted Expert in Cryptocurrency CFD</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog-single.php#0'">
                                    CryptoTradex is one of the world's leading cryptocurrency CFD service providers specializing in margin trading facility. With our proprietary Direct Market Access (DMA) technology and wide connections to global liquidity providers, orders are executed at high speeds and at highly competitive prices.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit1.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit1.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#1" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>25</span>
                                     <div>7</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">8</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#1">By Irene</a></li>
                                    <li><a href="blog.php#1">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#1">与众不同的达世币</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#1'">
                                达世币作为主流币种之一，目前市值已经超过20亿美元。与目前广为人知的比特币相比，部分投资者认为达世币更符合中本聪提出的理念。其中最主要的是达世币具有大部分主流币种不具备的匿名性。                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit2.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit2.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#2" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>2</span>
                                     <div>8</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">8</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#2">By Irene</a></li>
                                    <li><a href="blog.php#2">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#2">暗流涌动的“聪明钱”</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#2'">
                                交易量是投资活动中一项很重要的指标，其代表着投资活动中的资金流向，也代表着市场的活跃程度。资金的流向，是影响价格的主要因素之一，但其反应未必会立竿见影。                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="news-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/bit3.png" alt="" />
                            <div class="overlaybox">
                            	<a href="images/resource/bit3.png" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>
                                <a href="blog.php#3" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="post-date">
                                    <span>27</span>
                                     <div>8</div>
                                     <div>2018</div>
                                    </div>
                                <div class="comments">8</div>
                            </div>
                            <div class="lower-box">
                                <ul class="post-meta">
                                    <li><a href="blog.php#3">By Irene</a></li>
                                    <li><a href="blog.php#3">Customer Services</a></li>
                                </ul>
                                <h3><a href="blog.php#3">蓄势待发的千亿资金</a></h3>
                                <div class="text" style=" text-align: justify;  cursor: pointer;" onclick="window.location.href='blog.php#3'">
                                随着科技的日益进步，电子游戏逐渐成为大部分人生活中必不可少的娱乐方式。游戏的不断革新，使得越来越多人愿意投入金钱到游戏中                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                
            </div>
        </div>
    </section>
    <!--End Blog Section-->
    <?php include("includes/footer.php")?>
    
    
</div>
<!--End pagewrapper-->

<?php include("includes/footer_extras.php")?>



</body>

</html>