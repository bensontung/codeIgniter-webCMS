<script>
    function openKCFinder(field) {
        window.KCFinder = {
            callBack: function(url) {
                field.value = url;
                window.KCFinder = null;
            }
        };
        window.open('<?php echo base_url('static/plugins/'); ?>/kcfinder/?cms=CodeIgniter&lang=zh-cn&type=files&dir=files/public', 'kcfinder_textbox',
            'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
                'resizable=1, scrollbars=0, width=800, height=600, top=100, left=100'
        );
    }
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            广告添加
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">广告</a></li>
            <li class="active">列表</li>
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
                    <form class="form-horizontal" id="addForm" method="post" accept-charset="utf-8" action="<?php echo base_url('/ad/create'); ?>" >
                        <div class="box-body">

                            <div class="form-group">
                                <label  class="col-sm-1 control-label">广告名称</label>
                                <div class="col-sm-3">
                                    <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">副标题</label>
                                <div class="col-sm-3">
                                    <input type="text" name="subtitle" value="<?php echo set_value('subtitle'); ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="title"  class="col-sm-2 col-md-1 control-label">广告分类</label>
                                <div class="col-sm-5 col-md-3">
                                    <select class="form-control" name="typeid">
                                        <?php foreach ($typeList as $list_type): ?>
                                            <option value="<?=$list_type['id'];?>" <?php if(set_value('title')==$list_type['title']) echo " selected"; ?>><?=$list_type['title'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group " style="line-height: ">
                                <label   class="col-sm-1 control-label">序号</label>
                                <div class="col-sm-1">
                                    <input  type="text" name="listid" value="<?php echo set_value('listid'); ?>" placeholder="0" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">广告图片</label>
                                <div class="col-sm-3">
                                    <input type="text" name="proImg" value="<?php echo set_value('proImg'); ?>" class="form-control" onclick="openKCFinder(this)"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">手机图片</label>
                                <div class="col-sm-3">
                                    <input type="text" name="mobImg" value="<?php echo set_value('mobImg'); ?>" class="form-control" onclick="openKCFinder(this)"  >
                                </div>
                            </div>


                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">开启</label>
                                <div class="col-sm-8 radio">
                                    <label><input type="radio" name="show" value="0" <?php if(set_value('show')!=1) echo " checked"; ?> >关</label>
                                    <label  style="margin-left: 20px;"><input type="radio" name="show" value="1" <?php if(set_value('show')==1) echo " checked"; ?>>开</label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">广告网址</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="slug" value="<?php echo set_value('slug'); ?>" class="form-control"  >
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


