<!---footer--->
<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div class="social-icon">
                    <a href="#"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>My Account</h4>
                <ul>
                    <li><a href="<?php echo e(route('checkout')); ?>">Checkout</a></li>
                    <li><a href="<?php echo e(route('user/login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(url('registered')); ?>"> Create Account </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('brand-product', ['id'=>$brand->id])); ?>"><?php echo e($brand->brand_name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">West RazaBazar, Dhaka-1215</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">+880-01711122211</a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> e_shop@mail.com</a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2018 kapor-Chopor.com . All rights reserved | Design by <a href="http://w3layouts.com">Cloud</a></p>
        </div>
        <div class="copy-right">
            <img src="<?php echo e(asset('/')); ?>/front-end/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->