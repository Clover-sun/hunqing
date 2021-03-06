<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/szz/public/../application/admin/view/tenant/add.html";i:1552876572;}*/ ?>
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
                            <h2 class="title">商户添加</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">影楼名:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="影楼名" class="form-control form-boxed " name="name"
                                    id="name">
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
                        <div class="form-group-col-2">
                            <div class="form-label">详细地址:</div>

                            <div class="form-cont box">
                                <!-- 省份 -->
                                <select style="width:auto;" name="province" class="province" id="province">
                                </select>
                                <!-- 市 -->
                                <select style="width:auto;" name="city" class="city" id="city">
                                    <option value="">--请选择市--</option>
                                </select>
                                <!-- 县 -->
                                <select style="width:auto;" name="area" class="area" id="area">
                                    <option value="">--请选择区--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-cont">
                                <input type="text" placeholder="详细地址" class="form-control form-boxed" name="ress"
                                    id="ress">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">手机号:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="联系电话" class="form-control form-boxed" name="phone"
                                    id="phone">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">密码：</div>
                            <div class="form-cont">
                                <input type="password" placeholder="密码" class="form-control form-boxed" name="password"
                                    id="password">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">确认密码：</div>
                            <div class="form-cont">
                                <input type="password" placeholder="确认密码" class="form-control form-boxed"
                                    name="repassword" id="repassword">
                                <span class="span"></span>
                            </div>
                        </div>

                        <div class="form-group-col-2">
                            <div class="form-label">服务类型:</div>
                            <div class="form-cont">

                                <label class="radio">
                                    <input type="radio" name="cet" class="cet" value="1" checked />
                                    <span>包年</span>

                                </label><input type="text" placeholder="" class="form-control form-boxed" name="cetval"
                                    id="cetval">


                                <label class="radio">
                                    <input type="radio" name="cet" class="cet" value="2" />
                                    <span>VIP</span>

                                </label><input type="text" placeholder="" class="form-control form-boxed" name="cetvas"
                                    id="cetvas">

                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">尾页广告:</div>
                            <div class="form-cont">
                                <select style="width:auto;" name="pag" id="pag">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group-col-2">
                            <div class="form-label">弹窗广告:</div>
                            <div class="form-cont">
                                <select style="width:auto;" name="ale" id="ale">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
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
</div>
<script>

    /* 省市区三级联动 */
    function privance() //省
    {
        $.post("/tools/privance", {}, function (data, textStatus, xhr) {
            var html = "<option value='110000'>--请选择--</option>";
            for (var i = 0; i < data.length; i++) {
                html += "<option value='" + data[i]['id'] + "'>" + data[i]['cityname'] + "</option>";
            }
            $('.province').html(html);
        });
    }
    privance();

    function city() //市
    {
        var provinceid = $('.province').val(); //省id

        $.post("/tools/city", { provinceid: provinceid }, function (data, textStatus, xhr) {
            var html;
            for (var i = 0; i < data.length; i++) {
                html += "<option value='" + data[i]['id'] + "'>" + data[i]['cityname'] + "</option>";
            }
            $('.city').html(html);
            area();
        });
    }
    city();

    function area() //县
    {
        var cityid = $('.city').val(); //市id
        //alert(cityid);
        $.post("/tools/area", { cityid: cityid }, function (data, textStatus, xhr) {
            var html;
            for (var i = 0; i < data.length; i++) {
                html += "<option value='" + data[i]['id'] + "'>" + data[i]['cityname'] + "</option>";
            }
            $('.area').html(html);
        });
    }
    area();

    $('.province').change(function (event) { //选择省
        city();
    });

    $('.city').change(function (event) { //选择市
        area();
    });
        /* 省市区三级联动 end */

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

    $("#button").click(function () {
        // alert(1111);
        var name = $("#name").val();
        //获取 图片信息
        var file = document.getElementById("xdaTanFileImg").files[0];
        var province = $("#province").val();
        var city = $("#city").val();
        var area = $("#area").val();
        var ress = $("#ress").val();
        var phone = $("#phone").val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        var cet = $('input:radio:checked').val();
        var cetval = $("#cetval").val();
        var cetvas = $("#cetvas").val();
        var pag = $("#pag").val();
        var ale = $("#ale").val();

        // console.log(formData);
        // // alert(name);
        if(name == ''){
            layer.msg('影楼名不能为空', { icon: 5, time: 900 });
            return false;
        }

        if(file == ''){
            layer.msg('logo图片不能为空', { icon: 5, time: 900 });
            return false;
        }
        if(province == ''){
            layer.msg('省份不能为空', { icon: 5, time: 900 });
            return false;
        }

        if(city == ''){
            layer.msg('城市不能为空', { icon: 5, time: 900 });
            return false;
        }
        
        if(area == ''){
            layer.msg('区(县)不能为空', { icon: 5, time: 900 });
            return false;
        }

        if(ress == ''){
            layer.msg('详细地址不能为空', { icon: 5, time: 900 });
            return false;
        }


        if(phone == ''){
            layer.msg('手机号不能为空', { icon: 5, time: 900 });
            return false;
        }


        if(password == ''){
            layer.msg('密码不能为空', { icon: 5, time: 900 });
            return false;
        }


        if(repassword == ''){
            layer.msg('确认密码不能为空', { icon: 5, time: 900 });
            return false;
        }

        if(cet == 1){
            if(cetval == ''){
                layer.msg('使用时间不能为空', { icon: 5, time: 900 });
                return false;
            }
        }

        if(cet == 2){
            if(cetvas == ''){
                layer.msg('使用次数不能为空', { icon: 5, time: 900 });
                return false;
            }
        }


        var formData = new FormData();
        formData.append('name', name);
        formData.append('file', file);
        formData.append('province', province);
        formData.append('city', city);
        formData.append('area', area);
        formData.append('ress', ress);
        formData.append('phone', phone);
        formData.append('password', password);
        formData.append('repassword', repassword);
        formData.append('cet', cet);
        formData.append('cetval', cetval);
        formData.append('cetvas', cetvas);
        formData.append('pag', pag);
        formData.append('ale', ale);

        layer.confirm('商户信息是否准确', ['删除', '取消'], function () {
            $.ajax({
                url: '/tenant/insert',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                mimeType: "multipart/form-data",
                success: function (data) {
                    // alert(data);
                    // // console.log(data);
                    var data=JSON.parse(data);
                    // var msgs=data.msg;
                    //判断返回结果
                    if (data.code == 200) {
                
                        layer.msg(data.message, { icon: 6, time: 900 });
                        // location.href = '/adminuser/index';
                        setTimeout("location.href='/tenant/index';", 1000);

                    } else if (data.code == 400) {

                        layer.msg(data.message, { icon: 5 });

                    } else if (data.code == 201) {

                        layer.msg(data.message, { icon: 5 });
                    }else if (data.code == 202) {

                        layer.msg(data.message, { icon: 5 });
                    }

                },
                error: function (e) {
                    //    alert(e);
                    console.log(e);
                }
            })

        })
        // console.log(postData)
        //alert(aa);
    })
</script>