<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/www/wwwroot/szz/public/../application/admin/view/video/index.html";i:1553564594;s:63:"/www/wwwroot/szz/application/admin/view/AdminPublic/public.html";i:1553483800;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>视频管理</title>
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
                        <h2 class="title">视频列表</h2>
                        <p class="title-description">
                            <button class="btn btn-warning add">添加视频</button>
                        </p>
                    </header>
                    <hr>
                </section>


                <table class="table table-bordered table-striped mb-15">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>分类</th>
                            <th>标题</th>
                            <th>封面</th>
                            <th>视频</th>
                            <th>操作</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$row): ?>
                        <tr class="cen">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fid']; ?></td>
                            <td class="lt cen"><a><?php echo $row['cten']; ?></a></td>
                            <td>
                                <img style="width: 100px;height: 100px;" src="<?php echo $row['pic']; ?>" alt="">
                            </td>
                            <td>
                                <video width="320" height="200" controls>
                                        <source src="<?php echo $row['vde']; ?>" type="video/mp4">
                                </video>
                            </td>

                            <td>
                                <button class="btn btn-primary edit" name="<?php echo $row['id']; ?>">编辑</button>
                                <button class="btn btn-warning del" name="<?php echo $row['id']; ?>">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //添加视频
    $('.add').click(function () {
        $.get('/video/add', {}, function (data) {
            layer.open({
                type: 1,
                title: '添加视频',
                shadeClose: true,//点击阴影处关闭
                skin: 'layui-layer-demo', //加上边框
                area: ['600px', '600px'], //宽高
                content: data
            });

        });
    });

    //修改
    $('.edit').click(function () {
        //获取修改的id
        var id = $(this).attr('name');

        $.ajax({
            url: '/video/edit',
            type: 'get',
            data: { id, id },
            success: function (data) {

                layer.open({
                    type: 1,
                    title: '视频修改',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['600px', '700px'], //宽高
                    content: data
                });
            },
            error: function (e) {
                console.log(e);
            }
        });
    });


    $(".del").click(function () {

        // 获取id
        var id = $(this).attr('name');
        // 获取本条tr
        ss = $(this).parents('tr');

        layer.confirm('你确定要删除吗', ['删除', '取消'], function () {
            $.get('/video/delete', { id: id }, function (data) {

                if (data.code == 200) {
                    ss.remove();
                    layer.msg(data.message, { icon: 6 });
                }

                if (data.code == 201) {

                    layer.msg(data.message, { icon: 5 });
                }
            })
        });
    });

</script>


				
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
