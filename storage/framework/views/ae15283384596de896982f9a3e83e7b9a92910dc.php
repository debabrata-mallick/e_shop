<?php $__env->startSection('body'); ?>
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping cart</h3>
                        <hr/>
                        <table class="table table-bordered">
                            <tr class="bg-primary text-center">
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price TK. </th>
                                <th>Quantity</th>
                                <th>Total Price TK. </th>
                                <th>Action</th>
                            </tr>
                            <?php ($i = 1); ?>
                            <?php ($sum = 0); ?>
                            <?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($cartProduct->name); ?></td>
                                <td><img src="<?php echo e(asset($cartProduct->options->image)); ?>" alt="" height="50" width="50"/> </td>
                                <td><?php echo e($cartProduct->price); ?></td>
                                <td>
                                    <?php echo e(Form::open(['route'=>'update-cart', 'method'=>'post'])); ?>

                                        <input type="number" name="qty" value="<?php echo e($cartProduct->qty); ?>" min="1"/>
                                        <input type="hidden" name="rowId" value="<?php echo e($cartProduct->rowId); ?>" min="1"/>
                                        <input type="submit" name="btn" value="Update"/>
                                    <?php echo e(Form::close()); ?>

                                </td>
                                <td><?php echo e($total = $cartProduct->price*$cartProduct->qty); ?></td>
                                <td>
                                    <a href="<?php echo e(route('delete-cart-item', ['rowId'=>$cartProduct->rowId])); ?>" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                             <?php $sum = $sum+$total; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <hr/>
                        <table class="table table-bordered">
                            <tr>
                                <th>Item Total (TK. )</th>
                                <td><?php echo e($sum); ?></td>
                            </tr>
                            <tr>
                                <th>Vat Total (TK. )</th>
                                <td><?php echo e($vat = 0); ?></td>
                            </tr>
                            <tr>
                                <th>Grand Total (TK. )</th>
                                <td><?php echo e($orderTotal= $sum+$vat); ?></td>
                                <?php
                                Session::put('orderTotal',$orderTotal);
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <?php if(Session::get('customerId') && Session::get('shippingId')): ?>
                            <a href="<?php echo e(route('checkout-payment')); ?>" class="btn btn-success pull-right">Checkout</a>
                        <?php elseif(Session::get('customerId')): ?>
                            <a href="<?php echo e(route('checkout-shipping')); ?>" class="btn btn-success pull-right">Checkout</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('checkout')); ?>" class="btn btn-success pull-right">Checkout</a>
                        <?php endif; ?>
                        <a href="" class="btn btn-success">Continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
        <!--single-->
        <!--new-arrivals-->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>