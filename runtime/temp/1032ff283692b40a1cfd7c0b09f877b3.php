<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"C:\wamp64\www\hunqing\wedding_platform\admin\moban\public/../application/index\view\login\login.html";i:1553760700;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商户登录</title>
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

		.content {
			width: 100%;
			height: 100%;
		}

		/*登录图片*/

		.left {
			width: 50%;
			height: 100%;
			float: left;
		}

		.left img {
			width: 100%;
			height: 100%;
			margin: 0 auto;
		}

		.right {

			width: 50%;
			height: 100%;
			float: left;
			margin-top: 10%;
			/*background: gainsboro;*/
		}

		.right .box {
			width: 80%;
			height: 400px;
			margin: 0 10%;
			/*background: red;*/
		}

		.right .box .title {
			width: 100%;
			height: 100px;
			font-size: 45px;
			line-height: 100px;
			text-align: center;
			font-family: "楷体", "KaiTi";
		}

		.right .box .subhead {
			width: 100%;
			height: 50px;
			line-height: 50px;
			text-align: center;
			color: grey;
			margin: 20px 0;
		}

		.box form {
			width: 100%;
			height: 150px;
			/*background: blue;*/
		}
		.box form input{
			width: 50%;
			height: 40px;
			margin: 10px 25%;
			font-size: 20px;
			line-height: 40px;
			float: left;
			border: 1px solid grey;
			background: none;
			border-radius: 3px;
			box-shadow: gainsboro 1px 1px 1px 1px;
		}

		.frame {
			padding: 5px;
			width: 260px;
			margin: 4px 5px;
			text-indent: 10px;
			color: grey;
		}



		label {
			font-size: 16px;
			color: gainsboro;
		}

		.login {
			width: 50%;
			height: 50px;
			line-height: 50px;
			background: #ED4286;
			font-size: 28px;
			color: white;
			text-align: center;
			line-height: 50px;
			margin: 20px auto;

		}
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/echarts.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script>
</head>
<body>
<div class="content">
	<div class="left">
		<img src="<?php echo $logo; ?>" alt="">
	</div>
	<div class="right">
		<div class="box">
			<p class="title">狮子座婚礼管家欢迎您</p>
			<p class="subhead">感谢您的支持我们将更好服务于您</p>
			<form action="">
				<input class="frame" type="text" placeholder="请输入管理员账号" value="" id="adminName">
				<input class="frame" type="password" placeholder="请输入管理员密码" value="" id="adminPwd"><br>
			</form>
			<div class="login" onclick="check()">确认登录</div>
		</div>
	</div>
</div>
</body>

<script>
    function check() {
        // alert(1);
        //管理员
        var name = $("#adminName").val();

        //密码
        var password = $("#adminPwd").val();

        // alert(name);
        if (name == '') {
            layer.msg('账号不能为空', {icon: 5, time: 900});
            return false;
        }

        if (password == '') {
            layer.msg('密码不能为空', {icon: 5, time: 900});
            return false;
        }

        $.ajax({
            url: '/logs/log',
            type: 'post',
            data: {name: name, password: password},
            success: function (data) {
                console.log(data);
                // alert(data);
                if (data.code == 201) {
                    layer.msg(data.msg, {icon: 5, time: 900});
                }
                if (data.code == 202) {
                    layer.msg(data.msg, {icon: 5, time: 900});
                }
                if (data.code == 203) {
                    layer.msg(data.msg, {icon: 5, time: 900});
                }
                if (data.code == 200) {
                    layer.msg(data.msg, {icon: 6, time: 900});
                    // alert(data.msg);
                    setTimeout("location.href='/index/index';", 1000);
                }
            },
            error: function (e) {
                alert(e);
            }
        });


    }


    //回车时，默认是登陆
    function on_return() {
        if (window.event.keyCode == 13) {
            if ($('#button') != null) {
                check();
            }
        }
    }

    /*document.onkeydown = function(e) {
        if (!e) e = window.event; //考虑浏览器兼容性
        if ((e.keyCode || e.which) == 13) {
            check();
        }*/
</script>

</html>

