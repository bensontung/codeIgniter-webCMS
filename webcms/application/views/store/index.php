<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            体验店列表
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">体验店</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box  box-primary">
                    <div class="box-header">
                        <h3 class="box-title">列表</h3>



                        <div class="box-tools">
                            <form  id="searchForm" method="post" accept-charset="utf-8" action="<?php echo base_url('/store/search/'); ?>" >

                               <div class="row" style="width: 460px;">
                                       <div class="col-sm-4">
                                <div class="input-group input-group-sm "  >
                                <select class="form-control" name="typeid">
                                    <option value="0">请选择</option>
                                    <?php foreach ($typeSelect as $list_type): ?>
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

                                       <div class="col-sm-8">
                                <div class="input-group input-group-sm "  >
                                    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search" value="<?php if(!empty($keyword)) echo $keyword; ?>">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                     </div>


                                </div>
                            </form>

                        </div>

                        <?php if (!empty($errorInfo)):?>
                            <div class="alert alert-warning" style="margin-top: 15px;">
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
                                <th>地区</th>
                                <th>内容</th>
                                <th>时间</th>
                                <th>查看</th>
                            </tr>

                            <?php foreach ($list as $list_item): ?>
                            <tr>
                                <td><input type="checkbox" name="chooseid[]" value="<?php echo $list_item['id']; ?>"></td>
                                <td><?php echo $list_item['title']; ?></td>
                                <td>
                                    <?php echo findType($typeList,$list_item['typeid']); ?>
                                </td>
                                <td><?php echo $list_item['info']; ?></td>

                                <td>
                                    <?php
                                        if($list_item['time']){
                                            echo date("Y-m-d H:i",$list_item['time']);
                                        }
                                    ?>
                                </td>
                                <td><a href="<?php echo base_url('/store/edit/'.$list_item['id']); ?>">编辑</a></td>
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
                        <?=$pageList;?>
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