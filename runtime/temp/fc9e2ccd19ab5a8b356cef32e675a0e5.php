<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/www/wwwroot/szz/public/../application/admin/view/template/index.html";i:1553483800;s:63:"/www/wwwroot/szz/application/admin/view/AdminPublic/public.html";i:1553483800;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>模板管理</title>
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

		
								
<style>
    ul.pagination {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    ul.pagination li {display: inline;}


    .bar1 input {
        border: 1px solid rgb(240, 240, 245);
        width: 90%;
        height: 35px;
        margin-left : 10px;
        margin-bottom :10px;
    }



</style>


<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">

                <section class="page-hd">
                    <header>
                        <h2 class="title">模板管理</h2>
                        <p class="title-description">
                            <a href="add.html"><button class="btn btn-warning add">添加模板</button></a>

                        </p>
                    </header>
                    <hr>
                </section>

                <div class="search bar1">
                    <form action="/template/index" method="get">
                        <input type="text" placeholder="请输入模板名称" name="name" value="<?php echo $select; ?>">
                        <button type="submit" class="btn btn-primary-outline xx">搜索</button>
                    </form>
                </div>

                <table class="table table-bordered table-striped mb-15" id="tableExcel">
                    <thead>


                    <tr>
                        <th>id</th>
                        <th>
                            模板分类

                            <select name="cates" onchange="location.href=this.options[this.selectedIndex].value;">

                                <option calss="xx">--请选择--</option>
                                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): ?>
                                <option value ="/template/index/?cates=<?php echo $vo['cates']; ?>"><?php echo $vo['cates']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </th>
                        <th>模板名称</th>
                        <th>模板封面</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr class="cen">
                        <td><?php echo $a++; ?></td>
                        <td>
                            <?php echo $vo['cates']; ?>
                        </td>
                        <td><?php echo $vo['name']; ?></td>

                        <td><img src="<?php echo $vo['img']; ?>" style="width: 100px;height: 100px"></td>
                        <td>
                            <a href="/template/see?id=<?php echo $vo['id']; ?>" target="_blank"><button class="btn btn-primary edit"   name="">查看</button></a>
                            <a href="/template/edit?id=<?php echo $vo['id']; ?>"><button class="btn btn-primary edit"  name="">编辑</button></a>
                            <a href="/template/delete?id=<?php echo $vo['id']; ?>"><button class="btn btn-danger del" name="">删除</button></a>
                                <!--<button class="btn btn-danger del" id="id"   value="<?php echo $vo['id']; ?>" name="id">删除</button>-->

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

    // //删除
    // $(".del").click(function () {
    //
    //     var id = $("#id").val();
    //     // alert(id);
    //     var ss = $(this).parents('tr');
    //     // alert(ss);
    //     // console.log(ss);
    //     layer.confirm('请确认该操作', ['确认', '取消'], function () {
    //         $.ajax({
    //             url: '/template/delete',
    //             type: 'get',
    //             data: { id: id },
    //             success: function (data) {
    //                 // alert(data);
    //                 if (data.code == 200) {
    //                     ss.remove();
    //                     layer.msg(data.message, { icon: 6, time: 900 });
    //
    //                 }
    //             },
    //             error: function (e) {
    //
    //             }
    //
    //         })
    //     })
    // });

    //添加管理员
    // $('.add').click(function () {
    //     $.get('/template/add', {}, function (data) {
    //
    //
    //         layer.open({
    //             type: 1,
    //             title: '添加管理员',
    //             skin: 'layui-layer-demo', //加上边框
    //             area: ['45%', '90%'], //宽高
    //             content: data
    //         });
    //
    //     });
    // });



    // //修改管理员信息
    // $('.edit').click(function () {
    //     //获取id
    //     var id = $(this).attr('name');
    //     // alert(id);
    //     $.ajax({
    //         url: '/template/edit',
    //         typr: 'get',
    //         data: { id: id },
    //         success: function (data) {
    //
    //
    //
    //             layer.open({
    //                 type: 1,
    //                 title: '管理员修改',
    //                 skin: 'layui-layer-demo', //加上边框
    //                 area: ['800px', '700px'], //宽高
    //                 content: data
    //             })
    //             // console.log(data);
    //         },
    //         error: function (e) {
    //             console.log(e);
    //         }
    //
    //     })
    // });



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
