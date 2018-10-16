// usdt与$的汇率
function exchangerate(curr) {
    var url = './get_price.php';
    var last = 1;
    $.ajax({
        url: url,
        type: "get",
        async: false,
        data: { 'market': curr },
        success: function(data) {
            last = data.result.Last; //获取汇率值
        },
        error: function(msg) {
            console.log('汇率exchangeRate');

        }

    })
    return last;

}



//获取各种币值
function bits(curr, exchangeRate) {
    var url = './get_price.php';
    $.ajax({
        url: url,
        type: "get",
        data: { 'market': curr },
        success: function(data) {

            // var buy = data.result.Bid;
            // var sell = data.result.Ask;
            var last = data.result.Last;
            var ival = parseFloat(exchangeRate);

            if (!isNaN(ival)) { //判断是否为数字
                // 乘汇率
                // buy = (buy * exchangeRate).toFixed(4);
                // sell = (sell * exchangeRate).toFixed(4);
                last = (last * exchangeRate).toFixed(2);

            } else {
                console.log('no number,汇率为1')
                    // buy = buy.toFixed(4);
                    // sell = sell.toFixed(4);
                last = last.toFixed(2)
            }

            if (curr == "usdt-btc") {
                // $("#refresh li.btc0 .buy").html("$" + buy);
                // $("#refresh li.btc0 .sell").html("$" + sell);
                $("#refresh li.btc0 .last").html("$ " + last);

            } else if (curr == "usdt-bch") {
                // $("#refresh li.bch0 .buy").html("$" + buy);
                // $("#refresh li.bch0 .sell").html("$" + sell);
                $("#refresh li.bch0 .last").html("$ " + last);

            } else if (curr == "usdt-eth") {
                // $("#refresh li.eth0 .buy").html("$" + buy);
                // $("#refresh li.eth0 .sell").html("$" + sell);
                $("#refresh li.eth0 .last").html("$ " + last);

            } else if (curr == "usdt-ltc") {
                // $("#refresh li.ltc0 .buy").html("$" + buy);
                // $("#refresh li.ltc0 .sell").html("$" + sell);
                $("#refresh li.ltc0 .last").html("$ " + last);
            }

        },
        error: function(msg) {
            console.log('币值请求不成功！！')

        }
    });
}



//默认执行

var rate = exchangerate("usd-usdt");


bits("usdt-btc", rate);
bits("usdt-ltc", rate);
bits("usdt-eth", rate);
bits("usdt-bch", rate);

$(function() {
    // 滚动效果定时器滚动

    setInterval(function() {
        var top = parseInt($('#refresh').css('top'));
        var allheight = parseInt($('#refresh').css('height'));

        top = top - 45
        if (top > -allheight) {
            $("#refresh").animate({ top: top + 'px' }, function() {
                if (top == -(allheight - 45)) {
                    $('#refresh').css('top', 0); //视觉错觉
                }
            });

        } else {
            // console.log('币滚动效果')

        }

    }, 3500);



    //博客默认加载出现owl功能失效

    // $.ajax({
    //     url: "./js/blog.json",
    //     type: "get",
    //     success: function(data) {

    //         console.log(data);
    //         $.each(data, function(index, obj) {
    //             var $listdiv = $('<div/>').addClass('news-block');
    //             var $box = $('<div/>').addClass('inner-box');
    //             var $img = $('<div/>').addClass('image');
    //             var $overlaybox = $('<div/>').addClass('overlaybox');
    //             $overlaybox.append($('<a href="' + obj.imgurl + '" data-fancybox="images" data-caption="" class="image-link"><span class="icon fa fa-search-plus"></span></a>'));
    //             $overlaybox.append($('<a href="' + obj.lineurl + '" class="read-more">Read More</a>'))
    //             $img.append($('<img />').attr('src', obj.imgurl));
    //             $img.append($overlaybox);

    //             var $lowerdiv = $('<div/>').addClass('lower-content');
    //             $lowerdiv.append('<div class="upper-box"><div class="post-date"><span>' + obj.day + '</span><div>' + obj.math + '</div><div>' + 2018 + '</div></div><div class="comments">' + obj.comments + '</div></div>')
    //             $lowerdiv.append(' <div class="lower-box"><ul class="post-meta"><li><a href="' + obj.lineurl + '">' + obj.by + '</a></li><li><a href="' + obj.lineurl + '">' + obj.type + '</a></li></ul><h3><a href="' + obj.lineurl + '">' + obj.title + '</a></h3><div class="text" style=" text-align: justify;">' + obj.smallText + ' < /div> </div > ')

    //             $box.append($img);
    //             $box.append($lowerdiv);

    //             $listdiv.append($box);

    //             $('#bloglists').append($listdiv);


    //         })


    //     },
    //     error: function(msg) {
    //         console.log('json请求不成功！！')

    //     }
    // });








})