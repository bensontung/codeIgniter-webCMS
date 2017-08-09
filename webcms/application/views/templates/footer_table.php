<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.2.3
    </div>
    <strong> &copy; 2014-2017 </strong>深圳市不见不散电子有限公司. All rights reserved.
</footer>



</div>
<!-- ./wrapper -->

<link href="<?php echo base_url('static/plugins/datatables/dataTables.bootstrap.css');  ?>" rel="stylesheet">
<script src="<?php echo base_url('static/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('static/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('static/js/plugins/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('static/js/app.min.js'); ?>"></script>
<script>
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": false,
            "pageLength": 48,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "language": {
                paginate: {
                    previous: '‹',
                    next:     '›'
                },
                aria: {
                    paginate: {
                        previous: '上一页',
                        next:     '下一页'
                    }
                }
            }
        });



    });

    function CheckAll(v,tag)
    {
        /*
         控制 checkbox全选或者方选
         */
        checkbox=document.getElementsByName(tag);
        for(i=0;i<checkbox.length;i++){
            checkbox[i].checked=v
        }
    }
</script>

</body>
</html>