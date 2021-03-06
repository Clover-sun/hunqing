<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/szz/public/../application/index/view/index/add2.html";i:1554277965;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广告管理</title>
    <link rel="stylesheet" href="/static/index/css/public.css">
    <!-- <link rel="stylesheet" href="/static/index/css/style.css"> -->


    <style>
        body {
            width: 100%;
            height: 100%;
            background: #EBEBEB;
        }

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }
        #header{
            width:100%;
            height:100px;
            background:#416482;
        }
        .content0 li {
            margin:10px 100px;
            width:450px;
            font-size:16px;
            border:1px solid gainsboro;
            border-radius:8px;
        }

        .content0 .last-li div {
            font-size: 18px;
            margin:5px 0;
        }

        .content0 li img {
            width:200px;
            height:80px;
        }


        .box {
            width:50%;
            min-height:500px;
            float:left;
            margin-top:5%;
            box-shadow: grey 1px 1px 1px 1px;
            border-radius: 10px;
            position:absolute;
            right:260px;
            top:60px;
        }
        form {
            width: 100%;
            height: 100%;

        }

        .content {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .content li {
            display: block;
            width: 35%;
            height: 210px;
            padding:0 20px ;
            box-sizing: border-box;
            box-shadow: gainsboro 1px 1px 1px 1px;
            margin: 2% 7%;
            float: left;
            border-radius: 5px;
        }

        .content li input {
            margin: 5px;
        }
        .content li span{
            padding:0 9px;
            text-align:center;
            font-size:14px;
        }
        .content li label{
            padding:0 9px;

        }
        h3 {
            width: 100%;
            height: 50px;
            line-height: 50px;
            border: none;
            text-align: center;
            color:#B28B51;
        }





        /*表单标签*/


        /*点击添加图片按钮div包裹*/
        .addbtn_wrap {
            position: relative;
        }

        /*添加图片按钮*/
        .addbtn {
            position: absolute;
        }

        .addbtn_wrap input[type=file] {
            width: 100px;
            position: absolute;
            top: 5px;
            opacity: 0;
        }

        /*所有图片div包裹*/
        .img_wrap {
            width: 100%;
            margin-top: 40px;
            float: left;
           
        }


        .pic_wrap {
            width: 180px;
            height: 160px;
            float: left;
            position: relative;
            margin: 5px;
        }


        .img{
            width: 150px;
            height: 130px;
            float: left;
        }

        .delete {
            width: 150px;
            height: 130px;
            position: absolute;
            display: none;
            border-radius: 6px;
        }

        .delete img {
            float: right;
        }

        /******************************************************/



        #xmTanImg,#xmTanImg1 {
            width: 250px;
            height: 80px;
            margin: 1% 5%;
        }

        .submit {
            width: 200px;
            height: 50px;
            margin:6.5% 40%;
            line-height: 50px;
            font-size:22px;
            color: white;
            background: #b28b51;
            border: 0;
            border-radius: 5px;
            float:left;
        }

/* ------------ */
.nav_list a{
    color:white;
    text-decoration:none;
}
#header .nav_list{
    width:1000px;
    float:right;
}
#header .nav_list li{
    width:180px;
    height:100%;
    text-align: center;
    float: left;
    color: white;
}
#header .nav_list li p{
    height:60px;
    line-height:80px;
}
#header .nav_list li span{
    height:30px;
    line-height:20px;
}
    </style>
    <!-- <script src="/static/admin/javascript/plug-ins/echarts.min.js"></script>
<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script> -->
</head>

<body>
    <!--头部导航栏-->
    <div id="header">
        <div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
        <ul class="nav_list">
            <li><a href="/index/index"><p>首页</p><span>HOME</span></a></li>
            <li><a href="/index/video"><p>婚礼视频</p><span>VIDEO</span></a></li>
            <li><a href="/index/find"><p>客源查询</p><span>QUERY</span></a></li>
            <li><a href="/index/ad"><p>广告管理</p><span>Administration</span></a></li>
            <li><a href="/index/custom"><p>客服帮助</p><span>Help</span></a></li>
            <a href="/logs/logout" id=""><i class="icon-signout"></i>安全退出</a>

        </ul>
    </div>
    <!--内容区-->
    <?php if(empty($info)): ?>
    <ul class="content0" style="width:500px;height:auto;margin:50px;text-indent:20px;">
        <li style="margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;border-radius:8px;">
            <h3 style="text-align:center;">LOGO</h3>

            <img src="/static/index/img/logo.jpg" alt="" style="width:100%;height:80px;">
        </li>
        <li style="margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;
        border-radius:8px;">
            <h3>尾页广告图片</h3>
            <img src="/static/index/img/logo.jpg" alt=""  style="width:100%;height:80px;">
        

        </li>
        <li style=" margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;
        border-radius:8px;">
            <h3>弹跳广告图片</h3>
            <img src="/static/index/img/logo.jpg" alt="" style="width:100%;height:80px;">
        

        </li>
        <li class="last-li" style=" margin:10px 100px;width:260px;height:auto;text-indent:-1px;
        font-size:16px;border:1px solid gainsboro;border-radius:8px;padding-bottom:20px;">
            <h3>联系我们</h3>

            <div class="tit">静宁巴黎经典</div>
            <div class="addres">地址：郑州京杭大酒店</div>
            <div class="photo">电话：0371-123123213</div>
            <div class="jishu">技术支持：静宁巴黎经典</div>

        </li>

    </ul>
    <?php else: ?>
    <ul class="content" style="width:500px;height:auto;margin:50px;text-indent:20px;">
		<li style="margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;border-radius:8px;">
			<h3>LOGO</h3>
            <img src="<?php echo $info['logo']; ?>" alt=""  style="width:100%;height:80px;">
		</li>
		<li style="margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;
        border-radius:8px;">
            <h3>尾页广告图片</h3>
            <?php if(is_array($info['pic']) || $info['pic'] instanceof \think\Collection || $info['pic'] instanceof \think\Paginator): if( count($info['pic'])==0 ) : echo "" ;else: foreach($info['pic'] as $key=>$row): ?>
			<img src="<?php echo $row; ?>" alt="" style="width:100%;height:80px;">
            <?php endforeach; endif; else: echo "" ;endif; ?>

		</li>
		<li style=" margin:10px 100px;width:260px;height:auto;font-size:16px;border:1px solid gainsboro;
        border-radius:8px;">
			<h3>弹跳广告图片</h3>
			<img src="<?php echo $info['tan']; ?>" alt="" style="width:100%;height:80px;">

		</li>
		<li class="last-li" style=" margin:10px 100px;width:260px;height:auto;text-indent:-1px;
		font-size:16px;border:1px solid gainsboro;border-radius:8px;padding-bottom:20px;">
			<h3>联系我们</h3>

			<div class="tit">标题:<?php echo $info['biaoti']; ?></div>
			<div class="addres">地址:<?php echo $info['dizhi']; ?></div>
			<div class="photo">电话:<?php echo $info['dian']; ?></div>
			<div class="jishu">技术支持:<?php echo $info['jishu']; ?></div>

		</li>

	</ul>

    
	<?php endif; ?>
    <div class="box">
        <form action="/xiu/edit" method="POST" enctype="multipart/form-data">
            <ul class="content">
                <li>
                    <h3>LOGO更换</h3>
                    <span>图片格式为png</span>
                    <div>
                        <p>
                            <input type="file" id="xdaTanFileImg" name="file" onchange="xmTanUploadImg(this)" />
                        </p>
                        <img id="xmTanImg" />
                        <div id="xmTanDiv"></div>
                    </div>

                </li>
                <li>
                    <h3>输入信息</h3>

                    <label for="">影楼名称:</label><input type="text" name="biaoti" id="biaoti"><br>
                    <label for="">地址:　　</label><input type="text" name="dizhi" id="dizhi"><br>
                    <label for="">电话:　　</label><input type="text" name="dian" id="dian"><br>
                    <label for="">技术支持:</label><input type="text" name="jishu" id="jishu"><br>
                    <!-- <input type="hidd"> -->
                </li>
                <li style="height: auto;margin:3% 7%;">
                    <h3 style="margin-top:2%">尾页广告图片</h3><span>图片格式为png或jpg,尺寸为300*500像素;</span>
                    <p></p>
                    <div class="addbtn_wrap">
                        <input type="button" class="btn btn-primary addbtn" value="点击添加图片">
                        <input type="file" name="image[]" id="file1" style="z-index: 1" onchange="getPhoto(this)">
                    </div>

                    <div class="img_wrap">

                </li>

                <li>
                    <h3>弹跳广告图片</h3><span>图片格式为png或jpg,尺寸为260*340像素;</span>
                    <div>
                        <p>
                            <input type="file" id="xdaTanFileImg1" name="file1" onchange="xmTanUploadImg1(this)" />
                        </p>
                        <img id="xmTanImg1" />
                        <div id="xmTanDiv"></div>
                    </div>

                </li>
                <input type="submit" value="提交" class="submit" id="sss">
            </ul>

        </form>
    </div>
</body>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="/static/index/js/upload.js"></script> -->
<script type="text/javascript">
    /*预览*/
    var count = 1;
    function getPhoto(node) {

        var imgURL = "";
        try {
            var file = null;
            if (node.files && node.files[0]) {
                file = node.files[0];
            } else if (node.files && node.files.item(0)) {
                file = node.files.item(0);
            }

            try {
                imgURL = file.getAsDataURL();

            } catch (e) {
                imgRUL = window.URL.createObjectURL(file);
            }
        } catch (e) {
            if (node.files && node.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    imgURL = e.target.result;

                };
                reader.readAsDataURL(node.files[0]);
                // alert();
            }
        }

        /*动态添加file和对应的图片预览*/
        createPic();
        createFile();

        count++;
        // alert(imgURL);
        return imgURL;
    }

    /*创建图片预览元素*/
    function createPic() {
        var picText = '<div class="pic_wrap" id=" showPic' + count + '" onmouseover="overDelete(this)" onmouseleave="leaveDelete(this)">' +
            '<img  src="' + imgRUL + '"" class="img img-rounded">' +
            '<div class="delete"><img src="/xx.jpg" onclick="deletePic(this)" style="width:20px;height:20px;"></div>' +
            '</div>';

        /*遍历除去最新一个file的所有file，如果有file的值与最后一个file的值相等，不插入预览图*/

        for (var i = 0; i < $('.addbtn_wrap input[type=file]').length - 1; i++) {
            var val = $('.addbtn_wrap input[type=file]').eq(i).val();


            if ($('.addbtn_wrap input[type=file]').last().val() == val) {

                /*此处不插入图片，就让count回到之前那一步，否则id=file和id=showPic的数据后缀对不上，导致file和图片对应错乱*/
                count = count - 1;
                return;
            }
        }

        $('.img_wrap').append(picText);

    }



    /*创建新的file元素*/
    function createFile() {

        var flieText = '<input type="file" name="image[]" id="file' + (count + 1) + '" style="z-index: ' + (count + 1) + '" onchange="getPhoto(this)">';

        /*遍历除去最新一个file的所有file，如果有file的值与最后一个file的值相等，提示图片已存在，清空最后一个file*/

        for (var i = 0; i < $('.addbtn_wrap input[type=file]').length - 1; i++) {
            var val = $('.addbtn_wrap input[type=file]').eq(i).val();

            if ($('.addbtn_wrap input[type=file]').last().val() == val) {
                var file = $('input[type=file]').last();
                file.after(file.clone().val(""));
                file.remove();
                // alert("图片已存在！");
                layer.msg("图片已存在！", { icon: 5, time: 900 });
                return;
            }
        }


        $('.addbtn_wrap').append(flieText);

        /*图片数量大于1，显示提交按钮，添加一次判断一次*/
        if ($('.pic_wrap').length <= 0) {

            $('.addbtn_wrap input[type=submit]').css('display', 'none');
        } else {
            // alert(1111);
            $('.addbtn_wrap input[type=submit]').css('display', 'block');
        }
    }



    /*移入移出，删除遮罩层显示隐藏*/
    function overDelete(obj) {
        $(obj).children('div').show();
    }

    function leaveDelete(obj) {
        $(obj).children('div').hide();
    }



    /*删除图片和对应的file*/
    function deletePic(obj) {

        /*提取图片的id的数字部分*/
        var picId = $(obj).parent().parent().attr('id');
        var picVal = picId.replace(/[^0-9]/ig, "");

        var fileArr = $('input[type=file]');

        /*遍历file，如果图片id的数字部分和file的id的数字部分相同，那么文件与图片是对应的，删除图片的同时删除对应的file*/

        fileArr.each(function () {

            /*提取file的id的数字部分*/
            var fileId = $(this).attr('id');
            var fileVal = fileId.replace(/[^0-9]/ig, "");
            if (fileVal == picVal) {
                $(this).remove();
                $(obj).parent().parent().remove();
            }
        });
        /*图片数量大于1，显示提交按钮,删除一次判断一次*/
        if ($('.pic_wrap').length <= 0) {

            $('input[type=submit]').css('display', 'none');

        } else {
            $('input[type=submit]').css('display', 'block');
        }
    }


</script>
<script>
    //判断浏览器是否支持FileReader接口
    if (typeof FileReader == 'undefined') {
        document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
        //使选择控件不可操作
        document.getElementById("xdaTanFileImg").setAttribute("disabled", "disabled");
    }

    //选择图片，马上预览
    function xmTanUploadImg(obj) {
        var file = obj.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {

            var img = document.getElementById("xmTanImg");
            img.src = e.target.result;
        }

        reader.readAsDataURL(file)

    }

</script>

<script>
    //判断浏览器是否支持FileReader接口
    if (typeof FileReader == 'undefined') {
        document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
        //使选择控件不可操作
        document.getElementById("xdaTanFileImg").setAttribute("disabled", "disabled");
    }

    //选择图片，马上预览
    function xmTanUploadImg(obj) {
        var file = obj.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {

            var img = document.getElementById("xmTanImg");
            img.src = e.target.result;
        }

        reader.readAsDataURL(file)

    }


</script>

<script>
    //判断浏览器是否支持FileReader接口
    if (typeof FileReader == 'undefined') {
        document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
        //使选择控件不可操作
        document.getElementById("xdaTanFileImg1").setAttribute("disabled", "disabled");
    }

    //选择图片，马上预览
    function xmTanUploadImg1(obj) {
        var file = obj.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {

            var img = document.getElementById("xmTanImg1");
            img.src = e.target.result;
        }

        reader.readAsDataURL(file)

    }


</script>

<script>
    $('.submit').click(function () {


        var file = $('#xdaTanFileImg').val();
        if (file == '') {
            alert('logo图片不能为空');
            return false;
        }




        var file1 = $('#file1').val();
        if (file1 == '') {
            alert('尾页广告图片不能为空');
            return false;
        }




        var biaoti = $('#biaoti').val();
        // alert(name);
        if (biaoti == '') {

            alert('标题不能为空');
            return false;
        }

        var pid = $('#dizhi').val();
        if (pid == 0) {
            alert('地址不能为空');
            return false;
        }

        var file1 = $('#dian').val();
        if (file1 == '') {

            layer.msg('电话不能为空', { icon: 5, time: 900 });
            return false;

        }


        var price = $('#jishu').val();
        if (price == '') {
            layer.msg('技术支持不能为空', { icon: 5, time: 900 });
            return false;
        }



    });


</script>


</html>