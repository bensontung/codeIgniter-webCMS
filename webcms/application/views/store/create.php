<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            内容添加
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">内容</a></li>
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
                    <form class="form-horizontal" id="addForm" method="post" accept-charset="utf-8" action="<?php echo base_url('/store/create'); ?>" >
                        <div class="box-body">

                            <div class="form-group">
                                <label  class="col-sm-1 control-label">网店</label>
                                <div class="col-sm-3">
                                    <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="title"  class="col-sm-2 col-md-1 control-label">地区</label>
                                <div class="col-sm-5 col-md-3">
                                    <select class="form-control" name="typeid">
                                        <?php foreach ($typeList as $list_type): ?>
                                            <option value="<?=$list_type['id'];?>" <?php if(set_value('typeid')==$list_type['id']) echo " selected"; ?>>
                                                <?=$list_type['title'];?>
                                            </option>
                                            <?php if (isset($list_type['son'])): ?>
                                            <?php foreach ($list_type['son'] as $item_son): ?>
                                                <option value="<?=$item_son['id'];?>" <?php if(set_value('typeid')==$item_son['id']) echo " selected"; ?>>
                                                    --<?=$item_son['title'];?>
                                                </option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
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
                                <label   class="col-sm-1 control-label">地址</label>
                                <div class="col-sm-8">
                                    <input  type="text" name="info" value="<?php echo set_value('info'); ?>" class="form-control"  >
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


