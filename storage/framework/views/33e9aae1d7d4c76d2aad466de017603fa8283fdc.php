<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('content'); ?>
<section id="welcome">
    <div class="welcome-text">
        <div class="container">
            <h1>Sign up for your free trial !</h1>
        </div>
    </div>
    <div class="form-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left registration-form">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('registration')); ?>">
                <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('userType') ? ' has-error' : ''); ?> form-fields">
                        <label for="userType" class="col-md-4 control-label">User Type</label>
                        <div class="col-md-12">
                            <select class="form-control" name="userType">
                                <option>Select Option</option>
                                <option value="ST">Student</option>
                                <option value="IT">Instructor</option>
                            </select>

                            <?php if($errors->has('userType')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('userType')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('firstName') ? ' has-error' : ''); ?> form-fields">
                        <label for="firstName" class="col-md-4 control-label">First Name</label>                
                        <div class="col-md-12">                    
                             <input id="firstName" type="text" class="form-control" name="firstName" value="<?php echo e(old('firstName')); ?>" required autofocus>
                            <?php if($errors->has('firstName')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('firstName')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?> form-fields">
                        <label for="lastName" class="col-md-4 control-label">Last Name</label>                
                        <div class="col-md-12">                    
                             <input id="lastName" type="text" class="form-control" name="lastName" value="<?php echo e(old('lastName')); ?>" required autofocus>
                            <?php if($errors->has('lastName')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('lastName')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> form-fields">
                        <label for="email" class="col-md-4 control-label">Email</label>                
                        <div class="col-md-12">                    
                             <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?> form-fields">
                        <label for="password" class="col-md-4 control-label">Password</label>                
                        <div class="col-md-12">                    
                             <input id="password" type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" required autofocus>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group form-fields">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('language') ? ' has-error' : ''); ?> form-fields">
                        <label for="language" class="col-md-4 control-label">Language</label>
                        <div class="col-md-12">
                            <select class="form-control" name="language">
                                <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($lan->language == 'English'): ?>
                                    <option value="<?php echo e($lan->id); ?>" selected="selected"><?php echo e($lan->language); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($lan->id); ?>"><?php echo e($lan->language); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('language')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('language')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-fields">
                        <div class="col-md-12 col-md-offset-4">
                            <input type="submit" value="START LEARNING!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>