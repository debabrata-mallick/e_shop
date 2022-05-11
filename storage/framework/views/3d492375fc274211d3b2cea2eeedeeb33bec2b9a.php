<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('add-category')); ?>">Add Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('manage-category')); ?>">manage Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Brand <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('add-brand')); ?>">Add Brand</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('manage-brand')); ?>">manage Brand</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('add-product')); ?>">Add Product</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('manage-product')); ?>">Manage Product</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i>Order Reports</a>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i>Sales Report</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>