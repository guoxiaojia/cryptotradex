<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20/020
 * Time: 15:49
 * 请求 btc ->usdt 卖价 买价
 */
header('Content-type: text/json');
   $market=$_GET['market'];
   switch ($market){
       case "usdt-ltc":
           $opear="get_ltc_usdt";
           break;
       case "usdt-eth":
           $opear="get_eth_usdt";
           break;
       case "usdt-bch":
           $opear="get_bch_usdt";
           break;
	   case "usd-usdt":
		   $opear="get_usdt_usd";
		   break;
       case "usdt-btc":
       default:
           $opear="get_btc_usdt";
           break;
   }
    $url="http://148.66.58.170/Rapidzpay/index.php/Api/Test/".$opear;
    $result = file_get_contents($url);
    echo($result);
    return $result;