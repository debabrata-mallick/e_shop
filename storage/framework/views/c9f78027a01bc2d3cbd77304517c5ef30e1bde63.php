<?php $__env->startSection('title'); ?>
    Registration
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="<?php echo e(asset('/')); ?>">Home</a> / <span>Registered</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->

    <div class="container">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                </div>
                <div class="panel-body" >
                    <?php echo e(Form::open(['route'=>'customer-sign-up','id'=>"signupform", 'method'=>'POST', 'class'=>'form-horizontal','role'=>"form"])); ?>

                    

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>


                        <div class="form-group">
                            <label for="firstName" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstName" placeholder="First Name">
                                <span class="text-danger"><?php echo e($errors->has('firstName') ? $errors->first('firstName') : ' '); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                                <span class="text-danger"><?php echo e($errors->has('lastName') ? $errors->first('lastName') : ' '); ?></span>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                            <span class="text-danger"><?php echo e($errors->has('email') ? $errors->first('email') : ' '); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <span class="text-danger"><?php echo e($errors->has('password') ? $errors->first('password') : ' '); ?></span>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="ConfirmPassword" class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name=" confirmPassword" placeholder="Confirm Password">
                            <span class="text-danger"><?php echo e($errors->has('confirmPassword') ? $errors->first('confirmPassword') : ' '); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNo" class="col-md-3 control-label">Phone No</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phoneNo" placeholder="Phone No">
                            <span class="text-danger"><?php echo e($errors->has('phoneNo') ? $errors->first('phoneNo') : ' '); ?></span>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="address" class="col-md-3 control-label">Address</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control" name="address" placeholder="Address"></textarea>
                                <span class="text-danger"><?php echo e($errors->has('address') ? $errors->first('address') : ' '); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <input id="btn-signup" type="submit" name="btn" class="btn btn-info" value="Sign Up">
                                
                                <span style="margin-left:8px;">or</span>
                            </div>
                        </div>

                        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                            </div>

                        </div>
                        <?php echo e(Form::close()); ?>

                    
                </div>
            </div>
        </div>
        <div id="loginbox" style="display:none; margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <?php echo e(Form::open(['route'=>'new-product','id'=>"loginform", 'method'=>'POST', 'class'=>'form-horizontal','role'=>"form"])); ?>


                    

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                            <span class="text-danger"><?php echo e($errors->has('username') ? $errors->first('username') : ' '); ?></span>
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            <span class="text-danger"><?php echo e($errors->has('password') ? $errors->first('password') : ' '); ?></span>
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account!
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    <?php echo e(Form::close()); ?>



                </div>
            </div>
        </div>
    </div>



    
        
            
                
                    
                    
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                            
                            
                            
                        
                        
                    
                
            
            
               
                   
                   
                   

                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
               
           
        


    


            
                
                    
                        
                        
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                        
                    

                
            
        
    
    <!--content-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>