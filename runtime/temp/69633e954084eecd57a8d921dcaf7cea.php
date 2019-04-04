<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"C:\wamp64\www\hunqing\wedding_platform\admin\moban\public/../application/index\view\index\index.html";i:1553832065;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="/static/index/css/public.css">
    <style>


        .content {
            width: 100%;
            height: 100%;
        }

        #vip {
            width:10%;
            height:40px;
            line-height:40px;
            font-size:18px;
            float:right;
            text-align:center;
            color:#B28B51;
            margin:10px 100px;
            border:2px solid #B28B51;
        }

        /*模板*/
        .templet {
            width: 60%;
            height: 700px;
            /*background: gainsboro;*/
            float: left;
            margin: 0 2.5%;
            box-shadow: gainsboro 1px 1px 1px 1px;
        }

        .login {
            width: 35%;
            height: 400px;
            /*background: goldenrod;*/
            float: left;
            box-shadow: gainsboro 2px 2px 2px 2px;
        }

        .login h1 {
            width: 100%;
            height: 100px;
            line-height: 100px;
            text-align: center;
            color: #b28b51;
            font-size:38px;
            font-weight:100;
            letter-spacing:20px;

        }

        /*二维码*/
        .code {
            width: 200px;
            height: 200px;
            float: left;
            margin: 5%;
        }

        .customer {
            width:40%;
            height: 200px;
            float: left;
            margin:2%;
        }

        .customer h2 {
            width: 100%;
            height: 80px;
            text-align: center;
            line-height: 80px;
            color: #b28b51;
            font-size:33px;
            letter-spacing:10px;
            font-weight:100;
        }

        .customer input {
            width:100%;
            height: 50px;
            border:2px solid #b28b51;
            background:white;
            font-size:32px;
            line-height: 50px;
            text-align: center;
            color: #b28b51;
            letter-spacing:10px;
            font-weight:100;
        }

        .updata {
            width:100%;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin-top: 20px;
            color: white;
            background: #b28b51;
            font-size:32px;
            letter-spacing:10px;
            font-weight:100;
        }

        /*选项卡*/
        * {
            text-align: center;
        }

        nav {
            width: 100%;
            height: 100px;
            line-height: 100px;
        }

        nav ul {
            width: 100%;
            height: 100%;
            overflow: hidden;
            margin: 0;
        }

        nav li {
            display: block;
            float: left;
            width: 30%;
            height: 100px;
            text-decoration:none;
            font-size:30px;
        }

        nav li:hover {
            color: #b28b51;

        }

        section {
            width: 100%;
            height: 600px;
            overflow: scroll;

        }

        .ul_kids {
            width: 100%;
            height: auto;
        }

        .ul_kids .kids_list {
            width: 160px;
            height: 280px;
            box-shadow:gainsboro 1px 1px 2px 2px; 
            float: left;
            margin: 20px 32px;
        }

        .ul_kids .kids_list img {
            width: 150px;
            height: 230px;
            padding: 5px;
        }

        .ul_kids .kids_list p {
            width: 100%;
            height: 15px;
            font-size: 14px;
            text-align: center;
            line-height: 15px;
            float: left;
        }
/* ------------ */
#header .nav_list li{
    width:20%;
    height: 100%;
    text-align: center;
    float: left;
    color: white;
}
#header .nav_list li p{
    height:60px;
    line-height:80px;
}
#header .nav_list li span{
    height:30px;
    line-height:20px;
}
    </style>
</head>
<body>
<!--头部导航栏-->
<div id="header">
    <div class="logo"><img src="<?php echo $info['logo']; ?>" alt="logo"></div> 
    <ul class="nav_list">
        <li><a href="/index/index"><p>首页</p><span>HOME</span></a></li>
		<li><a href="/index/video"><p>婚礼视频</p><span>VIDEO</span></a></li>
		<li><a href="/index/find"><p>客源查询</p><span>QUERY</span></a></li>
		<li><a href="/index/ad"><p>广告管理</p><span>Administration</span></a></li>
		<li><a href="/index/custom"><p>客服帮助</p><span>Help</span></a></li>
    </ul>
</div>
<!--内容区-->
<div class="content">
    <p id="vip"><?php echo $info['cet']==1?'剩余使用时间'.':'.$info['cetval']:'VIP剩余次数'.':'.$info['cetvas']; ?></p>


   
      
    <!--模板-->
    <div class="templet">
        <!--导航栏部分HTML代码-->
        <nav id="nav">
            <ul>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                <li class="act"><?php echo $vo['cate']; ?></li>
                <!--<li><?php echo $vo['cate']; ?></li>-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </nav>
        <!--内容部分HTML代码-->
        <div id="container">

            <?php if(is_array($template) || $template instanceof \think\Collection || $template instanceof \think\Paginator): if( count($template)==0 ) : echo "" ;else: foreach($template as $key=>$row): ?>
            <section class="tab">
                <ul class="ul_kids">

                    <?php if(is_array($row['template']) || $row['template'] instanceof \think\Collection || $row['template'] instanceof \think\Paginator): if( count($row['template'])==0 ) : echo "" ;else: foreach($row['template'] as $key=>$so): ?>
                    <a href="/index/see?id=<?php echo $so['id']; ?>" target="_blank">
                        <li class="kids_list">
                            <img src="<?php echo $so['img']; ?>" alt="">
                            <p><?php echo $so['name']; ?></p>

                            <!--<button>查看</button>-->

                        </li>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </section>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>


    <!--二维码登录-->
    <div class="login">
        <h1>客户手机端登录</h1>
        <img src="<?php echo $er; ?>" alt="" class="code">
        <div class="customer">
            <h2>客户ID</h2>
            <input type="text" maxlength="6" value="123456" disabled="disabled">
            <div class="updata">刷新</div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">

    window.onload = function () {
        //获取 li 也就是选项卡选项tab
        var nav = document.getElementById('nav');
        var oNav = nav.getElementsByTagName('li');
        //获取 包裹在container里面的section（内容）
        var container = document.getElementById('container');
        // alert(container);
        var oDiv = container.getElementsByClassName('tab');

        //使用 循环依次得到li
        for (var i = 0; i < oNav.length; i++) {
            oNav[i].index = i;
            //每一次得到li后执行鼠标点击操作则触发函数function
            oNav[i].onclick = function () { //此处除了可以使用onclick，还可以使用onmouseover
                //在li的个数内依次展示内容
                for (var i = 0; i < oNav.length; i++) {
                    oNav[i].className = '';
                    oDiv[i].style.display = "none";
                }
                this.className = 'act';
                oDiv[this.index].style.display = "block"
            }
            for (var m = 1; m < oNav.length; m++) {
                oNav[m].className = '';
                oDiv[m].style.display = "none";
            }
        };

    
    };
</script>
</html>