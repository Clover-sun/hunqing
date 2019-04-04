<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\moban\public/../application/index\view\index\add.html";i:1553077094;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>广告管理</title>
	<link rel="stylesheet" href="/static/index/css/public.css">
	<link rel="stylesheet" href="/static/index/css/style.css">


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

.content li{
	margin:10px 30px ;
	width:400px;
	float:left;
	font-size：16px;
}
.content li img{
	width:100%;
	height:200px;
}

form{
	width:330px;

}

		.img_div{min-height: 100px; min-width: 100px;}
		.isImg{width: 120px; height: 120px; position: relative; float: left; margin-left: 10px;}
		.removeBtn{position: absolute; top: 0; right: 0; z-index: 11; border: 0px; border-radius: 50px; background: red; width: 22px; height: 22px; color: white;}
		h4{
			margin:10px 0;
		}
		.edit{
			clear:both;
			font-size:24px;
			width:200px;
			height:50px;
			line-height:50px;
			text-align:center;
			background: yellowgreen;
			color:white;
			margin-left:40%;
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
<ul class="content">
	<li>
		<h4>Logo</h4>
		<img src="/static/index/img/logo.jpg" alt="">
	</li>
	<li>
		<h4>尾页广告图片</h4>
		<img src="/static/index/img/logo.jpg" alt="">


	</li>
<li>
	<h4>联系我们</h4>
	
		<div class="tit">静宁巴黎经典</div>
		<div class="addres">地址：郑州京杭大酒店</div>
		<div class="photo">电话：0371-123123213</div>
		<div class="jishu">技术支持：静宁巴黎经典</div>
	
</li>

</ul>
	<a href="/index/edit">
		<div class="edit">编辑</div>
	</a>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/static/index/js/upload.js"></script>
<script type="text/javascript">
	var dragImgUpload = new DragImgUpload(".drop_area1",{
		callback:function (files) {
			//回调函数，可以传递给后台等等
			var file = files[0];
			console.log(file.name);
		}
	});


	$(function() {
		var objUrl;
		var img_html;
		$("#myFile").change(function() {
			var img_div = $(".img_div");
			var filepath = $("input[name='myFile']").val();
			for(var i = 0; i < this.files.length; i++) {
				objUrl = getObjectURL(this.files[i]);
				var extStart = filepath.lastIndexOf(".");
				var ext = filepath.substring(extStart, filepath.length).toUpperCase();
				/*

				描述：鉴定每个图片上传尾椎限制
				* */
				if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
					$(".shade").fadeIn(500);
					$(".text_span").text("图片限于bmp,png,gif,jpeg,jpg格式");
					this.value = "";
					$(".img_div").html("");
					return false;
				} else {
					/*
					 若规则全部通过则在此提交url到后台数据库
					 * */
					img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)' style='height: 100%; width: 100%;' /><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button></div>";
					img_div.append(img_html);
				}
			}
			/*
			描述：鉴定每个图片大小总和
			* */
			var file_size = 0;
			var all_size = 0;
			for(j = 0; j < this.files.length; j++) {
				file_size = this.files[j].size;
				all_size = all_size + this.files[j].size;
				var size = all_size / 1024;
				if(size > 5000) {
					$(".shade").fadeIn(500);
					$(".text_span").text("上传的图片大小不能超过100k！");
					this.value = "";
					$(".img_div").html("");
					return false;
				}
			}

			return true;
		});
		/*

		描述：鉴定每个浏览器上传图片url 目前没有合并到Ie
		 * */
		function getObjectURL(file) {
			var url = null;
			if(window.createObjectURL != undefined) { // basic
				url = window.createObjectURL(file);
			} else if(window.URL != undefined) { // mozilla(firefox)
				url = window.URL.createObjectURL(file);
			} else if(window.webkitURL != undefined) { // webkit or chrome
				url = window.webkitURL.createObjectURL(file);
			}
			return url;
		}
	});
	/*
	  描述：上传图片附带删除 再次地方可以加上一个ajax进行提交到后台进行删除
	 * */
	function removeImg(r){
		$(r).parent().remove();
	}
	/*
	  描述：上传图片附带放大查看处理
	 * */
	function lookBigImg(b){
		$(".shadeImg").fadeIn(500);
		$(".showImg").attr("src",$(b).attr("src"))
	}
	/*

	  描述：关闭弹出层
	 * */
	function closeShade(){
		$(".shade").fadeOut(500);
	}
	/*

	  描述：关闭弹出层
	 * */
	function closeShadeImg(){
		$(".shadeImg").fadeOut(500);
	}

</script>

</html>