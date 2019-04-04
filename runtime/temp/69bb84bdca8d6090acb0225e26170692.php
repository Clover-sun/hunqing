<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/index\view\index\index.html";i:1554368301;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="/static/index/css/public.css">

    <script src="/static/admin/javascript/jquery.js"></script>

    <style>


        .content {
            width: 100%;
            height: 100%;
            margin-top:15px;
            clear:both;
        }

        #header{
            width:100%;
            height:100px;
            background:#416482;
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
        }

        /*模板*/
        .templet {
            width: 60%;
            height: 700px;
            float: left;
            margin:0 2.5%;
        }
        .templet #nav  ul span{
            font-size:24px;
            float:left;
            color:#CDCDCD;
        }

        .login {
            width: 32%;
            height: 400px;
            margin-top:5%;
            float: left;
        }

        .login h1 {
            width: 100%;
            height: 100px;
            line-height: 100px;
            text-align: center;
            color: #b28b51;
            font-size:40px;
            font-weight:100;
            letter-spacing:37px;

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
        }

        nav li {
            display: block;
            float: left;
            width:20%;
            height: 100px;
            text-decoration:none;
            font-size:26px;
             color:#CDCDCD;
            margin-left:80px;
        }

        nav li:hover {
            color: #b28b51;
        }
        .active{
            color: #b28b51;
        }
        section {
            width: 100%;
            height: 600px;
            overflow-y:scroll;
            overflow-x:hidden;
            margin:0;
            padding:0;

        }

        .ul_kids {
            width: 100%;
            height:auto;
            margin-top:-20px;
        }

        .ul_kids .kids_list {
            width:200px;
            height:300px;
            float: left;
            margin:20px 10px;
            box-shadow: gainsboro 2px 2px 2px 2px;

        }
        .ul_kids .kids_list .pic{
            width:200px;
            height:300px;
            position:relative;
        }
        .ul_kids .kids_list img {
            width:96%;
            height:260px;
            padding:5px;

        }

        .ul_kids .kids_list p {
            color: black;
            width: 100%;
            height: 15px;
            font-size: 14px;
            text-align: center;
            line-height: 15px;
            float: left;
        }

        .ul_kids .kids_list .pic .edit{
            width:120px;
            height:50px;
            line-height:50px;
            background:#D1BD71;
            color:white;
            font-size:16px;
            display:none;
            position:absolute;
            top:100px;
            left:42px;

        }
        .ul_kids .kids_list .pic:hover .edit{
            display:block;
            transition-duration:3s;
        }
        .edit a{
            text-decoration:none;
            color:white;
        }
/* ------------ */
.nav_list a{
    color:white;
    text-decoration:none;
}
#header .nav_list{
    width:1000px;
    float:right;
}
#header .nav_list li{
    width:180px;
    height:100%;
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

           <a href="/logs/logout" id=""><i class="icon-signout"></i>安全退出</a>

    </ul>
</div>
<!--内容区-->
<div class="content">
    <p id="vip">VIP:<?php echo $info['cet']==1?'剩余天数'.':'.$info['cetval'].'天':'VIP剩余次数'.':'.$info['cetvas'].'次'; ?></p>


    <!--模板-->
    <div class="templet">
        <!--导航栏部分HTML代码-->
        <nav id="nav">

            <ul>
                <span>婚礼请柬在线编辑</span>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                <li class="active" ><?php echo $vo['cate']; ?></li>
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
                        <li class="kids_list">
                            <div class="pic">
                                <div class="edit">
                                    <!--<a href="/index/see?id=<?php echo $so['id']; ?>" target="_blank">-->
                                    <!--点击编辑                    </a>-->
                                    <button class="see"  name="<?php echo $so['id']; ?>">点击编辑</button>
                                </div>
                                <img src="<?php echo $so['img']; ?>" alt="">
                                <p><?php echo $so['name']; ?></p>
                            </div>

                            <!--<button>查看</button>-->

                        </li>
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


<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script>
<script>
    //弹出模板层
    $(".see").click(function () {
        var id = $(this).attr('name');
        // layer.alert(id);
        $.ajax({
            url:'/index/see',
            type:'get',
            data:{id:id},
            success:function (data) {
                layer.open({
                    type:1,
                    title: '编辑模板',
                    // position:'absolute',
                    shadeClose: true,//点击阴影处关闭
                    skin: 'layui-layer-demo', //加上边框
                    area: ['900px', '800px'], //宽高
                    content: data
                });
            }

        });

    });
</script>
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
                this.className = 'active';
                oDiv[this.index].style.display = "block"
            }
            for (var m = 1; m < oNav.length; m++) {
                oNav[m].className = '';
                oDiv[m].style.display = "none";
            }
        };
        $(function() {
            $('#nav ul li').click(function() {
                var i = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                $('#nav ul li').eq(i).addClass('active').siblings().removeClass('active');
            })
        });
    
    };


</script>
</html>