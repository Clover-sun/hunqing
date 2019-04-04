<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"D:\wamp64\www\mb\wedding_platform\admin\moban\public/../application/admin\view\template\see2.html";i:1553587396;}*/ ?>
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

        .swiper-container{
            width: 375px;
            height:667px;
            margin:0 auto;
            position:relative;
        }
        .one-slide {
            background: url("/static/moban/img/wedding.gif") no-repeat top/contain;
            background-size: 100% 667px;
            text-align: center;
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
            overflow:hidden;

        }

        .ani {
            font-size: 30px;
        }

        .content {
            font-size: 30px;
            text-align: center;
            width: 260px;
            margin-left: 40px;
        }

        .ani img {
            width: 80%;
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

        }


        .box-bottom {
            position: fixed;
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
            background:red;
            margin:0 auto;
        }

        .guest_ul li {
            width: 90%;
            height: 30px;
            margin: 20px auto;
        }

        .guest_ul li span{
            color:black;
        }
        .guest_ul li input{
            width: 80%;
            height: 100%;
            text-align:center;
            color: grey;
            font-size: 15px;
            border-bottom: 1px solid white;
            outline: none;

        }

        .guest_ul li .tijiao {
            width:60%;
            height: 100%;
            padding:3px 10px;
            line-height: 30px;
            text-align: center;
            background:red;
            color: white;
            border-radius: 15px;
            box-shadow: 0 0 0 1px white, 0 0 0 3px red;
        }

        .guest_ul0 {
            width: 100%;
            height: 200px;
            background: white;
        }

        .guest_ul0 .last-li {
            display: flex;
            justify-content: space-around;
        }

        .guest_ul0 .last-li a {
            margin-top: 80px;
            width: 130px;
            height: 30px;
            font-size: 20px;
            text-align: center;
            padding: 3px 10px;
            background: red;
            border-radius: 15px;
            color: white;
            box-shadow: 0 0 0 1px white, 0 0 0 3px red;
        }

        .fox1 img, .fox4 img {
            width: 100%;
            height: 350px;
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
            <p class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;<img src="/static/moban/img/2-2.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                结婚最光荣

            </p>
            <p class="ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;<img src="/static/moban/img/2-1.png" alt="">
            </p>

            <div>
                <p>
                    <span>王小明</span>♡<span>李翠花</span>
                </p>
                <p>2019-02-18　11:00</p>
                <p>和平饭店</p>
            </div>
            <p class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="5s"
               swiper-animate-delay="0.3s">
                <img src="/static/moban/img/10-2.png" alt="">
            </p>

        </div>
        <div class="swiper-slide grey-slide">
            <p class="ani" swiper-animate-effect="fadeInDown " swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="/static/moban/img/7-4.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInDown" swiper-animate-duration="5s" swiper-animate-delay="0.3s"
               style="text-align:center;">
                全心全意为人民服务
            </p>
            <p class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="/static/moban/img/7-4.png" alt="">
            </p>

            <div class="content" style="font-size:20px;color:red;text-align:left;">
                <p>　同志，你好！经党组织批准，我们正式结为夫妻，举行婚礼!</p>
                <p>时间:<span>2019年09月09日09时09分</span></p>
                <p>地址:和平饭店</p>
            </div>
            <p class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="/static/moban/img/7-4.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="5s"
               swiper-animate-delay="0.3s" style="position:relative;top:150px;text-indent:20px;">
                新郎:丁丁
                <br>
                新娘:李丽
                <img src="/static/moban/img/10-2.png" alt="">
            </p>

        </div>

        <div class="swiper-slide goldenrod-slide">
            <p class="ani" swiper-animate-effect="bounceInDown" swiper-animate-duration="3s"
               swiper-animate-delay="1s">
                <img src="/static/moban/img/10-1.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInDown" swiper-animate-duration="3s"
               swiper-animate-delay="1.5s">
                <img src="/static/moban/img/10-2.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="4s"
               swiper-animate-delay="2s" style="text-align:center;color:red;font-size:26px;">
                10:00-11:00　嘉宾签到
                <br>
                11:00-11:40 证婚仪式
                <br>
                11:40-12:00 感恩仪式
                <br>
                12:00-14:00 答谢午宴
            </p>
            <p class="ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="2s"
               swiper-animate-delay="0s">
                <img src="/static/moban/img/10-3.png" alt="">
            </p>
        </div>
        <div class="swiper-slide goldenrod-slide">
            <p class="ani">
                <img src="/static/moban/img/10-1.png" alt="">
                <img src="/static/moban/img/10-1.png" alt="">

            </p>
            <p class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="3s"
               swiper-animate-delay="1.5s">
                <img src="/static/moban/img/10-2.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="4s"
               swiper-animate-delay="2s" style="color:red;font-size:26px;">
                <span>　　艰苦奋斗是金坷垃撒大家克利夫兰空间的撒即可浪费金坷垃撒大家看来房间卡圣诞节快乐放假喀什东路健康减肥卡萨丁尽快尽快
                </span>
            </p>
            <p class="ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="2s"
               swiper-animate-delay="0s">
                <img src="/static/moban/img/10-3.png" alt="">
            </p>
        </div>

        <div class="swiper-slide three-slide">
            <p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"
               swiper-animate-delay="0.5s">
                <img src="/static/moban/img/11-1.png" alt="">
            </p>
            <div class="fox fox1">
                <img src="/static/moban/img/m1.jpg" alt="">
            </div>

        </div>
        <div class="swiper-slide three-slide">
            <p>
                <img src="/static/moban/img/2-1.png" alt="">
            </p>
            <div class="fox fox1">
                <img src="/static/moban/img/m1.jpg" alt="">
            </div>
            <p>
                <img src="/static/moban/img/2-1.png" alt="">
            </p>
        </div>
        <div class="swiper-slide three-slide">
            <p>
                <img src="/static/moban/img/2-1.png" alt="">
            </p>
            <div class="fox fox1">
                <img src="/static/moban/img/m1.jpg" alt="">
            </div>
            <p>
                <img src="/static/moban/img/2-1.png" alt="">
            </p>
        </div>

        <div class="swiper-slide grey-slide">
            <p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"
               swiper-animate-delay="0.5s">
            </p>
            <div class="fox fox2">
                <img src="/static/moban/img/m2.jpg" alt="">
                <img src="/static/moban/img/m3.jpg" alt="">
            </div>

        </div>
        <div class="swiper-slide yellowgreen-slide">
            <p class="ani three-slide-ani" swiper-animate-effect="fadeInLeftBig" swiper-animate-duration="1.5s"
               swiper-animate-delay="0.5s">
            </p>
            <div class="fox fox4">
                <img src="/static/moban/img/m6.jpg" alt="">
            </div>

        </div>
        <div class="swiper-slide silver-slide">
            <img src="/static/moban/img/2-1.png" alt="">
            <img src="/static/moban/img/2-1.png" alt="">

            <p class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s"
               swiper-animate-delay="0.3s">
            <ul class="guest_ul0">
                <li class="last-li">
                    <a href="">联系新郎</a><a href="">联系新娘</a>
                </li>
            </ul>
            </p>
            <p class="ani">
                <img src="/static/moban/img/2-1.png" alt="">
            </p>
        </div>
        <div class="swiper-slide grey-slide">
            <p class="ani" swiper-animate-effect="bounceInDown" swiper-animate-duration="5s"
               swiper-animate-delay="0.3s">
                &nbsp;&nbsp;<img src="/static/moban/img/2-1.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="5s"
               swiper-animate-delay="0.3s">
                &nbsp;&nbsp;<img src="/static/moban/img/7-4.png" alt="">
            </p>
            <p class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="5s" swiper-animate-delay="0.3s">
                &nbsp;&nbsp;<img src="/static/moban/img/7-4.png" alt="">
            </p>
            <div class="danmu_box">
                <input type="text" class="form-control" name="" id="barrage_content" placeholder="请输入祝福的话语">
                <div class="btn btn-primary" id="submit_barraget">发送</div>
            </div>

        </div>
        <!--<div class="swiper-slide silver-slide">
            <p class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s"
               swiper-animate-delay="0.3s">
                <img src="img/2-1.png" alt="">
            <form action="">
                <ul class="guest_ul">
                    <li>
                        <span>姓　名</span><input type="text">
                    </li>
                    <li>
                        <span>联系方式</span><input type="text">
                    </li>
                    <li>
                        <span>是否参加</span><input type="text">
                    </li>
                    <li>
                        <span>参加人数</span<input type="text">
                    </li>
                    <li>
                         <div class="tijiao">提交</div>
                    </li>
                </ul>
            </form>

            <img src="img/2-1.png" alt="">

            </p>
        </div>-->

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
            window.location.href="bianji.html?id=<?php echo $id; ?>";
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
