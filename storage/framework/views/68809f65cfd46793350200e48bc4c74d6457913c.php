<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('content'); ?>
<section id="welcome">
	<div class="welcome-text">
		<div class="container">
			<h1>Edit Your Profile</h1>
		</div>
	</div>
	<div class="form-content">
		<div class="container">
			<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left"></div> -->
			<div class="row">
				<div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php if(session('success')): ?>
				    <div class="alert alert-success">
				        <strong>Success!</strong> <?php echo e(session('success')); ?>

				    </div>
				<?php elseif(session('alert')): ?>
					<div class="alert alert-danger">
					  <strong>Alert!</strong> <?php echo e(session('alert')); ?>

					</div>
				<?php endif; ?>
				</div>
			<div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
			
				 <div class="edit-profile-img">
					<div class="edit-profile-inner">
						<!-- <img src="img/customer.png">
						<p>edit</p> -->
						<div class="image-frame">
					<img src="<?php echo e(asset('public/img/verified-customer.png')); ?>">
					<img src="<?php echo e(asset('public/img/customer.png')); ?>">
					<p>Edit</p>
				</div>
					</div>
				</div> 
				
				<div class="form-fields edit-profile-fields">
				<form method="POST" action="<?php echo e(route('profile_update')); ?>">
                			<?php echo e(csrf_field()); ?>

					
					<label>First Name<input type="text" value="<?php echo e($user->first_name); ?>" name="firstName"></label>
					<?php if($errors->has('firstName')): ?>
	                    <span class="help-block">
	                        <strong><?php echo e($errors->first('firstName')); ?></strong>
	                    </span>
	                <?php endif; ?>
					<label>Last Name<input type="text" value="<?php echo e($user->last_name); ?>" name="lastName"></label>
					<?php if($errors->has('lastName')): ?>
	                    <span class="help-block">
	                        <strong><?php echo e($errors->first('lastName')); ?></strong>
	                    </span>
	                <?php endif; ?>
	                <label>Introduction<textarea name="intro"><?php echo e($user->intro); ?></textarea></label>
					<?php if($errors->has('intro')): ?>
	                    <span class="help-block">
	                        <strong><?php echo e($errors->first('intro')); ?></strong>
	                    </span>
	                <?php endif; ?>
					<label>Email<input type="Email" value="<?php echo e($user->email); ?>" name="email"></label>
					<?php if($errors->has('email')): ?>
	                    <span class="help-block">
	                        <strong><?php echo e($errors->first('email')); ?></strong>
	                    </span>
	                <?php endif; ?>
					<label>Language<select class="form-control" name="language">
                        <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($lan->id == $user->language): ?>
                            <option value="<?php echo e($lan->id); ?>" selected="selected"><?php echo e($lan->language); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($lan->id); ?>"><?php echo e($lan->language); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></label>
						

						
					<label>Country<select class="form-control" name="country">
                        <?php $__currentLoopData = $coun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($co->id ==  $user->country): ?>
                            <option value="<?php echo e($co->id); ?>" selected="selected"><?php echo e($co->country); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($co->id); ?>"><?php echo e($co->country); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></label>
					<input type="Submit"  value="SAVE" class="savenaming">
						<a href="#" class="changepass"  data-toggle="modal" data-target="#changepass">CHANGE PASSWORD</a>
						
	            <!-- login-field -->
					</form>
					<div class="clearfix"></div>
					<form method="POST" action="<?php echo e(route('creditCard')); ?>">		
                		<?php echo e(csrf_field()); ?>

						<label>Billing Information:<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></label>
						<label>Credit Card No:<input type="text" value="<?php if($card): ?><?php echo e($card->card_num); ?><?php endif; ?>" name="cardNumber"></label>
						<?php if($errors->has('cardNumber')): ?>
		                    <span class="help-block">
		                        <strong><?php echo e($errors->first('cardNumber')); ?></strong>
		                    </span>
		                <?php endif; ?>
						<label>Payment Type <div class="img"><img src="<?php echo e(asset('public/img/payment-method.png')); ?>"></div></label>
						<label>Expiration Date<input type="text" placeholder="MM/YY" value="<?php if($card): ?><?php echo e($card->expiration); ?><?php endif; ?>" name="expiry"></label>
						<?php if($errors->has('expiry')): ?>
		                    <span class="help-block">
		                        <strong><?php echo e($errors->first('expiry')); ?></strong>
		                    </span>
		                <?php endif; ?>
						<label>Card CVC<input type="password" value="<?php if($card): ?><?php echo e($card->cvc); ?><?php endif; ?>" name="cvc"></label>
						<?php if($errors->has('cvc')): ?>
		                    <span class="help-block">
		                        <strong><?php echo e($errors->first('cvc')); ?></strong>
		                    </span>
		                <?php endif; ?>
						<input type="Submit"  value="SAVE">
					</form>
				</div>
			</div>
			</div>
			<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left"></div> -->
		</div>	
	</div>
</section>
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1>CHANGE PASSWORD</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="login-fileds">
              <form method="post" action="<?php echo e(route('changePassword')); ?>">
              	<?php echo e(csrf_field()); ?>

                <label style="padding-bottom: 0; margin-bottom: 0;">Old Password<input type="Password" name="current_password"></label>
                <?php if($errors->has('current_password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('current_password')); ?></strong>
                    </span>
                <?php endif; ?>
				<label style="padding-bottom: 0; margin-bottom: 0;">New password<input  type="Password" name="password"></label>
				<?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
				<label style="padding-bottom: 0; margin-bottom: 0;">Conform password<input  type="Password" name="password_confirmation"></label>
                <input type="submit" value="SAVE" class="su">
              </form>
            </div>
      </div>
     </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>