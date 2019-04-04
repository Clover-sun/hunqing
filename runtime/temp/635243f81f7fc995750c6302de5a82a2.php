<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp64\www\moban\public/../application/index\view\index\find.html";i:1553077094;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>客源查询</title>
	<link rel="stylesheet" href="/static/index/css/public.css">
	<style>
		.content{
			width: 95%;
			height: auto;
			margin: 2.5%;
		}
		.ip_num{
			width: 35%;
			height: 200px;
			/*background: red;*/
		}
		.ip_num h5{
			width: 100%;
			height: 32px;
			line-height: 32px;
			font-size: 14px;
			color: grey;
		}
		.ip_num h5 img{
			width: 32px;
			height: 32px;
			float: left;

		}
		.ip_num ul{
			width: 100%;
			height: 168px;
			overflow: scroll;
		}
		.ip_num ul li{
			float: left;
			width: 100%;
			height: 15px;
			font-size: 12px;
			line-height: 15px;
			margin-top: 10px;
		}
		.ip_num ul li p{
			width: 20%;
			height: 100%;
			float: left;
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			text-align: center;
		}
		.order{
			width: 100%;
			height: 350px;
			float: left;
			/*background: red;*/
			margin-top: 20px;
			box-shadow: gainsboro 1px 1px 1px 1px;
		}
		.header{
			width: 100%;
			height: 50px;
		}
		.header p{
			width: 20%;
			height: 100%;
			text-align: center;
			float: left;
			line-height: 50px;
			margin: 20px 0;
		}
		.oul{
			width: 100%;
			height: 300px;
		}
		.oul li{
			width: 100%;
			height: 30px;
			/*box-shadow: gainsboro 1px 1px 1px 1px;*/
		}
		.order .oul li p{
			width: 20%;
			height: 100%;
			float: left;
			text-align: center;
		}
	</style>
</head>
<body>
<!--头部导航栏-->
<div id="header">
	<div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
	<ul class="nav_list">
		<li><a href="/index/index"><p>首页</p><span></span></a></li>
		<li><a href="/index/find"><p>客源查询</p><span></span></a></li>
		<li><a href="/index/ad"><p>广告管理</p><span></span></a></li>
		<li><a href="/index/custom"><p>客服帮助</p><span></span></a></li>
	</ul>
</div>
<!--内容区-->
<div class="content">
	<!--访问量-->
	<div class="ip_num">
		<h5><img src="/static/index/img/tongzhi.png" alt="">客户访问流量</h5>
		<ul>
			<li>
				<p>135699683951356996839513569968395</p>
				<p>鹿晗</p>
				<p>成功提交</p>
				<p>访问33</p>
				<p>2019-1-11</p>
			</li>
		</ul>
	</div>
	<!--订单列表-->
	<div class="order">
		<div class="header">
			<p>选择</p>
			<p>提交时间</p>
			<p>姓名</p>
			<p>联系电话</p>
			<p>需求类型</p>
		</div>
		<ul class="oul">
			<li><p><input type="checkbox" name="order"></p>
				<p>2019-02-27</p>
				<p>张三</p>
				<p>13569968395</p>
				<p>婚纱照</p>
			</li>		
		</ul>
	</div>
</div>
</body>
</html>