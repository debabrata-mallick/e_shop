<?php $__env->startSection('body'); ?>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success"><?php echo e(Session::get('message')); ?></h3>
                    <?php echo e(Form::open(['route'=>'update-product', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editProductName'])); ?>

                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option>--- Select Category Name---</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e($category->id==$product->category_id ? 'Selected' : ''); ?>><?php echo e($category->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger"><?php echo e($errors->has('category_id') ? $errors->first('category_id') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="brand_id">
                                <option>--- Select Brand Name---</option>
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brand->id); ?>" <?php echo e($brand->id==$product->brand_id ? 'Selected' : ''); ?>><?php echo e($brand->brand_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger"><?php echo e($errors->has('brand_id') ? $errors->first('brand_id') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="product_name" value="<?php echo e($product->product_name); ?>"/>
                            <input type="hidden" class="form-control" name="product_id" value="<?php echo e($product->id); ?>"/>
                            <span class="text-danger"><?php echo e($errors->has('product_name') ? $errors->first('product_name') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="product_price" value="<?php echo e($product->product_price); ?>"/>
                            <span class="text-danger"><?php echo e($errors->has('product_price') ? $errors->first('product_price') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Quantity</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="product_quantity"  value="<?php echo e($product->product_quantity); ?>"/>
                            <span class="text-danger"><?php echo e($errors->has('product_quantity') ? $errors->first('product_quantity') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="short_description"><?php echo e($product->short_description); ?></textarea>
                            <span class="text-danger"><?php echo e($errors->has('short_description') ? $errors->first('short_description') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="long_description"><?php echo e($product->long_description); ?></textarea>
                            <span class="text-danger"><?php echo e($errors->has('long_description') ? $errors->first('long_description') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Image</label>
                        <div class="col-md-5">
                            <input type="file" name="product_image" accept="image/*"/>
                            <span class="text-danger"><?php echo e($errors->has('product_image') ? $errors->first('product_image') : ' '); ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo e(asset($product->product_image)); ?>" height="200" width="200" >
                            <span class="text-danger"><?php echo e($errors->has('product_image') ? $errors->first('product_image') : ' '); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label> <input type="radio" name="publication_status" <?php echo e($category-> publication_status==1 ? 'checked' : ''); ?> value="1">Published</label>
                            <label> <input type="radio" name="publication_status"<?php echo e($category-> publication_status==0 ? 'checked' : ''); ?> value="0">Unpublished</label><br/>
                            <span class="text-danger"><?php echo e($errors->has('publication_status') ? $errors->first('publication_status') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info"/>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


    
    

<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>