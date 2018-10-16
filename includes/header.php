 <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-inner">
                	<div class="clearfix">
                        <div class="top-left">
                            <div id="boxover">
                                <ul class="clearfix" id="refresh">
                                    <li class="btc0">
                                        <!-- <div><span>Buy BTC:</span> <span class="buy">$111</span></div>
                                        <div><span>Sell BTC:</span> <span class="sell">$111</span></div> -->
                                        <div><span>BTC : </span> <span class="last">$ 59.48</span></div>
                                    </li>
                                    <li class="bch0">
                                        <!-- <div><span>Buy BCH:</span> <span class="buy">$111</span></div>
                                        <div><span>Sell BCH:</span><span class="sell">$111</span></div> -->
                                        <div><span>BCH : </span> <span class="last">$ 59.48</span></div>
                                    </li>
                                    <li class="eth0">
                                        <!-- <div><span>Buy ETH:</span> <span class="buy">$111</span></div>
                                        <div><span>Sell ETH:</span> <span class="sell">$111</span></div> -->
                                        <div><span>ETH : </span> <span class="last">$ 59.48</span></div>
                                    </li>
                                    <li class="ltc0">
                                        <!-- <div><span>Buy LTC:</span> <span class="buy">$111</span></div>
                                        <div><span>Sell LTC:</span> <span class="sell">$111</span></div> -->
                                        <div><span>LTC : </span> <span class="last">$ 59.48</span></div>
                                    </li>
                
                                    <!-- 视觉重复第一条 -->
                                    <li class="btc0">
                                        <!-- <div><span>Buy BTC:</span> <span class="buy">$111</span></div>
                                        <div><span>Sell BTC:</span> <span class="sell">$111</span></div> -->
                                        <div><span>BTC : </span> <span class="last">$111</span></div>
                                    </li>
                                </ul>
                            </div>
                        
                            <ul class="clearfix">
                                <li class="email"><a href="#"><span class="icon fa fa-envelope-o"></span>customerservice1@cryptotradex.com</a></li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="clearfix">
                                <li><a href="http://trade.cryptotradex.com/login.php"><span class="icon flaticon-web-log-in"></span>Sign In</a></li>
                                <li><a href="http://trade.cryptotradex.com/registration/index.php"><span class="icon flaticon-file-1"></span>Register</a></li>
                                <li class="language dropdown">
                                    <a class="btn btn-default dropdown-toggle language-default" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
                                        <span class="flag-icon">
                                            <img src="images/icons/flag-icon.png" alt="" />
                                        </span>En &nbsp;
                                        <span class="arrow-icon fa fa-angle-down"></span>
                                    </a>
                                    <!-- <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                        <li onclick="changeLang('en')"><a href="javascript:void()">English</a></li>
                                        <li onclick="changeLang('cn')"><a href="javascript:void()">China</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var lang = "<?php echo $_SESSION['lang']?>";
            if(lang == "en") {
                var str = '<span class="flag-icon"><img src="images/icons/flag-icon.png" alt="" /></span>En &nbsp;<span class="arrow-icon fa fa-angle-down"></span>';
                $('.language-default').empty().append(str)
            }else{
                var str = '<span class="flag-icon"><img src="images/icons/flag-icon-cn.png" alt="" /></span>Cn &nbsp;<span class="arrow-icon fa fa-angle-down"></span>';
                $('.language-default').empty().append(str)
            }
            // 切换语言
            function changeLang (lang) {
                $.ajax({
                    data:{lang:lang}
                    ,url:'./setLang.php'
                    ,type:'POST'
                    ,success: function (data) {
                        var langData =  JSON.parse(data);
                        window.location.reload();
                    }
                })
            }
        </script>
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
                	
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                		<!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php"><?php echo $lang['Home'] ?></a></li> 
                                    <li><a href="about-us.php"><?php echo $lang['AboutUs'] ?></a></li>
                                    <li><a href="what-is-cfd.php">What is CFD</a></li>
                                    <li><a href="why-crypto-tradex.php">Why CryptoTradex</a></li>
                                    <!-- <li><a href="demo.php">Demo</a></li> -->
                                    <li><a href="faq.php">FAQ</a></li>
                                </ul>
                            </div>
                        </nav>
                        
                        <!-- Main Menu End-Search Box-->
                        <!-- <div class="outer-box">
                            
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="reservation-form-btn consult-form-btn">
                              <span class="icon flaticon-menu-options"></span>
                            </div>
                        </div> -->
                        
            		</div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                            <li><a href="index.php">Home</a></li> 
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="what-is-cfd.php">What is CFD</a></li>
                                    <li><a href="why-crypto-tradex.php">Why CryptoTradex</a></li>
                                    <!-- <li><a href="demo.php">Demo</a></li> -->
                                    <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->

     </header>
    <!--End Main Header -->