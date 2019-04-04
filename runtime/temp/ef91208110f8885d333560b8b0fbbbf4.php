<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/admin\view\admin\index.html";i:1553681164;s:77:"D:\phpstudy\PHPTutorial\WWW\wg\application\admin\view\AdminPublic\public.html";i:1553483800;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>后台管理</title>
	<meta name="keywords"  content="设置关键词..." />
	<meta name="description" content="设置描述..." />
	<meta name="author" content="DeathGhost" />
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="icon" href="/static/admin/images/icon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/static/pic/css/style.css" /> -->
	<script src="/static/admin/javascript/jquery.js"></script>
	<script src="/static/admin/javascript/plug-ins/customScrollbar.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/echarts.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script>
	<script src="/static/admin/ueditor/umeditor.config.js"></script>
	<script src="/static/admin/ueditor/umeditor.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/pagination.js"></script>
	<script src="/static/admin/javascript/public.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery-1.6.1.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery.validate.min.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery.metadata.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/messages_cn.js"></script>

</head>
<body>
<div class="main-wrap">
	<div class="side-nav">
		<div class="side-logo">
			<div class="logo">
				<span class="logo-ico">
					<i class="i-l-1"></i>
					<i class="i-l-2"></i>
					<i class="i-l-3"></i>
				</span>
				<strong>模块化后台管理</strong>
			</div>
		</div>
		
		<nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
			<h2>
				<a href="/admin/index" class="InitialPage"><i class="icon-dashboard"></i>后台首页</a>
			</h2>
			<ul>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>商户管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/tenant/index">商户列表</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>广告管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/advert/index">广告列表</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>模板管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/cate/index">模板分类</a>
						</dd>
						<dd>
							<a href="/template/index">模板列表</a>
						</dd>

					</dl>
				</li>

				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>视频管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/video/index">视频列表</a>
						</dd>

					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>登录管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/logo/index">登录logo</a>
						</dd>

					</dl>
				</li>
			</ul>
		</nav>
		<footer class="side-footer">© DeathGhost 版权所有</footer>
	</div>
	<div class="content-wrap">
		<header class="top-hd">
			<div class="hd-lt">
				<a class="icon-reorder"></a>
			</div>
			<div class="hd-rt">
				<ul>
					
					<li>
						<a><i class="icon-user"></i>管理员:<em><?php echo \think\Request::instance()->session('name'); ?></em></a>
					</li>
					<li>
						<a class="xu"><i class="icon-bell-alt">修改密码</i></a>
					</li>
					<li>
						<a href="/login/logout" id=""><i class="icon-signout"></i>安全退出</a>
					</li>
				</ul>
			</div>
		</header>
		<main class="main-cont content mCustomScrollbar">
		<!-- <div class="page-wrap"> -->
		<!-- </div> -->

		
								
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <section class="page-hd">
                    <header>
                        <h2 class="title" style="color:red">欢迎~超级管理员</h2>
                        <p class="title-description">

                        </p>
                    </header>
                    <hr>
                </section>
                <table class="table table-bordered table-striped mb-15" id="tableExcel">
                    <thead>
                    <tr>
                        <th colspan="2" scope="col">网站服务器信息</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="30%">服务器计算机名</th>
                        <th><span id="lbServerName">http://127.0.0.1/</span></th>
                    </tr>
                    <tr>
                        <th>服务器IP地址</th>
                        <th><?php echo $sys_info['ip']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器域名</th>
                        <th><?php echo $sys_info['domain']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器端口</th>
                        <th>80</th>
                    </tr>
                    <tr>
                        <th>服务器操作系统</th>
                        <th><?php echo $sys_info['os']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器脚本超时时间</th>
                        <th><?php echo $sys_info['max_ex_time']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器的语言种类</th>
                        <th>Chinese (People's Republic of China)</th>
                    </tr>
                    <tr>
                        <th>php版本</th>
                        <th><?php echo $sys_info['phpv']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器时区</th>
                        <th><?php echo $sys_info['timezone']; ?></th>
                    </tr>
                    <tr>
                        <th>服务器当前时间</th>
                        <th><?php echo $sys_info['time']; ?></th>
                    </tr>

                    <tr>
                        <th>CPU 总数</th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>CPU 类型</th>
                        <th><?php echo $sys_info['php_uname']; ?></th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


				
			<!--开始::结束-->
		
		</main>
		
	</div>
</div>
</body>
<script>
$(".xu").click(function(){

	$.ajax({
            url: '/adminuser/edit',
            typr: 'get',
            data: {},
            success: function (data) {

                layer.open({
                    type: 1,
                    title: '管理员修改',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['600px', '500px'], //宽高
                    content: data
                })
                // console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        })

});

</script>
</html>
