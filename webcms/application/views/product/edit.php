<script src="<?php echo base_url('static/plugins/ckeditor/ckeditor.js'); ?>"></script>
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
            产品编辑
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">产品</a></li>
            <li class="active">编辑</li>
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
                                <label  class="col-sm-1 control-label">产品名称</label>
                                <div class="col-sm-3">
                                    <input type="text" name="title" value="<?php if(set_value('title')){ echo set_value('title'); }else{ echo $product['title'];} ?>" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">副标题</label>
                                <div class="col-sm-3">
                                    <input type="text" name="subtitle" value="<?php if(set_value('subtitle')){ echo set_value('subtitle'); }else{ echo $product['subtitle'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="title"  class="col-sm-2 col-md-1 control-label">产品分类</label>
                                <div class="col-sm-5 col-md-3">
                                    <select class="form-control" name="typeid">
                                        <?php foreach ($typeList as $list_type): ?>
                                            <option value="<?=$list_type['id'];?>" <?php if(set_value('typeid') ){ if(set_value('typeid')==$list_type['id'] ) echo " selected";}else{ if($product['typeid']==$list_type['id'] ) echo " selected";}  ?>><?=$list_type['title'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group " style="line-height: ">
                                <label   class="col-sm-1 control-label">序号</label>
                                <div class="col-sm-1">
                                    <input  type="text" name="listid" value="<?php if(set_value('listid')){ echo set_value('listid'); }else{ echo $product['listid'];} ?>" placeholder="0" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">产品图片</label>
                                <div class="col-sm-3">
                                    <input type="text" name="proImg" value="<?php if(set_value('proImg')){ echo set_value('proImg'); }else{ echo $product['img'];} ?>" class="form-control" onclick="openKCFinder(this)"  >
                                </div>
                            </div>


                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">开启</label>
                                <div class="col-sm-8 radio">
                                    <label><input type="radio" name="show" value="0" <?php if($product['show']!=1) echo " checked"; ?> >关</label>
                                    <label  style="margin-left: 20px;"><input type="radio" name="show" value="1" <?php if($product['show']==1) echo " checked"; ?>>开</label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">产品网址</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="slug" value="<?php if(set_value('slug')){ echo set_value('slug'); }else{ echo $product['slug'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">APP下载</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="urlApp" value="<?php if(set_value('urlApp')){ echo set_value('urlApp'); }else{ echo $product['urlApp'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">讨论区</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="urlBbs" value="<?php if(set_value('urlBbs')){ echo set_value('urlBbs'); }else{ echo $product['urlBbs'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">酷玩乐行</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="urlPlay" value="<?php if(set_value('urlPlay')){ echo set_value('urlPlay'); }else{ echo $product['urlPlay'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label   class="col-sm-1 control-label">购买地址</label>
                                <div class="col-sm-3">
                                    <input  type="text" name="urlBuy" value="<?php if(set_value('urlBuy')){ echo set_value('urlBuy'); }else{ echo $product['urlBuy'];} ?>" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group " style="margin: 42px 30px 20px;">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#infoTab" aria-controls="infoTab" role="tab" data-toggle="tab">
                                            <strong>详细内容</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#techTab" aria-controls="techTab" role="tab" data-toggle="tab">
                                            <strong>技术参数</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#faqTab" aria-controls="faqTab" role="tab" data-toggle="tab">
                                            <strong>常见问题</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#mobileTab" aria-controls="mobileTab" role="tab" data-toggle="tab">
                                            <strong>手机版内容</strong>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="infoTab">
                                        <div >
                                            <textarea  name="info" id="info" class="form-control">
                                                <?php if(set_value('info')){ echo set_value('info'); }else{ echo $product['info'];} ?>
                                            </textarea>
                                            <script type="text/javascript">CKEDITOR.replace('info',{height: 320,allowedContent: true});</script>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="techTab">
                                        <div >
                                            <textarea  name="tech" id="tech" class="form-control">
                                                <?php if(set_value('tech')){ echo set_value('tech'); }else{ echo $product['tech'];} ?>
                                            </textarea>
                                            <script type="text/javascript">CKEDITOR.replace('tech',{height: 320,allowedContent: true});</script>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="faqTab">
                                        <div >
                                            <textarea  name="faq" id="faq" class="form-control">
                                                <?php if(set_value('faq')){ echo set_value('faq'); }else{ echo $product['faq'];} ?>
                                            </textarea>
                                            <script type="text/javascript">CKEDITOR.replace('faq',{height: 320,allowedContent: true});</script>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="mobileTab">
                                        <div >
                                            <textarea  name="mpage" id="mpage" class="form-control">
                                                <?php if(set_value('mpage')){ echo set_value('mpage'); }else{ echo $product['mpage'];} ?>
                                            </textarea>
                                            <script type="text/javascript">CKEDITOR.replace('mpage',{height: 320,allowedContent: true});</script>
                                        </div>
                                    </div>
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


