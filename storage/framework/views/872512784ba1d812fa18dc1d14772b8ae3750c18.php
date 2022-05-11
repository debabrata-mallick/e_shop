<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Login</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile">
                    <h3>Login To New Shop</h3>
                    <form action="<?php echo e(route('customer-sign-in')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required autofocus>
                            <div class="clearfix"></div>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Login">
                    </form>
                </div>
                <div class="forg">
                    <a href="#" class="forg-left">Forgot Password</a>
                    <a href="registered.html" class="forg-right">Register</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--login-->
    </div>
    <!--content-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>