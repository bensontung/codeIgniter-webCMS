<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            网站信息
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">系统设置</a></li>
            <li class="active">网站信息</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box  box-primary">
                    <div class="box-header">
                        <h3 class="box-title">填写表单
                            <small>*为必须填写项</small>
                        </h3>
                        <?php if (!empty($errorInfo)):?>
                            <div class="alert alert-warning">
                                <a href="#" class="close" data-dismiss="alert">
                                    &times;
                                </a>
                                <?php echo $errorInfo; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.box-header -->
                    <form class="form-horizontal" id="addForm" method="post" accept-charset="utf-8" action="" >
                        <div class="box-body">
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">网站名称</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="id" value="<?php echo $info['id'];?>">
                                    <input type="text" name="title" value="<?php if(set_value('title')){ echo set_value('title'); }else{ echo $info['title'];} ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">网站关键字</label>
                                <div class="col-sm-6">
                                    <input  type="text" name="keywords" value="<?php if(set_value('keywords')){ echo set_value('keywords'); }else{ echo $info['keywords'];} ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">网站描述</label>
                                <div class="col-sm-6">
                                    <input  type="text" name="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $info['description'];} ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">版权信息</label>
                                <div class="col-sm-6">
                                    <input  type="text" name="copyright" value="<?php if(set_value('copyright')){ echo set_value('copyright'); }else{ echo $info['copyright'];} ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">邮箱</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="email" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $info['email'];} ?>" class="form-control"  >
                                </div>
                            </div>

                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer ">
                            <div class="col-sm-11 text-right">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>


