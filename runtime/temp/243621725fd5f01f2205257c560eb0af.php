<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"C:\wamp64\www\hunqing\wedding_platform\admin\moban\public/../application/index\view\index\find.html";i:1553759594;}*/ ?>
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
body{
	background:#EBEBEB;

}
		.content {
			width: 95%;
			height: auto;
			margin: 2.5%;
			color:#49505B;

		}

		.ip_num {
			width: 35%;
			height: 300px;
			float: left;
			/*background: red;*/
		}

		.ip_num h5 {
			width: 100%;
			height: 32px;
			line-height: 32px;
			font-size: 14px;
			color: grey;
		}

		.ip_num h5 img {
			width: 32px;
			height: 32px;
			float: left;

		}

		.ip_num ul {
			width: 100%;
			height: 168px;
			overflow: scroll;
		}

		.ip_num ul li {
			float: left;
			width: 100%;
			height: 15px;
			font-size: 12px;
			line-height: 15px;
			margin-top: 10px;
		}

		.ip_num ul li p {
			width: 20%;
			height: 100%;
			float: left;
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			text-align: center;
		}

		/*月度排行*/
		.math_num {
			width: 15%;
			height: 300px;
			/*overflow: scroll;*/
			/*background: red;*/
			float: left;
		}

		.math_num h5 {
			width: 100%;
			height: 32px;
			line-height: 32px;
			font-size: 14px;
			color: grey;
			text-align: center;
		}

		.math_num ul {
			width: 100%;
			height: 270px;
			overflow: hidden;

		}

		.math_num ul li {
			width: 100%;
			height: 20px;
			line-height: 20px;
			text-align: center;
			font-size: 12px;
			color: red;
		}

		.order {
			width: 100%;
			height: 350px;
			float: left;
			/*background: red;*/
			margin-top: 20px;
			box-shadow: gainsboro 1px 1px 1px 1px;
		}

		.option {
			width: 20%;
			height: auto;
			float: left;
		}

		.option ul {
			width: 100%;
			height: auto;
			overflow: hidden;
		}

		.option ul li {

			width: 100%;
			height: 50px;
			text-align: center;
			color: white;
			background-color: #b28b51;
			margin: 20px 0;
			line-height: 50px;

		}

		.header {
			width: 80%;
			height: 50px;
		}

		.header p {
			width: 15%;
			height: 100%;
			text-align: center;
			float: left;
			line-height: 50px;
			margin: 20px 0;
		}

		.oul {
			width: 100%;
			height: 300px;
			color:#2383A9;
		}

		.oul li {
			width: 100%;
			height: 30px;
			/*box-shadow: gainsboro 1px 1px 1px 1px;*/
		}

		.order .oul li p {
			width: 15%;
			height: 100%;
			float: left;
			text-align: center;
		}

		#header .nav_list li {
			width: 20%;
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
		<div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
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
		<!--访问量-->
		<div class="ip_num">
			<h5><img src="img/tongzhi.png" alt="">客户访问流量</h5>
			<ul>
				<li>
					<p>135699683395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>
				<li>
					<p>13569968395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>
				<li>
					<p>135699683395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>
				<li>
					<p>13569968395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>
				<li>
					<p>135699683395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>
				<li>
					<p>13569968395</p>
					<p>鹿晗</p>
					<p>成功提交</p>
					<p>访问33</p>
					<p>2019-1-11</p>
				</li>

			</ul>
		</div>
		<div class="math_num">
			<h5>月广告访问量分析</h5>
			<ul>
				<li>
					<p>一月：<span>300</span></p>
				</li>
				<li>
					<p>二月：<span>355</span></p>
				</li>
				<li>
					<p>三月：<span>450</span></p>
				</li>
				<li>
					<p>四月：<span>300</span></p>
				</li>
				<li>
					<p>五月：<span>355</span></p>
				</li>
				<li>
					<p>六月：<span>450</span></p>
				</li>
				<li>
					<p>七月：<span>300</span></p>
				</li>
				<li>
					<p>八月：<span>355</span></p>
				</li>
				<li>
					<p>九月：<span>450</span></p>
				</li>
				<li>
					<p>十月：<span>300</span></p>
				</li>
				<li>十一月：<span>355</span></p>
				</li>
				<li>
					<p>十二月：<span>450</span></p>
				</li>

			</ul>
		</div>

		<!--订单列表-->
		<div class="order">
			<!-- 操作 -->
			<div class="option">
				<ul>
					<li>全部</li>
					<li>上一页</li>
					<li>下一页</li>
					<li>删除</li>
				</ul>
			</div>
			<div class="header" style="color:#2383A9;">
				<p>选择</p>
				<p>提交时间</p>
				<p>姓名</p>
				<p>联系电话</p>
				<p>需求类型</p>
				<ul class="oul">
					<li>
						<p><input type="checkbox" name="order"></p>
						<p>2019-02-27</p>
						<p>张三</p>
						<p>13569968395</p>
						<p>婚纱照</p>
					</li>
					<li>
						<p><input type="checkbox" name="order"></p>
						<p>2019-02-27</p>
						<p>张三</p>
						<p>13569968395</p>
						<p>婚纱照</p>
					</li>
					<li>
						<p><input type="checkbox" name="order"></p>
						<p>2019-02-27</p>
						<p>张三</p>
						<p>13569968395</p>
						<p>婚纱照</p>
					</li>

				</ul>
			</div>

		</div>
	</div>
</body>

</html>