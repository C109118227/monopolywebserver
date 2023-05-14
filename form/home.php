<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>MonopolyWeb</title>
    <link href="css/fullPage.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/headimage.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body>
<div class="fixtop clearfix">
    <a href=""><img src="img/logo.png"/></a>
    <ul class="clearfix" id="menu">
        <li class="active" data-menuanchor="page1"><a href="#page1">首頁</a></li>
        <li data-menuanchor="page2"><a href="#page2">個人資訊</a></li>
        <li data-menuanchor="page3"><a href="#page3">遊戲</a></li>
        <li data-menuanchor="page4"><a href="#page4">景點介紹</a></li>
        <li data-menuanchor="page5"><a href="#page5" >當前位置</a></li>
        <li data-menuanchor="page6"><a href="goods.html" target="_parent">商品兌換</a></li>

        <li class="logout" onclick="location.href='../index.html'" data-menuanchor="page4"><a href="#page4">登出</a></li>
        <li class="p1 fr"> 聯繫學校：<b> 07 601 1000</b></li>
    </ul>
</div>

<div id="lawyer">
    <div class="section section1">
        <div class="banner">
            <div class="bd">
                <ul class="bannerfix slides clearfix">
                    <li>
                        <img alt="" class="bimg" src="img/banner1.jpg"/>
                    </li>
                    <li>
                        <img alt="" class="bimg" src="img/banner2.jpg"/>
                    </li>
                    <li>
                        <img alt="" class="bimg" src="img/banner3.jpg"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section section2">
        <iframe frameborder="1" height="100%" scrolling="no" src="php/userpro.php" width="100%"></iframe>
    </div>
    
    <div class="section section3">
        <iframe frameborder="1" height="100%" scrolling="no" src="../MonopolyGame/index.html" width="100%"></iframe>
    </div>

    <div class="section section4">
        <iframe frameborder="1" height="100%" scrolling="no" src="attractions.html" width="100%"></iframe>
    </div>

    <div class="section section5">
        <div id="map" style="height: 600px;" ></div>
    </div>
    



    <div class="copyright">
        <p class="fl">
            Copyright © Kaohsiung University of Science and Technology Topics
        </p>
    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.3.min.js"></script>
    <script src="js/fullPage.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <script src="js/more.js"></script>
    <script src="js/map.js"></script>
    <script>


        $(function () {
            $('#lawyer').fullpage({
                navigation: true,
                anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
                menu: '#menu'
            });


            jQuery(".banner").flexslider({
                animation: "fade",
                easing: "swing",
                slideshowSpeed: 6000,
                animationSpeed: 0,
                pauseOnAction: false,
                directionNav: false,
                controlNav: true,
                start: function (slider) {
                    jQuery('.banner .bannerfix li').eq(slider.currentSlide).addClass("imgIn").siblings().removeClass("imgIn");
                },
                after: function (slider) {
                    jQuery('.banner .bannerfix li').eq(slider.currentSlide).addClass("imgIn").siblings().removeClass("imgIn");
                }
            });
            $(".sec5-cont").slide({
                mainCell: ".bd ul",
                autoPlay: true,
                effect: "fade"
            });

            jQuery(".sec6-cont").slide({titCell: ".tab-hd li", mainCell: ".tab-bd", delayTime: 0});
            jQuery(".scrollBox").slide({
                titCell: ".list li",
                mainCell: ".piclist",
                effect: "left",
                vis: 1,
                scroll: 1,
                delayTime: 800,
                trigger: "click",
                easing: "easeOutCirc"
            });


        });
    </script>
</div>
</body>


</html>