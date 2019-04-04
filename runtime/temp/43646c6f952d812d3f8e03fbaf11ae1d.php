<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/admin\view\video\add.html";i:1553480158;}*/ ?>
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
                            <h2 class="title">视频添加</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">标题:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="标题" class="form-control form-boxed " name="cten"
                                    id="cten">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                                <div class="form-label">分类:</div>
                                <div class="form-cont">
                                    <select style="width:auto;" name="fid" id="fid">
                                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$row): ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['cate']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group-col-2">
                            <div class="form-label">视频路径:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="视频路径" class="form-control form-boxed " name="vde"
                                    id="vde">
                                <span class="span"></span>
                            </div>
                        </div>


                        <div class="form-group-col-2">
                            <div>
                                <p>
                                    视频封面：<input type="file" id="xdaTanFileImg" name="file"
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
        var cten = $('#cten').val();
        var fid = $('#fid').val();
        var vde = $('#vde').val();
        //获取图片信息
        var file = document.getElementById("xdaTanFileImg").files[0];
        
        if (cten == '') {
            layer.msg('标题不能为空', { icon: 5, time: 900 });
            return false;
        }

        if (fid == '') {
            layer.msg('分类不能为空', { icon: 5, time: 900 });
            return false;
        }


        if (vde == '') {
            layer.msg('视频路径不能为空', { icon: 5, time: 900 });
            return false;
        }

        if (file == '') {
            layer.msg('图片不能为空', { icon: 5, time: 900 });
            return false;
        }


        var formData = new FormData();
        formData.append('file', file);
        formData.append('cten', cten);
        formData.append('fid', fid);
        formData.append('vde', vde);


        $.ajax({
            url: "/video/insert",
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
                    setTimeout("location.href='/video/index';", 1000);
                }

                if (obj.code == 202) {
                    layer.msg(obj.mag, { icon: 5, time: 900 });
                }


            },
            error: function (data) {

                console.log(data);
                
            }
        });


    });
</script>