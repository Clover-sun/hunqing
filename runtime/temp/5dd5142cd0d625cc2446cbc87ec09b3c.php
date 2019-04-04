<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/index\view\temp\bianji.html";i:1554261880;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>编辑</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
	<script src="/static/moban/js/laydate/laydate.js"></script>

	<style>

		li{
			list-style: none;
		}
		body{
			width: 100%;
			height: 100%;
			background: #f2e7d3;
		}
		.content{
			width: 500px;
			min-height: 500px;
			margin: 2% auto;
			/*background: red;*/
		}
		.content ul{
			width: 100%;
			height: auto;
			padding: 0;
		}
		.content ul li{
			display: block;
			width: 100%;
			height: 50px;
			/*border: 1px solid blue;*/
			line-height: 50px;
			box-shadow: #5f5c4f 1px 1px 1px 1px;
			margin: 10px 0;
		}
		.content ul li label{
			display: block;
			width: 30%;
			height: 100%;
			font-size: 16px;
			/*background: red;*/
			float: left;
			text-align: center;
		}
		.content ul li input{
			width: 69%;
			height: 100%;
			float: left;
			border: none;
			background: none;
		}
		.content ul li select{
			width: 69%;
			height: 100%;
			float: left;
			border: none;
			background: none;
			color:grey;
			outline:none;
		}
		/*预览图片样式*/
		#xmTanImg{
			width: 500px;
			height: auto;
			overflow: hidden;
		}
		#upload input{
			display: block;
			float: left;
			width: 30%;
			height: 100%;
		}
		.submit{

			width: 100%;
			height: 50px;
			background: #b28b51;
			color: white;
			text-align: center;
			line-height: 50px;
			font-size: 18px;
			margin-top: 10%;
		}
		</style>
</head>
	<body>
		<header style="width: 100%;text-align: center;line-height: 100px;font-size: 35px;">请填写您的信息</header>
		<form action="/temp/chuli" method="post">

			<div class="content">
				<ul>
					<li>
						<label>新郎姓名:</label><input type="text" name="name" placeholder="请输入新郎的姓名">
					</li>
					<li>
						<label>新娘姓名:</label><input type="text" name="name1" placeholder="请输入新娘的姓名">
					</li>
					<li>
						<label>联系方式:</label><input type="number" name="num" placeholder="请输入手机号">
					</li>
					<li>
						<label>微 信 号:</label><input type="text" name="weixin" placeholder="请输入微信号">
					</li>
					<li>

						<label>类   型:</label>

						<select name="type" id="">
							<?php foreach($cate as $vo): ?>
							<option value="<?php echo $vo['cate']; ?>"><?php echo $vo['cate']; ?></option>
							<?php endforeach; ?>
						</select>


					</li>

					<li>
						<label>婚礼时间：</label><input  id="test1" placeholder="请选择时间" name="date">
					</li>

					<li>
						<label>婚礼地点：</label><input type="text" placeholder="请输入地点" name="location">
					</li>

				</ul>
				<input type="hidden" value="<?php echo $sid; ?>" name="id" >
				<button class="submit" type="submit">提交</button>
			</div>

		</form>

		<script>
            //执行一个laydate实例
            laydate.render({
                elem: '#test1' //指定元素
            });
		</script>

		<script type="text/javascript">

            //判断浏览器是否支持FileReader接口
            if (typeof FileReader == 'undefined') {
            	document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
                //使选择控件不可操作
                document.getElementById("xdaTanFileImg").setAttribute("disabled", "disabled");
            }

            //选择图片，马上预览
            function xmTanUploadImg(obj) {
            	var file = obj.files[0];

            	console.log(obj);console.log(file);
                console.log("file.size = " + file.size);  //file.size 单位为byte

                var reader = new FileReader();

                //读取文件过程方法
                reader.onloadstart = function (e) {
                	console.log("开始读取....");
                }
                reader.onprogress = function (e) {
                	console.log("正在读取中....");
                }
                reader.onabort = function (e) {
                	console.log("中断读取....");
                }
                reader.onerror = function (e) {
                	console.log("读取异常....");
                }
                reader.onload = function (e) {
                	console.log("成功读取....");

                	var img = document.getElementById("xmTanImg");
                	img.src = e.target.result;
                    //或者 img.src = this.result;  //e.target == this
                }

                reader.readAsDataURL(file)
            }
        </script>
    </body>
    </html>