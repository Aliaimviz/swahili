<?php $__env->startSection('title', 'Enrolled Courses'); ?>
<?php $__env->startSection('content'); ?>
<section id="course">
	<div class="container-fluid back-layer-img">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="layer-img">
					<h2 style="padding-left: 0;">Enrolled Courses</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="slid-main-cont">
		<div class="row">
			<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-12 marginTB15">
				<a href="<?php echo e(route('enrolledCourseContent', ['id' => $co->course_id])); ?>">
					<div class="frontend-box-inner">
						<div class="img"><img src="<?php echo e(asset('public/files/courses/')); ?>/<?php echo e($co->thumbnail); ?>"></div>
						<div class="course-detail-front">
							<h5><?php echo e($co->title); ?></h5>
							<p><?php echo e($co->description); ?></p>
							<ul class="course-ratings">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li>
									<p>4.7 (28,127)</p>
								</li>
							</ul>
							<ul class="course-price">
								<!-- <li class="regular-price">
									<p> </p>
								</li> -->
								<li class="sale-price">
									<p>$<?php echo e($co->price); ?></p>
								</li>
							</ul>
						</div>
					</div>
				</a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<!-- <div class="naviga">
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left fa fa-angle-left "></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right fa fa-angle-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div> -->
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>