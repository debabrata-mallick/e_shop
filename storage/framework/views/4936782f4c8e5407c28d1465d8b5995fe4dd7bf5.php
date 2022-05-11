<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-left">
                <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +880-01711122211</a>
            </div>
            <div class="top-right">
                <ul>
                    <li><a href="<?php echo e(route('checkout')); ?>">Checkout</a></li>
                    
                    <?php if(auth()->guard('customer')->guest()): ?>
                        <li><a href="<?php echo e(route('user/login')); ?>">Login</a></li>
                        <!-- <li><a href="<?php echo e(route('checkout')); ?>"> Create Account </a></li> -->
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::guard('customer')->user()->firstName); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <form action="<?php echo e(url('user/logout')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <button class="btn btn-block">Logout</button>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="heder-bottom">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left">
                    <h1><a href="<?php echo e(route('/')); ?>">Kapor-Chopor.com <span>Shop Anywhere</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="active"><a href="<?php echo e(route('category-product',['id'=>$category->id])); ?>" class="act"><?php echo e($category->category_name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="<?php echo e(route('checkout')); ?>">
                            <h3> <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                <img src="<?php echo e(asset('/')); ?>/front-end/images/bag.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--header-->