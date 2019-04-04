<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/szz/public/../application/apps/view/index/index.html";i:1553857978;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable">
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

        body {
            width: 100%;
            height: 100%;
        }

        ul {
            width: 80%;
            margin: auto 10%;
            margin-top: 300px;
        }

        .ipt, .login {
            width: 100%;
            height: 30px;
            line-height: 30px;
            border: 1px solid red;
            margin: 40px 0;
            text-align: center;
            border-radius: 50px;
            padding: 10px;
        }

        .login {
            font-size: 24px;
            letter-spacing: 50px;
            color: white;
            background: #FF676C;
            text-indent: 50px;
        }

        input {
            outline: none;
            border: 0;
            width: 80%;
            height: 100%;
            font-size: 18px;
            text-indent: 10px;
            color: #D9D9D9;
            position: relative;
            bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #FF676C;
            text-align: center;
            position: relative;
            top: 100px;
        }
    </style>
</head>
<body>
<form action="/apps/login?id=<?php echo $sid; ?>" method="post">
    <ul>
        <li class="ipt">
            <img src="/static/moban/img/people.png" alt="">
            <input type="text" name="phone" placeholder="请输入手机号">
        </li>
        <li class="login">
            <button type="submit">登录</button>
        </li>
        <p>狮子座管家为爱见证</p>
    </ul>
</form>
</body>
</html>