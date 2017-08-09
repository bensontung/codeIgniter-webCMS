<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>消息提示</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo base_url('static/css/bootstrap/bootstrap.min.css');  ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('static/js/plugins/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/plugins/respond.min.js'); ?>"></script>
    <![endif]-->

    <script src="<?php echo base_url('static/js/plugins/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/bootstrap/bootstrap.min.js'); ?>"></script>

</head>
<body class="hold-transition ">
<?php
  if(isset($type)){
      switch($type){
          case "del_ok":
              $mes="删除成功!";
              break;
          case "del_fail":
              $mes="删除失败!";
              break;
          case "add_ok":
              $mes="添加成功!";
              break;
          case "add_fail":
              $mes="添加失败!";
              break;
          case "edit_fail":
              $mes="修改失败!";
              break;
          case "edit_ok":
              $mes="修改成功!";
              break;
      }
  }
  if(!isset($backurl)){
      $backurl="";
  }
?>
<!-- Modal -->
<div class="modal fade" id="noteModal" tabindex="-1" role="dialog" data-backdrop="static" data-show="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6  >
                    操作提示
                </h6>
            </div>
            <div class="modal-body">
                <?php echo $mes; ?>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-sm btn-primary" onclick="sure()"> 确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- /.modal -->

<script>
    $(function () {
        $('#noteModal').modal('show');
    });
    function sure(){
        location.href ="<?php echo $backurl; ?>";
    }
</script>


</body>
</html>