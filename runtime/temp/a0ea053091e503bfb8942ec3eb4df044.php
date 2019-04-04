<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\wamp64\www\moban\public/../application/index\view\login\login.html";i:1552893947;}*/ ?>
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
            width: 1340px;
            height: 616px;
        }

        .left {
            float: left;
            width: 49%;
        }

        .right {
            float: left;
            width: 50%;
            height: 100%;
        }
        .box{
            width:350px;
            margin:200px auto;
            text-align:center;
        }
        .title {
            font-size:30px;
            letter-spacing:3px;
        }

        .subhead {
            color:grey;
        }
        form{
            width:240px;
            text-align:left;
            margin-left:20px;

        }
.frame{
    padding:5px;
    width:260px;
    margin:4px 5px;
    text-indent:10px;
    color:grey;
}
.check{
    width:20px;
    height:20px;
}
label{
    font-size:16px;

    color:gainsboro;
}
        .login{
            width:250px;
            height:55px;
            line-height:55px;
            background:#ED4286;
            font-size:28px;
            color:white;
            letter-spacing: 2px;
            margin:0 auto;
            margin-top:15px;

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
            <p class="subhead">乐山大佛了解考试东方丽景受打击了</p>
            <form action="">
                <input class="frame" type="text" placeholder="管理员账号..."  value="" id="adminName">
                <input class="frame" type="password" placeholder="管理员密码..." value="" id="adminPwd"><br>
            </form>
            <div class="login" onclick="check()">确认登录</div>
        </div>
    </div>
</div>
</body>

<script>
    function check(){
        // alert(1);
        //管理员
        var name = $("#adminName").val();
    
        //密码
        var password = $("#adminPwd").val();
    
        // alert(name);
        if(name == ''){
            layer.msg('账号不能为空', { icon: 5,time:900 });
            return false;
        }
    
        if(password == ''){
            layer.msg('密码不能为空', { icon: 5 ,time:900});
            return false;
        }
    
        $.ajax({
            url : '/logs/log',
            type : 'post',
            data : {name:name,password:password},
            success:function(data){
                console.log(data);
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
                    setTimeout("location.href='/index/index';", 1000); 
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

