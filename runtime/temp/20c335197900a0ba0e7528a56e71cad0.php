<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"D:\wamp64\www\mb\wedding_platform\admin\moban\public/../application/admin\view\advert\edit.html";i:1552876572;}*/ ?>
<style>
    /*预览图片样式*/
    #xmTanImg {
        width: 100px;
        height: 100px;
        margin-left: 23%;
        overflow: hidden;
    }
</style>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <div class="page-wrap">
                    <section class="page-hd">
                        <header>
                            <h2 class="title">公告修改</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">客服电话:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="客服电话" class="form-control form-boxed " name="phone"
                                    id="phone" value="<?php echo $info['phone']; ?>">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">客服微信:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="客服微信" class="form-control form-boxed " name="weixin"
                                    id="weixin" value="<?php echo $info['weixin']; ?>">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">客服QQ:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="客服QQ" class="form-control form-boxed " name="qq" id="qq"  value="<?php echo $info['qq']; ?>">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">现图片:</div>
                            <div class="form-cont">
                                <img style="width: 80px;height: 80;" src="<?php echo $info['pic']; ?>" alt="">
                            </div>
                        </div>


                        <div class="form-group-col-2">
                            <div>
                                <p>
                                    图片上传前预览：<input type="file" id="xdaTanFileImg" name="file"
                                        onchange="xmTanUploadImg(this)" accept="image/*" />
                                </p>
                                <img id="xmTanImg" />
                                <div id="xmTanDiv"></div>
                            </div>
                        </div>

                    </form>

                    <div class="form-group-col-2">
                        <div class="form-label"></div>
                        <div class="form-cont">
                            <input type="hidden" name="id" id="id" value="<?php echo $info['id']; ?>">
                            <button class="btn btn-primary" id="button">提交</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    $("#button").click(function () {

        //获取内容
        var phone = $('#phone').val();
        var weixin = $('#weixin').val();
        var qq = $('#qq').val();
        if (phone == '') {
            layer.msg('电话不能为空', { icon: 5, time: 900 });
            return false;
        }

        if (weixin == '') {
            layer.msg('微信号不能为空', { icon: 5, time: 900 });
            return false;
        }


        if (qq == '') {
            layer.msg('QQ号不能为空', { icon: 5, time: 900 });
            return false;
        }

        // var pid = $('#pid').val();
        var id = $('#id').val();
        // console.log(formData);

        //获取图片信息
        var file = document.getElementById("xdaTanFileImg").files[0];


        var formData = new FormData();
        formData.append('file', file);
        formData.append('phone', phone);
        formData.append('weixin', weixin);
        formData.append('qq', qq);
        formData.append('id', id);

        // console.log(formData);

        $.ajax({
            url: "/advert/update",
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            mimeType: "multipart/form-data",
            success: function (data) {
                var obj = JSON.parse(data);
                //  alert(obj.code);
                if (obj.code == 201) {
                    layer.msg(obj.mag, { icon: 5, time: 900 });
                }
                if (obj.code == 200) {
                    layer.msg(obj.mag, { icon: 6, time: 900 });
                    // alert(data.msg);
                    setTimeout("location.href='/advert/index';", 1000);
                }

                if (obj.code == 202) {
                    layer.msg(obj.mag, { icon: 5, time: 900 });
                }


            },
            error: function (data) {

                console.log(data);
                // if (data.code == 201) {
                //     layer.msg(data.mag, { icon: 5, time: 900 });
                // }
            }
        });


    });
</script>