<?php $__env->startSection('body'); ?>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success"> <?php echo e(Session::get('message')); ?></h3>
                    <form action="<?php echo e(route('new-category')); ?>" method="post" class="form-horizontal">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Category Name</label>

                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="category_name">
                                <span class="text-danger"><?php echo e($errors->has('category_name') ? $errors->first('category_name') : ' '); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Category Description</label>

                            <div class="form-group col-md-9">
                                <textarea class="form-control" name="category_description"></textarea>
                                <span class="text-danger"><?php echo e($errors->has('category_description') ? $errors->first('category_description') : ' '); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">publication status</label>

                            <div class="form-group col-md-9">
                                <label> <input type="radio" name="publication_status" value="1">Published</label>
                                <label> <input type="radio" name="publication_status" value="0">Unpublished</label>
                                <span class="text-danger"><?php echo e($errors->has('publication_status') ? $errors->first('publication_status') : ' '); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="form-group col-md-9">
                                <input type="submit" value="Save Category Info" class="btn btn-success btn-block" name="btn">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>