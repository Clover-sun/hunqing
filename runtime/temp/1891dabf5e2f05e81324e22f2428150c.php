<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp64\www\moban\public/../application/index\view\index\add2.html";i:1553221875;}*/ ?>
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

.content li{
	margin:10px 30px ;
}

.content li input{
	margin:5px;
}
form{
	width:330px;

}
h3{
	width:100%;
	border:none;
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

    /*提交按钮*/
    /* input[type=submit] {
        margin: 0 auto;
        display: none;
    } */

    /*所有图片div包裹*/
    .img_wrap {
        width: 600px;
        margin-top: 40px;
        float: left;
        margin-bottom: 40px;
    }


    .pic_wrap {
        width: 180px;
        height: 160px;
        float: left;
        position: relative;
        margin: 5px;
    }


    .img {
        width: 180px;
        height: 160px;
        float: left;
    }

    .delete {
        width: 180px;
        height: 160px;
        position: absolute;
        display: none;
        border-radius: 6px;
    }

    .delete img {
        float: right;
    }

/******************************************************/



#xmTanImg {
        width: 100px;
        height: 100px;

    }
.submit{
	width:200px;
	height:50px;
	line-height:50px;
	font-size:20px;
	color:white;
	background:blue;
	border:0;
	margin-left:30px;
}
</style>

</head>
<body>
<!--头部导航栏-->
<div id="header">
	<div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
	<ul class="nav_list">
		<li><a href="/index/index"><p>首页</p><span></span></a></li>
		<li><a href="/index/find"><p>客源查询</p><span></span></a></li>
		<li><a href="/index/ad"><p>广告管理</p><span></span></a></li>
		<li><a href="/index/custom"><p>客服帮助</p><span></span></a></li>
	</ul>
</div>
<!--内容区-->
<ul class="content">
	<form action="/xiu/edit" method="POST" enctype="multipart/form-data" >
	<li>
		<h3>logo更换</h3>
		<div>
				<p>
					<input type="file" id="xdaTanFileImg" name="file" onchange="xmTanUploadImg(this)" />
				</p>
				<img id="xmTanImg" />
				<div id="xmTanDiv"></div>
			</div>
	
	</li>

	<li>
		<h3>尾页广告图片</h3>
		<div class="addbtn_wrap">
				<input type="button" class="btn btn-primary addbtn" value="点击添加图片">
				<input type="file" name="image[]" id="file1" style="z-index: 1"
					onchange="getPhoto(this)">
		</div>

		<div class="img_wrap">


	</li>
<li>
	<h3>输入信息</h3>
	
	<label for="">标题:　　</label><input type="text" name="biaoti" id="biaoti" value=""><br>
	<label for="">地址:　　</label><input type="text" name="dizhi" value=""><br>
	<label for="">电话:　　</label><input type="text" name="dian" value=""><br>
	<label for="">技术支持:</label><input type="text" name="jishu" value=""><br>
	<!-- <input type="hidd"> -->
</li>
	<input type="submit" value="提交" class="submit" id="sss">
</li>
</form>
<li>
	
</ul>
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

<!-- <script>
$('#sss').click(function(){
        var name = $('#biaoti').val();
        if(name == ''){
            layer.msg('商品名不能为空', { icon: 5, time: 900 });
            return false;
        }

        var pid = $('#pid').val();
        if(pid == 0){
            layer.msg('请选择商品分类', { icon: 5, time: 900 });
            return false;
        }
        
        var file1 = $('#file1').val();
        if(file1 == ''){
            layer.msg('商品图片不能为空', { icon: 5, time: 900 });
            return false;
        }


        var price = $('#price').val();
        if(price == ''){
            layer.msg('商品价格不能为空', { icon: 5, time: 900 });
            return false;
        }


        var cont = $('#cont').val();
        if(cont == ''){
            layer.msg('商品介绍不能为空', { icon: 5, time: 900 });
            return false;
        }


    
        var file1 = $('#file1').val();
        if(file1 == ''){
            layer.msg('商品图片不能为空', { icon: 5, time: 900 });
            return false;
        }


        var file = $('#file').val();
        if(file == ''){
            layer.msg('商品详情不能为空', { icon: 5, time: 900 });
            return false;
        }

        
        return false;
    });


</script> -->


</html>