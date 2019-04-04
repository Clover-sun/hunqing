<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/www/wwwroot/szz/public/../application/index/view/index/custom.html";i:1554259493;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>帮助客服</title>
	<link rel="stylesheet" href="/static/index/css/public.css">
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
		#header{
			width:100%;
			height:100px;
			background:#416482;
		}
		.content{
			width:100%;
			height:578px;
		}
		.top{
			width:100%;
			height:550px;
		}
		
		.bottom{
			width:100%;
			height:200px;
			padding-top:70px;
			color:#AF8B50;
		}
		.bottom .box{
			width:15%;
			height:auto;
			margin:0 auto;
		}
		.bottom p{
			font-size:22px;
			text-align:left;
			margin:10px 0;

		}
		.xian {
			height: 1px;
			margin-top:40px;
			text-align: center;
			border-top: 1px solid #e2e2e2;
		}
		.txt{
			position: relative;
			top:-12px;
			font-size:20px;
			background: #fff;
			display: inline-block;
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
	<div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
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
	<div class="top">
		<img src="<?php echo $info['pic']; ?>" alt="" style="width:100%;height:100%;">
	</div>
	<div class="bottom">
		<div class="box">
		<p><span>客 服QQ:</span><?php echo $info['qq']; ?></p>
		<p><span>客服微信:</span><?php echo $info['weixin']; ?></p>
		<p><span>客服电话:</span><?php echo $info['phone']; ?></p>

		</div>

		<div class="xian">
			<span class="txt">狮子座婚礼管家.坚持口碑营销以服务说话</span>
		</div>
	</div>
</div>
</body>
</html>