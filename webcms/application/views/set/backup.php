<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            备份与恢复
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">系统设置</a></li>
            <li class="active">备份与恢复</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box  box-primary">
                    <div class="box-header">
                        <h3 class="box-title">列表</h3>

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
                    <div class="box-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>文件名称</th>
                                <th>备份时间</th>
                                <th>文件大小</th>
                                <th>管理</th>
                            </tr>
                            <?php foreach ($list as $list_item):
                                 if (substr($list_item['name'],-4)==".sql"):
                             ?>
                            <tr>
                                <td ><?php echo $list_item['name']; ?></td>
                                <td>
                                    <?php
                                    if($list_item['date']){
                                        echo date("Y-m-d H:i",$list_item['date']);
                                    }
                                    ?>
                                </td>
                                <td><?php echo byte_format($list_item['size']); ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confModal" data-whatever="recover" data-filename="<?php echo $list_item['name']; ?>">恢复</button>
                                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#confModal" data-whatever="del" data-filename="<?php echo $list_item['name']; ?>">删除</button>
                                    <a class="btn btn-sm btn-info" href="<?php echo base_url('/set/backup/down/'.$list_item['name']); ?>" >下载</a>
                                </td>
                            </tr>
                            <?php
                                endif;
                                endforeach;
                            ?>

                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#confModal" data-whatever="backup">新建备份</button>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

<!-- confModal -->
<div class="modal fade" id="confModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h6  class="modal-title">
                    操作提示
                </h6>
            </div>
            <div class="modal-body">
                你确认要xx ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-sm btn-primary" onclick="confOk()"> 确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- /.modal -->




<script>
    var filename= "", opt = "";

        $('#confModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            opt = button.data('whatever'); // Extract info from data-* attributes
            var modal = $(this);
            //modal.find('.modal-title').text('New message to ' + opt);
            if(opt=="backup"){
                //$("#confModal .modal-body").html('你确认要备份 ?');
                modal.find('.modal-body').text('你确认要备份 ?')
            }else if(opt=="del"){
                filename= button.data('filename');
                $("#confModal .modal-body").text('你确认要删除 ?'+filename);
            }else if(opt=="recover"){
                filename= button.data('filename');
                $("#confModal .modal-body").text('你确认要恢复 ?');
            }else if(opt=="down"){
                filename= button.data('filename');
                $("#confModal .modal-body").text('下载文件 ?'+filename);
            }
        });


    function confOk(){
        if(opt=="backup"){
            location.href ="<?php echo base_url('/set/backup/add'); ?>";
        }else if(opt=="del"){
            location.href ="<?php echo base_url('/set/backup/del'); ?>"+"/"+filename;
        }else if(opt=="recover"){
            location.href ="<?php echo base_url('/set/backup/recover/'); ?>"+"/"+filename;
        }else if(opt=="down"){
            location.href ="<?php echo base_url('/set/backup/down/'); ?>"+"/"+filename;
        }
    }





</script>

