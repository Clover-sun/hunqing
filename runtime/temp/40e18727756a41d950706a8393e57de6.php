<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/szz/public/../application/index/view/temp/editsee1.html";i:1553737252;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Swiper demo</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/static/moban/css/swiper.min.css">
    <link rel="stylesheet" href="/static/moban/css/animate.min.css">
    <link rel="stylesheet" href="/static/moban/css/danmu.css">
    <link rel="stylesheet" type="text/css" href="/static/moban/css/luobo.css">
    <link rel="stylesheet" type="text/css" href="/static/moban/css/swipeslider.css">
    <!-- Demo styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        body {
            width: 100%;
            height: 100%;
            font-family: "楷体", "KaiTi";
        }

        .swiper-container {
            width: 375px;
            height: 667px;
            margin: 0 auto;
            position: relative;
        }

        .one-slide {
            /*background: url("img/wedding_dress.gif") no-repeat top/contain;
            background-size: 100% 667px;*/
            text-align: center;
            background: goldenrod;
        }

        .goldenrod-slide {
            background: goldenrod;
        }

        .three-slide {
            background: #FF8604;
        }

        .grey-slide {
            background: grey;
        }

        .yellowgreen-slide {
            background: yellowgreen;
        }

        .yellow-slide {
            background: yellow;
        }

        .green-slide {
            background: green;
        }

        .red-slide {
            background: red;
        }

        .silver-slide {
            background: silver;
        }

        .blue-slide {
            background: blue;
        }

        .swiper-slide {
            height: 667px;
            overflow: hidden;
        }

        .ani {
            font-size: 30px;
        }

        .content {
            background: gainsboro;
            font-size: 30px;
            text-align: center;
            width: 260px;
            margin-left: 100px;
        }

        .ani img {
            width: 80%;
        }

        .three-slide-ani {
            text-align: center;
        }

        .three-slide-ani > img {
            width: 40%;
        }

        .arrow {
            position: fixed;
            width: 10%;
            height: 5%;
            background: url(/static/moban/img/up.png);
            background-size: 100%;
            bottom: 10px;
            left: 48%;
            animation-name: arrow;
            animation-duration: 3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-play-state: running;
            z-index: 2;
        }

        @keyframes arrow {
            0% {
                left: 46%;
                bottom: 10px;
            }
            25% {
                left: 46%;
                bottom: 20px;
            }
            50% {
                left: 46%;
                bottom: 30px;
            }
            75% {
                left: 46%;
                bottom: 40px;
            }
            100% {
                left: 46%;
                bottom: 10px;
            }
        }

        .points {
            position: absolute;
            top: 2px;
            right: 1px;
            z-index: 2;

        }

        .box {
            position: absolute;
            top: 40px;
            right: 5px;
            z-index: 2;
        }

        .box > div {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: #484943;
            background: #fff;
            margin: 6px 0;
            border: 3px solid gainsboro;
            border-radius: 50%;
            font-size: 16px;
            margin: 15px 0;
            -}

        .box-bottom {
            position: absolute;
            width: 10%;
            right: 1px;
            bottom: 30px;
            z-index: 2;
        }

        .box-bottom > div {
            width: 26px;
            height: 26px;
            margin: 10px 0;
            border: 2px solid white;
            border-radius: 50%;
            background: deeppink;
        }

        .box-bottom > div > img {
            width: 100%;
            height: 100%;
        }

        .gift {
            border-radius: 50%;
            animation-name: gift;
            animation-duration: 5s;
            position: relative;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-play-state: running;
        }

        @keyframes gift {
            0% {
                left: 0px;
                top: 0px;
            }
            50% {
                left: 0px;
                top: 30px;
            }
            100% {
                left: 0px;
                top: 0px;
            }
        }

        /*请柬 */
        /*模态框*/
        .bg_model_inside img {
            width: 100%;
            height: 100%;
        }

        .cross, .cross2 {
            position: absolute;
            top: 0;
            right: 0;
        }

        .cross {
            text-align: right;
        }

        .cross2 {
            text-align: left;
            font-size: 40px;

        }

        /*签到*/
        .sign_ul {
            width: 100%;
            height: 98%;
            position: absolute;
            top: 2%;
            bottom: 10%;
            background: white;
            border-radius: 20px;

        }

        .sign_ul li {
            width: 70%;
            height: 30px;
            margin: 17px auto;

        }

        .sign_ul li > * {
            width: 100%;
            height: 100%;
            text-align: center;
            color: grey;
            font-size: 15px;

        }

        .sign_ul li input {
            outline: none;
            text-align: center;
            border: 0;
            border-bottom: 1px solid gainsboro;
        }

        select {
            width: auto;
            outline: none;
            appearance: none;
            border: 0;
            border-bottom: 1px solid gainsboro;

        }

        .sign_ul li .num {
            padding: 2px 40px 2px 76px;
        }

        .sign_ul li .sex {
            padding: 2px 56px 2px 76px;
        }

        option {
            outline: none;
            border: 0;
        }

        .sign_ul .last-li {
            display: flex;
            justify-content: space-around;
            line-height: 25px;
        }

        .sign_ul .last-li span {
            width: 40%;
            height: 80%;
            border-radius: 5px;

        }

        .sign_ul .last-li span:first-child {
            background: #6B5F5F;
            color: white;
        }

        .sign_ul .last-li span:last-child {
            background: #CCCCCC;
            color: #7A7A7A;
        }

        .sign_ul li:last-child div span {
            background: #6B5F5F;
            color: white;
            padding: 3px;
            border-radius: 5px;
            float: right;
        }

        /*客人*/
        .guest_ul {
            width: 70%;
            height: 340px;
            position: relative;
            left: 15%;
            top: 200px;
            background: white;
            border-radius: 20px;
        }

        .guest_ul li {
            width: 90%;
            height: 30px;
            margin: 20px auto;
        }

        .guest_ul li:first-child {
            padding-top: 20px;
        }

        .guest_ul li > * {
            width: 100%;
            height: 100%;
            text-align: center;
            color: grey;
            border-radius: 15px;
            font-size: 15px;
            border: 1px solid gainsboro;

        }

        .guest_ul li input {
            outline: none;
            border: 1px solid gainsboro;
        }

        select {
            width: auto;
            outline: none;
            padding: 2px 30% 2px 44%;
            appearance: none;
        }

        .guest_ul li .tijiao {
            width: 100%;
            height: 100%;
            line-height: 30px;
            text-align: center;
            background: #666666;
            color: white;
            border-radius: 15px;
        }

        .guest_ul .last-li {
            display: flex;
            justify-content: space-around;
            line-height: 25px;
        }

        .guest_ul .last-li a {
            width: 40%;
            height: 80%;
            background: #5D5D5D;
            border-radius: 15px;
            color: white;
            box-shadow: 0 0 0 1px white, 0 0 0 3px grey;
        }

        .fox {
            width: 80%;
            height: 500px;
            margin: 80px auto;
        }

        .fox1 img, .fox4 img {
            width: 100%;
            height: 100%;
        }

        .fox2 img, .fox3 img {
            width: 100%;
            height: 200px;
            margin: 30px 0;
        }
    </style>
</head>
<body>
<!-- Swiper -->


<div class="swiper-container">
    <div class="swiper-wrapper">

        <div class="swiper-slide one-slide">
            <p class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s"
               style="position:absolute;top:100px;">
                <img src="/static/moban/img/wedding_dress.gif" alt="">
            </p>
            <p class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s"
               style="position:relative;top:360px;">
                <span><?php echo $list['name']; ?></span>&<span><?php echo $list['name1']; ?></span>
            </p>
            <p class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s"
               style="position:relative;top:400px;font-size:20px;">
                &nbsp;<span><?php echo $list['time']; ?></span>&nbsp;
            </p>

            <p class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="5s"
               swiper-animate-delay="0.3s" style="position:relative;top:420px;font-size:23px;">
                <span><?php echo $list['location']; ?></span>
            </p>
            <p style="position:relative;top:500px;font-size:30px;">
                送呈您亲启
            </p>
        </div>

        <?php if(is_array($list['pic']) || $list['pic'] instanceof \think\Collection || $list['pic'] instanceof \think\Paginator): if( count($list['pic'])==0 ) : echo "" ;else: foreach($list['pic'] as $key=>$vo): ?>

        <div class="swiper-slide three-slide">
            <p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"
               swiper-animate-delay="0.5s">
                <!--<img src="img/11-3.png" alt="">-->
                <!--<img src="img/11-1.png" alt="">-->
            </p>
            <div class="fox fox1">
                <img src="<?php echo $vo; ?>" alt="">
            </div>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<div class="swiper-slide grey-slide">-->
            <!--<p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"-->
               <!--swiper-animate-delay="0.5s">-->
            <!--</p>-->
            <!--<div class="fox fox2">-->
                <!--<img src="<?php echo $vo; ?>" alt="">-->
                <!--<img src="<?php echo $vo; ?>" alt="">-->
            <!--</div>-->

        <!--</div>-->
        <!--<div class="swiper-slide green-slide">-->
            <!--<p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"-->
               <!--swiper-animate-delay="0.5s">-->
            <!--</p>-->
            <!--<div class="fox fox3">-->
                <!--<img src="<?php echo $vo; ?>" alt="">-->
                <!--<img src="<?php echo $vo; ?>" alt="">-->
            <!--</div>-->

        <!--</div>-->
        <!--<div class="swiper-slide yellowgreen-slide">-->
            <!--<p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"-->
               <!--swiper-animate-delay="0.5s">-->
            <!--</p>-->
            <!--<div class="fox fox4">-->
                <!--<img src="<?php echo $vo; ?>" alt="">-->
            <!--</div>-->

        <!--</div>-->
        <div class="swiper-slide silver-slide">
            <p class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s"
               swiper-animate-delay="0.3s">

            <ul class="guest_ul">
                <li>
                    <input type="text" value="姓名">
                </li>
                <li>
                    <input type="text" value="手机">
                </li>
                <li>
                    <select name="" id="sex">
                        <option value="">男方</option>
                        <option value="">女方</option>
                    </select>
                </li>
                <li>
                    <select name="" id="num">
                        <option value="">1人</option>
                        <option value="">2人</option>
                        <option value="">3人</option>
                        <option value="">4人</option>
                        <option value="">5人</option>
                        <option value="">6人</option>
                        <option value="">待定</option>
                    </select>
                </li>
                <li style="border-radius:15px;">
                    <div class="tijiao">提交</div>
                </li>
                <li class="last-li">
                    <a href="">联系新郎</a><a href="">联系新娘</a>
                </li>
            </ul>
            </p>
        </div>
        <div class="swiper-slide yellow-slide">
            <p class="ani">
            <div class="danmu_box">
                <input type="text" class="form-control" name="" id="barrage_content" placeholder="请输入祝福的话语">
                <div class="btn btn-primary" id="submit_barraget">发送</div>
            </div>
            </p>
        </div>
        <div class="swiper-slide silver-slide">
            <article style="margin-top:100px;">
                <section>
                    <figure id="full_feature" class="swipslider">
                        <ul class="sw-slides">
                            <li class="sw-slide">
                                <img src="/static/moban/img/m6.jpg" alt="Summer beach concept">
                            </li>
                            <li class="sw-slide">
                                <img src="/static/moban/img/m2.jpg" alt="Lang from Yie Ar Kung Fu">
                            </li>
                            <li class="sw-slide">
                                <img src="/static/moban/img/m3.jpg" alt="Tiny Tina">
                            </li>
                            <li class="sw-slide">
                                <img src="/static/moban/img/m4.jpg" alt="Tiny Tina from Borderlands 2">
                            </li>
                            <li class="sw-slide">
                                <img src="/static/moban/img/m5.jpg" alt="Redhead girl">
                            </li>
                        </ul>
                    </figure>

                </section>

            </article>

        </div>

    </div>

    <div class="points"><img src="/static/moban/img/points.png" alt=""></div>
    <div class="box">
        <div class="invitation">请柬</div>
        <div class="edit">编辑</div>
        <div class="sign">签到</div>
    </div>
    <div class="box-bottom">
        <div class="gift"><img src="/static/moban/img/gift.png" alt=""></div>
        <div class="set"><img src="/static/moban/img/set.png" alt=""></div>
        <audio src="/static/moban/mp3/bg.mp3" autoplay="autoplay" loop="loop">您的浏览器不支持 audio标签。</audio>
        <div class="horn">
            <img class="music on" src="/static/moban/img/on.png"/></div>
    </div>
    <div class="bg-model-invitation"
         style="position:absolute;top:0%;left:0%;display:none;background:rgba(0,0,0,0.7);width:375px;height:666px;z-index:10;">
        <div class="cross"><img src="/static/moban/img/cross.png" alt=""></div>
        <div class="bg_model_inside"
             style="position:absolute;left:10%;top:10%;border-radius:8px;width:80%;height:70%;border:1px solid red">
            <img src="/static/moban/img/baby2.jpg" alt="">
        </div>
    </div>
    <!--签到-->
    <div class="bg-model-sign"
         style="position:absolute;top:0;left:0;display:none;width:375px;height:666px;z-index:9;
		 background:rgba(0,0,0,0.5);">
        <div class="cross2">×</div>
        <div class="bg_model_inside"
             style="position:absolute;left:15%;top:15%;border-radius:8px;width:70%;height:70%;">

            <ul class="sign_ul">
                <li>
                    <div>logo</div>
                </li>
                <li><h6>欢迎参加我们的婚礼</h6></li>
                <li>
                    <input type="text" value="宾客姓名">
                </li>

                <li>
                    <select name="" class="num">
                        <option value="">1人</option>
                        <option value="">2人</option>
                        <option value="">3人</option>
                        <option value="">4人</option>
                        <option value="">5人</option>
                        <option value="">6人</option>
                        <option value="">不出席</option>
                    </select>
                </li>
                <li>
                    <select name="" class="sex">
                        <option value="">男方</option>
                        <option value="">女方</option>
                    </select>
                </li>
                <li>
                    <input type="text" value="宾客手机号码">
                </li>
                <li class="last-li">
                    <span>提交</span> <span>关闭</span>
                </li>
                <li>
                    <p>填写手机号码会以短信提醒您准时参加婚礼</p>
                </li>
                <li>
                    <div><p>短信剩余:<em>　0　</em>条</p> <span>新人点击购买</span></div>
                </li>
            </ul>

        </div>
    </div>
    <div class="arrow"></div>
</div>


</body>
<script src="/static/moban/js/jquery-1.10.1.min.js"></script>
<script src="/static/moban/js/swiper.min.js"></script>
<script src="/static/moban/js/swiper.animate.min.js"></script>
<script src="/static/moban/js/danmu.js"></script>
<script type="text/javascript" src="/static/moban/js/data.js"></script>
<script type="text/javascript" src="/static/moban/js/swipeslider.js"></script>


<script>
    $(window).load(function () {
        $('#full_feature').swipeslider();
    });
    var mySwiper = new Swiper('.swiper-container', {
        on: {
            init: function () {
                swiperAnimateCache(this); //隐藏动画元素
                this.emit('slideChangeTransitionEnd'); //在初始化时触发一次slideChangeTransitionEnd事件
            },
            slideChangeTransitionEnd: function () {
                swiperAnimate(this); //每个slide切换结束时运行当前slide动画

            }
        },
        direction: 'vertical',
        loop: true,                           //无限循环
        /*  autoHeight:true,                   //enable auto height
          pagination: '.swiper-pagination',  //显示页数
          mode: 'vertical',// 横向滑屏
          paginationType: 'custom',         //自定义页数显示方式
          paginationCustomRender: function (swiper, current, total) {
              return current;
          },
          spaceBetween:1,             //每页相隔的距离
          slidesPerView: 1,

          // effect: 'coverflow',              //3D效果
          // grabCursor: true,                //鼠标覆盖Swiper时指针会变成手掌形状
          centeredSlides: true,            //true时，活动块会居中，而不是默认状态下的居左。
          sidesPerView: 'auto',
          loopedSlides: 50,    //loop模式下使用slidesPerview: 'auto'，还需使用该参数设置所要用到的loop个数(一般设置为本来slide的个数) 。
          coverflow: {                    //动画参数，官网的效果不是我需要的，我不需要y轴旋转
              rotate: 0,
              stretch: 10,
              depth: 60,
              modifier: 2,
              slideShadows: false,
          },
          //~~~~~解决 手机上横向滑动的时候出现卡顿的bug  start~~~~~~~~
          observer: true,                  //修改swiper自己或子元素时，自动初始化swiper
          observeParents: true,            //修改swiper的父元素时，自动初始化swiper
          touchRatio: 1,                   //解决滑动卡顿
          longSwipesRatio:0.1,
          threshold: 10,                   //如果触摸距离小于该值滑块不会被拖动
          followFinger:false,
          //~~~~~解决 手机上横向滑动的时候出现卡顿的bug end~~~~~~~~

          //swiper从一个slide过渡到另一个slide结束时执行
          onSlideChangeEnd: function (swiper) {
              swiper.update(); //swiper更新
          },*/
    });


    $(function () {
        $('.music').on('click', function () {
            if ($(this).hasClass('on')) {
                $('audio').get(0).pause();
                $(this).removeClass('on music-off');
                $(this).attr('src', 'img/off.png');
            } else {
                $('audio').get(0).play();
                $(this).addClass('on music-off');
                $(this).attr('src', 'img/on.png');
            }
        });

        // ...显藏
        $(".points").click(function () {
            $(".box").toggle();
        });

        $(".edit").click(function () {
            window.location.href = "";
        })
//请柬
        $(".invitation").click(function () {
            $(".bg-model-invitation").show();
        });
        $(".cross").click(function () {
            $(".bg-model-invitation").hide()
        });
        //签到
        $(".sign").click(function () {
            $(".bg-model-sign").show();
        });
        $(".cross2").click(function () {
            $(".bg-model-sign").hide();
        });
// 弹幕
// 数据初始化
        var Obj = $('body').barrage({
            data: data, //数据列表
            row: 6, //显示行数
            time: 1000, //间隔时间
            gap: 20, //每一个的间隙
            position: 'absolute', //绝对定位
            direction: 'bottom left', //方向
            ismoseoverclose: true, //悬浮是否停止
        })
        Obj.start();

        //添加评论
        $("#submit_barraget").click(function () {

            var val = $("#barrage_content").val();
            //此格式与dataa.js的数据格式必须一致
            var addVal = {
                text: val
            }
            //添加进数组
            Obj.data.unshift(addVal);
        });

        $("#submit_barraget").click(function () {
            $("#barrage").show();

        });
        $(document).mousemove(function (e) {
            $("#barrage").hide();

        });
//上传
        var dragImgUpload = new DragImgUpload("#drop_area", {
            callback: function (files) {
                //回调函数，可以传递给后台等等
                var file = files[0];
                console.log(file.name);
            }
        });

        var dragImgUpload = new DragImgUpload("#drop_area2", {
            callback: function (files) {
                //回调函数，可以传递给后台等等
                var file = files[0];
                console.log(file.name);
            }
        });

        var dragImgUpload = new DragImgUpload("#drop_area3", {
            callback: function (files) {
                //回调函数，可以传递给后台等等
                var file = files[0];
                console.log(file.name);
            }
        });

    })

</script>
</html>
