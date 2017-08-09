<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <!--<li class="header">导航菜单</li>-->
            <li class="treeview  <?php if($leftMenu=='set') echo 'active'; ?>">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>系统设置</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($leftMenuTree=='setSys') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/set'); ?>">
                            <i class="fa fa-circle-o"></i> 网站信息
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='setUser') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/set/user'); ?>">
                            <i class="fa fa-circle-o"></i> 账号管理
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='setBackup') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/set/backup'); ?>">
                            <i class="fa fa-circle-o"></i> 备份恢复</a>
                    </li>
                </ul>
            </li>
            <li class="treeview <?php if($leftMenu=='product') echo 'active'; ?>">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>产品管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($leftMenuTree=='productList') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/product'); ?>">
                            <i class="fa fa-circle-o"></i> 产品列表
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='productCreate') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/product/create'); ?>">
                            <i class="fa fa-circle-o"></i> 添加产品
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='productType') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/product/type'); ?>">
                            <i class="fa fa-circle-o"></i> 产品分类
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview <?php if($leftMenu=='news') echo 'active'; ?>">
                <a href="<?php echo base_url('/news'); ?>">
                    <i class="fa fa-th"></i>
                    <span>内容管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($leftMenuTree=='newsList') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/news'); ?>">
                            <i class="fa fa-circle-o"></i> 内容列表
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='newsCreate') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/news/create'); ?>">
                            <i class="fa fa-circle-o"></i> 添加内容
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='newsType') echo "class='active'"; ?>>
                        <a  href="<?php echo base_url('/news/type'); ?>">
                            <i class="fa fa-circle-o"></i> 内容分类
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview <?php if($leftMenu=='ad') echo 'active'; ?>">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>广告管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($leftMenuTree=='adList') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/ad'); ?>">
                            <i class="fa fa-circle-o"></i> 广告列表
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='adCreate') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/ad/create'); ?>">
                            <i class="fa fa-circle-o"></i> 添加广告
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='adType') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/ad/type'); ?>">
                            <i class="fa fa-circle-o"></i> 广告分类
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" onclick="fileManage()" >
                    <i class="fa fa-folder-open"></i> <span>文件管理</span>
                </a>
            </li>


            <li class="treeview <?php if($leftMenu=='store') echo 'active'; ?>">
                <a href="<?php echo base_url('/store'); ?>">
                    <i class="fa fa-th"></i>
                    <span>体验店管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($leftMenuTree=='storeList') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/store'); ?>">
                            <i class="fa fa-circle-o"></i> 内容列表
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='storeCreate') echo "class='active'"; ?>>
                        <a href="<?php echo base_url('/store/create'); ?>">
                            <i class="fa fa-circle-o"></i> 添加内容
                        </a>
                    </li>
                    <li <?php if($leftMenuTree=='storeType') echo "class='active'"; ?>>
                        <a  href="<?php echo base_url('/store/type'); ?>">
                            <i class="fa fa-circle-o"></i> 内容分类
                        </a>
                    </li>
                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<script>
    function fileManage(){
        window.open('<?php echo base_url('static/plugins/'); ?>/kcfinder/?cms=CodeIgniter&lang=zh-cn&type=files&dir=files/public', 'kcfinder_textbox',
            'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
                'resizable=1, scrollbars=0, width=800, height=600, top=100, left=100'
        );
    }
</script>