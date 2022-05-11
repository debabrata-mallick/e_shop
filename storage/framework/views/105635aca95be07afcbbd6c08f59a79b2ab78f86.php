<?php $__env->startSection('body'); ?>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success"> <?php echo e(Session::get('message')); ?></h3>


                    <?php echo e(Form::open(['route'=>'new-brand', 'method'=>'POST', 'class'=>'form-horizontal'])); ?>

                    <div class="form-group">
                        <label class="control-label col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <input type="text" name="brand_name" class="form-control"/>
                            <span class="text-danger"><?php echo e($errors->has('brand_name') ? $errors->first('brand_name') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Brand Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="brand_description"></textarea>
                            <span class="text-danger"><?php echo e($errors->has('brand_description') ? $errors->first('brand_description') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" value="0"/> Unpublished </label><br/>
                            <span class="text-danger"><?php echo e($errors->has('publication_status') ? $errors->first('publication_status') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info"/>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>


                    
                    

                        
                            

                            
                                
                            
                        
                        
                            

                            
                                
                            
                        
                        
                            

                            
                                
                                
                            
                        
                        
                            
                            
                                
                            
                        
                    
                    
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>