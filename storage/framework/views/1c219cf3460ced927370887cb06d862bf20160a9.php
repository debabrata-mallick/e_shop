<?php $__env->startSection('body'); ?>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message"><?php echo e(Session::get('message')); ?></h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL no</th>
                            <th>Brand Name</th>
                            <th>Brand description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($brand-> brand_name); ?></td>
                                <td><?php echo e($brand-> brand_description); ?></td>
                                <td><?php echo e($brand-> publication_status==1 ? 'Published':'Unpublished'); ?></td>

                                <td>
                                    <?php if($brand-> publication_status==1): ?>
                                        <a href="<?php echo e(route('unpublished-brand',['id'=>$brand->id])); ?>" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('published-brand',['id'=>$brand->id])); ?>" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('edit-brand',['id'=>$brand->id])); ?>" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(route('delete-brand',['id'=>$brand->id])); ?>" class="btn btn-danger btn-xs">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>