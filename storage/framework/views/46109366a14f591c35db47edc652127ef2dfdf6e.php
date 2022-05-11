<?php $__env->startSection('body'); ?>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz"><?php echo e(Session::get('message')); ?></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            <?php ($i=1); ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($product->category_name); ?></td>
                                <td><?php echo e($product->brand_name); ?></td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td>
                                    <img src="<?php echo e(asset($product->product_image)); ?>" alt="" height="100" width="100">
                                </td>
                                <td><?php echo e($product->product_price); ?></td>
                                <td><?php echo e($product->product_quantity); ?></td>
                                <td><?php echo e($product->publication_status); ?></td>
                                <td>
                                    <?php if($product-> publication_status==1): ?>
                                        <a href="<?php echo e(route('unpublished-product',['id'=>$product->id])); ?>" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('published-product',['id'=>$product->id])); ?>" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('edit-product',['id'=>$product->id])); ?>" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                        <a href="" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                    <a href="<?php echo e(route('delete-product',['id'=>$product->id])); ?>" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>