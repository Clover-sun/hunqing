<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/szz/public/../application/admin/view/login/login.html";i:1552876572;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>登录-后台管理系统</title>
<meta name="keywords"  content="设置关键词..." />
<meta name="description" content="设置描述..." />
<meta name="author" content="DeathGhost" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<link rel="icon" href="/static/admin/images/icon/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" />
<script src="/static/admin/javascript/jquery.js"></script>
<script src="/static/admin/javascript/public.js"></script>
<script src="/static/admin/javascript/plug-ins/customScrollbar.min.js"></script>
<script src="/static/admin/javascript/pages/login.js"></script>
<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script>
</head>
<body class="login-page" onkeydown="on_return();">
	<section class="login-contain">
		<header>
			<h1>后台管理系统</h1>
			<p>management system</p>
        </header>
     
		<div class="form-content">
			<ul>
                <form>
				<li>
					<div class="form-group">
						<label class="control-label">管理员账号：</label>
						<input type="text" placeholder="管理员账号..." class="form-control form-underlined" id="adminName"/>
					</div>
				</li>
				<li>
					<div class="form-group">
						<label class="control-label">管理员密码：</label>
						<input type="password" placeholder="管理员密码..." class="form-control form-underlined" id="adminPwd"/>
					</div>
				</li>
				<li>
                    <div>
                        请输入验证码：<br/>
                        <input type="text" class="form-control form-underlined" name="fcode"  style="width:40%;float: left;" id="fcode">
                        <img src="<?php echo captcha_src(); ?>" alt="captcha" style="height: 50px; width: 53%;float: right;" onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>
                    </div>
                   
                </li>
                 </form>
				<li>
				 <button class="btn btn-lg btn-block" id="button" onclick="check()">立即登录</button>	
				</li>
				
            </ul>
        
        </div>
       
       
	</section>

</body>
<script>
function check(){
    // alert(1);
    //管理员
    var name = $("#adminName").val();

    //密码
    var password = $("#adminPwd").val();

    //验证码
    var fcode = $("#fcode").val();
    // alert(name);
    if(name == ''){
        layer.msg('管理员不能为空', { icon: 5,time:900 });
        return false;
    }

    if(password == ''){
        layer.msg('密码不能为空', { icon: 5 ,time:900});
        return false;
    }

    if(fcode == ''){
        layer.msg('验证码不能为空', { icon: 5 ,time:900});
        return false;
    }

    $.ajax({
        url : '/login/log',
        type : 'post',
        data : {name:name,password:password,fcode:fcode},
        success:function(data){
            // alert(data);
            if(data.code == 201){
                layer.msg(data.msg,{ icon: 5 ,time:900});
            }
            if(data.code == 202){
                layer.msg(data.msg,{ icon: 5 ,time:900});
            }
            if(data.code == 203){
                layer.msg(data.msg,{ icon: 5 ,time:900});
            }
            if(data.code == 200){
                layer.msg(data.msg,{ icon: 6 ,time:900});
                // alert(data.msg);
                setTimeout("location.href='/admin/index';", 1000); 
            }
        },
        error:function(e){
            alert(e);
        }
    });


}


 //回车时，默认是登陆
 function on_return(){
        if(window.event.keyCode == 13){
            if ($('#button')!=null) {
                check();
            }
        }
    }

</script>
</html>
