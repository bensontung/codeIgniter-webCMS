<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            广告列表
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
                    <form  id="delForm" method="post" accept-charset="utf-8" action="" >
                    <div class="box-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 56px;">选择</th>
                                <th>名称</th>
                                <th>分类</th>
                                <th>是否开启</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>

                            <?php foreach ($list as $list_item): ?>
                            <tr>
                                <td><input type="checkbox" name="chooseid[]" value="<?php echo $list_item['id']; ?>"></td>
                                <td><?php echo $list_item['title']; ?></td>
                                <td>
                                    <?php echo findType($typeList,$list_item['typeid']); ?>
                                </td>
                                <td>
                                    <?php
                                    if($list_item['show'] == 1){
                                        echo "开";
                                    }else {
                                        echo "<span class='label label-warning'>关</span>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($list_item['time']){
                                            echo date("Y-m-d H:i",$list_item['time']);
                                        }
                                    ?>
                                </td>
                                <td><a href="<?php echo base_url('/ad/edit/'.$list_item['id']); ?>">编辑</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php if ($list):?>
                            <div class="form-group ">
                                <div class="col-sm-1">
                                    <label   class="control-label" style="line-height: 32px;">
                                        <input type="checkbox" onclick="CheckAll(this.checked,'chooseid[]')">全选
                                    </label>
                                </div>

                                <div class="col-sm-1">
                                    <input  type="hidden" name="placeholder" value="" >
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModal">删除</button>
                                </div>
                            </div>

                        <?php else: ?>
                            <div class="text-center">暂时无数据!</div>
                        <?php endif; ?>
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


<!-- Modal -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h6  >
                    操作提示
                </h6>
            </div>
            <div class="modal-body">
                你确认要删除 ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-sm btn-primary" onclick="delChoose()"> 确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- /.modal -->
<script>
    $(function () {
        $('#delModal').on('show.bs.modal', function () {
            var hasChoose = checkChoose("chooseid[]");
            if(hasChoose){
                $("#delModal .modal-body").text('你确认要删除 ?');
                $("#delModal .btn-primary").show();
            }else{
                $("#delModal .modal-body").text('请选择要删除的信息!');
                $("#delModal .btn-primary").hide();
            }
        })
    });
    function delChoose(){
        $('#delForm').submit();
    }
</script>