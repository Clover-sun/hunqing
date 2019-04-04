<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/admin\view\tenant\logo.html";i:1552876572;}*/ ?>
<style>
    #xmTanImg {
        width: 100px;
        height: 100px;

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
                            <h2 class="title">更换logo</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">现有图片:</div>
                            <div class="form-cont">
                                <img src="<?php echo $logo; ?>" style="width:100px;height:80px;">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">商户Logo:</div>
                            <div>
                                <p>
                                    <input type="file" id="xdaTanFileImg" name="file" onchange="xmTanUploadImg(this)" />
                                </p>
                                <img id="xmTanImg" />
                                <div id="xmTanDiv"></div>
                            </div>
                        </div>

                        <!--开始::结束-->
                    </form>

                    <div class="form-group-col-2">
                        <div class="form-label"></div>
                        <div class="form-cont">
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
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

        //获取id
        var id = $('#id').val();
        // alert(id);
        //获取图片信息
        var file = document.getElementById("xdaTanFileImg").files[0];

        var formData = new FormData();
        formData.append('file', file);
        formData.append('id', id);

        // console.log(formData);

        $.ajax({
            url: "/teds/logos",
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
                    setTimeout("location.href='/tenant/index';", 1000);
                }

                if (obj.code == 202) {
                    layer.msg(obj.mag, { icon: 5, time: 900 });
                }

                // alert(data);

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