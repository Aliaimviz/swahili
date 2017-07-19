<?php $__env->startSection('title', 'View All Courses'); ?>

<?php $__env->startSection('content'); ?>
<div class="dashboard-men">
	<div class="container">
		<div class="men-na">
			<p><a href="#"> <i class="fa fa-angle-left"></i> Dashboard</a></p>
		</div>
		<div class="men-logo"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/img/dashboardlogo.png')); ?>"></a></div>
		<div class="men-pr-set">
			<ul>
				<li><a href="#"> <img src="<?php echo e(asset('public/img/coins2.png')); ?>"> 2000</a></li>
				<li><a href="#"><img src="<?php echo e(asset('public/img/right-check.png')); ?>"><img src="<?php echo e(asset('public/img/mini-pr.png')); ?>"></a></li>
				<li><a href="#">SARA Doe</a></li>
				<li><a href="#"><i class="fa fa-cog" ></i></a> <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<section class="content">
	<div class="container">
		<div class="fils">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left" style="padding-left: 0;">
					<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Curriculm:</h1>
					<div class="seprator new-sep ">&nbsp;</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left" style="padding-right: 0;" >
					<p class="add-week"><a href="<?php echo e(route('addCourseView')); ?>">Add Course</a></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
				<?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="add-curriculm-eg">					
					<div class="row">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 float-left"  style="border: 1px solid #e5e5e5;  padding-right: 4px; padding-left: 0;     " >
							<div class="doc-img">
								<img src="<?php echo e(asset('public/img/doc-icon.png')); ?>">
							</div>
						</div>
						<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 float-left curriculm-summary">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 float-left">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left ">
											<div class="and-all">
												<ul>
													<li>
														<h4>
															<a href=""><?php echo e($co->title); ?></a>
														</h4>
													</li>
													<li>
														<p>Posted by: <?php echo e($co->first_name); ?> <?php echo e($co->last_name); ?></p>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 float-left">
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-left">
											<div class="and-all">
												<ul>
													<li>
														<h5>Price:</h5>
													</li>
													<li>
														<p>$ <?php echo e($co->price); ?></p>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-left">
											<div class="and-all">
												<ul>
													<li>
														<h5>Total Weeks:</h5>
													</li>
													<li>
														<p><?php echo e($co->weeks); ?></p>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-left">
											<div class="and-all">
												<ul>
													<li>
														<h5>Total No. Lessons:</h5>
													</li>
													<li>
														<p>03</p>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(function () {
	   jQuery(".draggable").draggable({ revert: 'invalid' });
	   jQuery(".droppable").droppable({ 
	       accept: function(drag) {
	           var dropId = jQuery(this).attr('data-id');
	           var dragId = jQuery(drag).attr('data-id');
	           return dropId === dragId;
	       }
	   });
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>