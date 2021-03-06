<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/szz/public/../application/index/view/index/video.html";i:1554283476;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>婚礼视频</title>
	<link rel="stylesheet" href="/static/index/css/public.css">
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			width: 100%;
			height: 100%;
			text-align:center;
			background: #EBEBEB;
			/*background-image:url('/static/index/img/videobg.png');*/
			background-repeat: repeat-x;
		}
		.content{
			width: 100%;
			height: 100%;
			margin-top: 100px;
		}
		#header{
			width:100%;
			height:100px;
			background:#416482;
		}
		#nav{
			width: 20%;
			height:auto;
			float: left;

		}
		#nav ul li{
			width: 100%;
			height: 50px;
			line-height: 50px;
			text-align: center;
			color:#CDCDCD;
			list-style: none;
			font-size: 25px;
			margin: 5% 0;
			
		}
		#nav li:hover{
			color:#b28b51;
		}
		.active{
			color:#b28b51;
		}

		#container{
			width:70%;
			height: auto;
			float: left;

		}
		

		.tab {
			width: 100%;
			height: auto;

		}
		.ul_kids {
			width: 100%;
			height: auto;
			overflow:hidden;
		}

		.ul_kids .kids_list {
			width:30%;
			height:280px;
			background:white;
			margin:1%;
			float:left;
		}

		.ul_kids .kids_list video {
			width: 100%;
			height:250px;
			outline:0;
			object-fit:fill;
		}

		.ul_kids .kids_list p {
			width: 100%;
			height: 30px;
			font-size: 14px;
			text-align: center;
			line-height: 30px;
			float: left;
			color: #cababa;
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
}	</style>
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
<div class="content">
	
	<nav id="nav">
			<ul>
				<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$row): ?>
				<li class="active"><?php echo $row['cate']; ?></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
	</nav>
	<!--内容部分HTML代码-->
	<div id="container">
		<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $key=>$info): ?>
		<section class="tab">
			<ul class="ul_kids">
				<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$shi): ?>
				<li class="kids_list" >
					<video src="<?php echo $shi['vde']; ?>"  id="<?php echo $shi['id']; ?>" class="video" controls="controls" controlsList="nodownload" poster="<?php echo $shi['pic']; ?>" ></video>
					<p><?php echo $shi['cten']; ?></p>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

	var videos = document.getElementsByClassName('video');
	for (var i = videos.length - 1; i >= 0; i--) {
		(function(){
			var p = i;
			videos[p].addEventListener('play',function(){
				pauseAll(p);
			})
		})()
	}
	function pauseAll(index){
		for (var j = videos.length - 1; j >= 0; j--) {
			if (j!=index) videos[j].pause();
		}
	};

    window.onload=function(){

        //获取 li 也就是选项卡选项tab
        var nav = document.getElementById('nav');
        var oNav = nav.getElementsByTagName('li');
        //获取 包裹在container里面的section（内容）
        var container = document.getElementById('container');
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