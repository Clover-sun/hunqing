<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/admin\view\cate\edit.html";i:1554347869;}*/ ?>

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
                            <h2 class="title">模板分类编辑</h2>
                        </header>
                        <hr>
                    </section>
                    <form id="formData" method="post" enctype="multipart/form-data" action="/cate/edits?id=<?php echo $data['id']; ?>">
                        <div class="form-group-col-2">
                            <div class="form-label">模板分类:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="模板分类名称" class="form-control form-boxed " name="cate" value=<?php echo $data['cate']; ?>>
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label"></div>
                            <div class="form-cont">
                                <input type="submit" class="btn btn-primary" id="submit" value="确认编辑" />
                            </div>
                        </div>
                        <!--开始::结束-->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

