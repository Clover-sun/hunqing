<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\moban\public/../application/admin\view\tenant\index.html";i:1553048689;s:66:"D:\wamp64\www\moban\application\admin\view\AdminPublic\public.html";i:1552876572;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>商户管理</title>
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

		
								

<style>
    ul.pagination {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    ul.pagination li {
        display: inline;
    }


    .bar1 input {
        border: 1px solid rgb(240, 240, 245);
        width: 90%;
        height: 35px;
        margin-left: 10px;
        margin-bottom: 10px;
    }
</style>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">

                <section class="page-hd">
                    <header>
                        <h2 class="title">商户管理</h2>
                        <p class="title-description">
                            <button class="btn btn-warning add">添加商户</button>

                        </p>
                    </header>
                    <hr>
                </section>

                <div class="search bar1">
                    <form action="/tenant/index" method="get">
                        <input type="text" placeholder="请输入商户名" name="k" value="<?php echo $k; ?>">
                        <button type="submit" class="btn btn-primary-outline xx">搜索</button>
                    </form>
                </div>

                <table class="table table-bordered table-striped mb-15" id="tableExcel">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>商户名</th>
                            <th>商户logo</th>
                            <th>商户地址</th>
                            <th>联系电话</th>
                            <th>服务类型</th>
                            <th>服务状态</th>
                            <th>尾页广告</th>
                            <th>弹窗广告</th>
                            <th>商户状态</th>
                            <th>操作</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$val): ?>
                        <tr class="cen">
                            <td><?php echo $val['id']; ?></td>
                            <td class="lt cen"><a><?php echo $val['name']; ?></a></td>
                            <td><img src="<?php echo $val['logo']; ?>" style="width: 100px;height: 100px;"></td>
                            <td><?php echo $val['ress']; ?></td>
                            <td><?php echo $val['phone']; ?></td>
                            <td><?php echo $val['cet']==1?'包年':'VIP'; ?></td>
                            <td><?php echo $val['cetval']==''?$val['cetvas']."次":$val['cetval']."天"; ?></td>
                            <td><?php echo $val['pag']==1?'<p style="color: #6495ED">开启</p>':'<p style="color: red">禁用</p>'; ?></td>
                            <td><?php echo $val['ale']==1?'<p style="color: #6495ED">开启</p>':'<p style="color: red">禁用</p>'; ?></td>
                            <td><?php echo $val['static']==1?'<p style="color: #6495ED">正常</p>':'<p style="color: red">禁用</p>'; ?>
                            </td>
                            <td>
                                <button class="btn btn-primary fen" name="<?php echo $val['id']; ?>">模板分配</button>
                                <button class="btn btn-primary logo" name="<?php echo $val['id']; ?>">logo</button>
                                <button class="btn btn-primary pas" name="<?php echo $val['id']; ?>">密码</button>
                                <button class="btn btn-warning xfei" name="<?php echo $val['id']; ?>">续费</button>
                                <button class="btn btn-danger jins" name="<?php echo $val['id']; ?>">禁用</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div>
                    <?php echo $page; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    //删除
    $(".del").click(function () {

        // 获取id
        var id = $(this).attr('name');
        // 获取本条tr
        ss = $(this).parents('tr');

        layer.confirm('你确定要删除吗', ['删除', '取消'], function () {
            $.get('/tenant/delete', { id: id }, function (data) {

                if (data == 1) {
                    ss.remove();
                    layer.msg('删除成功', { icon: 1 });
                }
            })
        });
    });

    //添加商户
    $('.add').click(function () {
        $.get('/tenant/add', {}, function (data) {
            layer.open({
                type: 1,
                title: '添加商户',
                shadeClose: true,//点击阴影处关闭
                skin: 'layui-layer-demo', //加上边框
                area: ['800px', '900px'], //宽高
                content: data
            });

        });
    });

    //修改logo
    $('.logo').click(function () {
        // alert(1111);
        //获取id
        var id = $(this).attr('name');
        // alert(id);
        $.ajax({
            url: '/teds/logo',
            typr: 'get',
            data: { id: id },
            success: function (data) {
                layer.open({
                    type: 1,
                    title: '更换logo',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['550px', '600px'], //宽高
                    content: data
                })
                // console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        })
    });

    //修改商户密码

    $('.pas').click(function () {
        // alert(1111);
        //获取id
        var id = $(this).attr('name');
        // alert(id);
        $.ajax({
            url: '/teds/pas',
            typr: 'get',
            data: { id: id },
            success: function (data) {
                layer.open({
                    type: 1,
                    title: '修改密码',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['550px', '450px'], //宽高
                    content: data
                })
                // console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        })
    });

    //续费
    $('.xfei').click(function () {
        // alert(1111);
        //获取id
        var id = $(this).attr('name');
        // alert(id);
        $.ajax({
            url: '/teds/xu',
            typr: 'get',
            data: { id: id },
            success: function (data) {
                layer.open({
                    type: 1,
                    title: '商户续费',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['550px', '450px'], //宽高
                    content: data
                })
                // console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        })
    });

    //状态
    $('.jins').click(function () {
        // alert(1111);
        //获取id
        var id = $(this).attr('name');
        // alert(id);
        layer.confirm('请确认该操作', ['确认', '取消'], function () {
            $.ajax({
                url: '/teds/jins',
                typr: 'get',
                data: { id: id },
                success: function (data) {
                    if (data.code == 200) {
                        layer.msg(data.msg, { icon: 6, time: 900 });
                        // location.href = '/adminuser/index';
                        setTimeout("location.href='/tenant/index';", 1000);
                    }

                    if (data.code == 400) {
                        layer.msg(data.msg, { icon: 5 });
                    }

                    if (data.code == 201) {
                        layer.msg(data.msg, { icon: 5 });
                    }
                },
                error: function (e) {
                    console.log(e);
                }

            })
        })
    });


    //选择分类
    $('.fen').click(function () {
        // alert(1111);
        //获取id
        var sid = $(this).attr('name');
        // alert(sid);
        $.ajax({
            url: '/edit/index',
            type: 'get',
            data: { sid: sid },
            success: function (data) {
                layer.open({
                    type: 1,
                    title: '选择分类',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['400px', '300px'], //宽高
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
