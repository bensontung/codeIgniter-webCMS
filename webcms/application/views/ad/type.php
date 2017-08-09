<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            广告分类
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">广告管理</a></li>
            <li class="active">广告分类</li>
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
                                <th>广告型号</th>
                                <th>排序号</th>
                                <th>管理</th>
                            </tr>
                            <?php foreach ($list as $list_item): ?>
                            <tr>
                                <td ><?php echo $list_item['title']; ?></td>
                                <td><?php echo $list_item['listid']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" onclick=editType(<?php echo $list_item['id'].',"'.$list_item['title'].'",'.$list_item['listid']; ?>)>编辑</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php echo form_open('/ad/type'); ?>
                            <tr>
                                <td><input  type="text" class="form-control"  name="title" value=""></td>
                                <td><input  type="text" class="form-control"  name="listid" value="0"></td>
                                <td><button type="submit" class="btn btn-sm btn-primary">增加</button></td>
                            </tr>
                            </form>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">

                    </div>
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
                <button type="button" class="btn btn-sm btn-primary" onclick="delType()"> 确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- /.modal -->

<!-- editModal-->
<div class="modal fade" id="editModal" tabindex="-2" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="editForm" method="post" accept-charset="utf-8" action="<?php echo base_url('/ad/type/edit/'); ?>" onsubmit="return validate_form(this)">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h6  class="modal-title">编辑</h6>
                </div>
                <div class="modal-body">
                    <div class="row" >
                        <div class="form-group">
                            <label  class="col-lg2 col-md-2 control-label">名称</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="hidden" name="id" value="">
                                <input type="text" class="form-control " name="title" id="title" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-lg-2 col-md-2 control-label">序号</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="text" class="form-control" name="listid" value="" >
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-sm btn-danger marginL10" data-toggle="modal" data-target="#delModal" >删除</button>
                    <button type="submit" class="btn btn-sm btn-primary" > 确定</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div>
</div>

<!-- /.editModal-->




<script>
    var delId=0;
    $(function () {
        $('#delModal').on('show.bs.modal', function () {
            $('#editModal').modal('hide');
        })
    });

    function editType(id,title,listid){
        delId=id;
        $("#editModal input[name='id']").val(id);
        $("#editModal input[name='title']").val(title);
        $("#editModal input[name='listid']").val(listid);
        $('#editModal').modal('show');
    }

    function delType(){
        location.href ="<?php echo base_url('/ad/type/del/'); ?>"+"/"+delId;
    }

</script>

<script type="text/javascript">

    function validate_required(field)
    {
        with (field)
        {
            if (value==null||value=="")
            {
                //alert(alerttxt);
                return false;
            }
            else {
                return true;
            }
        }
    }

    function validate_form(thisform)
    {
        with (thisform)
        {
            if (validate_required(title)==false)
            {
                name.focus();
                name.placeholder='请填写名称！';
                return false;
            }
            if (validate_required(listid)==false)
            {
                listid.focus();
                listid.placeholder='请填写排序号！';
                return false;
            }
        }
    }
</script>