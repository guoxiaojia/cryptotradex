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
<title>blog</title>
<?php include("includes/style.php")?>
</head>

<body>
<div class="page-wrapper">
 	
    <?php include("includes/header.php")?>
    <?php include("includes/form.php")?>
    
    <section class="page-title" style="background-image:url(images/main-slider/s2.jpg);">
        <div class="auto-container">
            <h1>最新博客</h1>
            <div class="title" style="color:#fff;">2018/7/25</div>
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
                <!--Content Column-->
                
                <div class="newtop">
                    <div class="firstlist">
                        <div>
                            <h5 class="title">
                            与众不同的达世币
                            </h5>
                            <p class="smallText">
                              达世币作为主流币种之一，目前市值已经超过20亿美元。与目前广为人知的比特币相比，部分投资者认为达世币更符合中本聪提出的理念。其中最主要的是达世币具有大部分主流币种不具备的匿名性。据达世币中国团队统计，自2014年发行以来，截止至2017年12月达世币主节点增加至4719个，更能说明达世币的关注日益剧增。                      
                            </p>
                        </div>
                        <div>
                            <img class="imgurl" src="images/resource/news-2.jpg">
                        </div>
                    </div>

                </div>
     
            </div>
        </div>

        <div class="wrapsection" style="padding-top:1px;">
            <!-- <div class="section3">
                <div class="auto-container">
                  <div class="inner-column">
                    	
                        <div class="dark-text">专注于隐私的达世币</div>
                       
                            <p class="">    
                            达世币作为三大匿名货币之一。相较于比特币的去向可见，从而查询接受和发送双发，达世币通过其创新的“主节点”混淆式交易的方式，使得无法追寻交易双方的具体信息，进而提高匿名性，加强了交易双方的隐私安全。                        
                            </p>
                            <div class="blogimg">
                               <img src="images/resource/a.png">
                               <a>数据来源：Coinmarketcap</a>
                            </div>
                         
                           <p>
                           目前达世币主要实际应用在于参与美国大麻买卖，在美国大麻买卖是合法化，但联邦法律却规定银行不能接受有大麻的业务，使得这些药房要额外花费收入的30%来用于保证通过大麻所获取的现金。得益于达世币的高匿名性的特点，在2017年10月份的时候，达世币就和区块链支付供应商AltThirtySix合作。该供应商和全美的大多数大麻药房都有着深入的合作，使得买卖大麻要通过达世币来完成，该供应商后台系统可以直接将达世币换成美金，在节省药房的成本，也使得达世币得到更大的普及。恰逢币市处于火热的时候，加上受益于此消息，达世币的价格一路高歌猛进，从300美元一直上涨到1600美元，涨幅高达533%。
                           </p>
                  </div>
              </div>
            </div>
            <div class="section3">
                <div class="auto-container">
                <div class="inner-column">
                    	
                        <div class="dark-text">达世币算力的提升推动价格上涨</div>

                            <p>    
                            算力作为数字货币价格影响因素之一，通常算力的增长会使的数字货币价格上涨，而在2017年11月12日据达世币中文网称，达世币算力已经比两个月前高了20倍，算力高达1.0049P（1P=1024T，1T=1024G），达世币的算力仅仅低于比特币和比特币现金。算力的大幅增加，可以说明越来越多矿工加入，同时达世币挖坑难度在不断提升，迫使算力增加，侧面证明了达世币的市场需求在不断增加。达世币限定了最大发行量为1890万枚，在市场需求不断增加的情况下，达世币供不应求，此消息的发布当天，达世币从288美元上涨至568美元，当日涨幅高达55%。而且当天币市处于空头行情，作为币市翘楚的比特币也下跌6.41%，达世币的逆势上涨都归功于其算力的大幅提升。                            
                            </p>
                            <div class="blogimg">
                               <img src="images/resource/b.png">
                               <a>数据来源：Coinmarketcap</a>
                            </div>
                         
                           <p>
                           达世币作为主流币种里为数不多货币类型的数字货币，其高度的匿名性和快速的交易结算速度，随着达世币的扩容和算力的不断提升，意味着达世币备受资深投资者的关注。在现今币圈中多如牛毛的币种里，币种具有特性会令其更具备投资潜力，而达世币作为主流币种并且其特有的匿名性使其备受瞩目。                         
                             </p>

                    </div>
                </div>
            </div> -->
        </div>
       



    </section>
    <!--End Company Section-->
    
    
    <?php include("includes/footer.php")?>

</div>
<!--End pagewrapper-->

<?php include("includes/footer_extras.php")?>

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
                        $('.firstlist .title').html(obj.title);
                        $('.firstlist .smallText').html(obj.smallText);
                        $('.firstlist .imgurl').attr('src',obj.imgurl);

                        $.each(obj.bigText, function(index2, obj2) {
                            console.log('index2', index2);
                            console.log('obj2', obj2);
                            $('.wrapsection').append($('<div class="section3"><div class="auto-container"><div class="inner-column"><div class="dark-text">'+obj2.listTitle+'</div><p>'+obj2.TextA+'</p><div class="blogimg"><img src="'+obj2.img+'"><br><a>'+obj2.imgText+'</a></div><p>'+obj2.TextB+'</p></div></div></div>'));

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

</body>
</html>