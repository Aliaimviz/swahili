<?php $__env->startSection('title', 'All Courses'); ?>
<?php $__env->startSection('content'); ?>
<section id="course">
	<div class="container-fluid back-layer-img back-layer-img2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
					<div class="frontend-box-inner">
						<div class="course-detail-front">
							<h5><?php echo e($course->title); ?></h5>
							<ul class="course-ratings">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li>
									<p>4.7 (28,146 ratings) </p>
								</li>
								<li>
									<p><?php echo e($atts['enroll']); ?> students enrolled</p>
								</li>
							</ul>
							<ul class="course-price">
								<li>
									<p><i class="fa fa-pencil-square-o"></i> Created by <?php echo e($course->first_name); ?> <?php echo e($course->last_name); ?></p>
								</li>
								<li>
									<?php $date = new DateTime($course->updated_at); ?>
									<p><i class="fa fa-clock-o"></i> Last updated <?php echo e($date->format('Y-m-d')); ?></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div> -->
			</div>
		</div>
	</div>
	<div class="container" id="slid-main-cont">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="course-content-detail">
					<div class="what-will">
						<h2>Descriptions:</h2>
						<p><?php echo e($course->description); ?></p>
					</div>
					<div class="req-deta">
						<h2>Prerequisites</h2>
						<?php $prerequi = explode(',', $course->prerequisite);?>
						<ul>
							<?php $__currentLoopData = $prerequi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<p><?php echo e($pre); ?> </p>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="what-will req-deta">
						<h2>About the Author:</h2>
						<div class="auther-detail-main">
							<div class="auther-img">
								<img src="<?php echo e(asset('public/img/auther-img.png')); ?>">
								<ul>
									<li>
										<p><i class="fa fa-star"></i> 4.7 Average rating</p>
									</li>
									<li>
										<p><i class="fa fa-eye"></i> 28,801 Reviews</p>
									</li>
									<li>
										<p><i class="fa fa-user"></i> 126,894 Students</p>
									</li>
									<li>
										<p><i class="fa fa-book"></i> 2 Courses</p>
									</li>
								</ul>
							</div>
							<div class="auther-detail">
								<h2 style="color: #ff8868;"><?php echo e($course->first_name); ?> <?php echo e($course->last_name); ?></h2>
								<p><?php echo e($course->intro); ?></p>
							</div>
						</div>
					</div>
					<div class="req-deta">
						<h2>Student Feedback:</h2>
						<div class="auther-detail-main">
							<div class="auther-img">
								<h1>4.7</h1>
								<ul class="course-ratings">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
							<div class="auther-detail">
								<ul class="progress-bar-rating-main">
									<li class="progress-bar-rating">
										<div class="progress">
											<div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li>
												<p>72%</p>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="progress-bar-rating-main">
									<li class="progress-bar-rating">
										<div class="progress">
											<div data-percentage="0%" style="width: 30%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li>
												<p>23%</p>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="progress-bar-rating-main">
									<li class="progress-bar-rating">
										<div class="progress">
											<div data-percentage="0%" style="width: 20%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li>
												<p>4%</p>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="progress-bar-rating-main">
									<li class="progress-bar-rating">
										<div class="progress">
											<div data-percentage="0%" style="width: 10%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li>
												<p>10%</p>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="progress-bar-rating-main">
									<li class="progress-bar-rating">
										<div class="progress">
											<div data-percentage="0%" style="width: 5%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li>
												<p>1%</p>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="what-will req-deta main-reviews">
						<div class="auther-detail-main reviews">
							<div class="auther-img">
								<img src="<?php echo e(asset('public/img/user1.png')); ?>">									
							</div>
							<div class="auther-detail">
								<ul>
									<li>
										<h2 style="color: #ff8868;">John Doe</h2>
									</li>
									<li class="date-time">January 5, 2017 at 1:00 pm</li>
									<li>
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="what-will req-deta main-reviews">
						<div class="auther-detail-main reviews">
							<div class="auther-img">
								<img src="<?php echo e(asset('public/img/user1.png')); ?>">									
							</div>
							<div class="auther-detail">
								<ul>
									<li>
										<h2 style="color: #ff8868;">John Doe</h2>
									</li>
									<li class="date-time">January 5, 2017 at 1:00 pm</li>
									<li>
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam.Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis.</p>
							</div>
						</div>
					</div>
					<div class="what-will req-deta main-reviews">
						<div class="auther-detail-main reviews">
							<div class="auther-img">
								<img src="<?php echo e(asset('public/img/user1.png')); ?>">									
							</div>
							<div class="auther-detail">
								<ul>
									<li>
										<h2 style="color: #ff8868;">John Doe</h2>
									</li>
									<li class="date-time">January 5, 2017 at 1:00 pm</li>
									<li>
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="what-will req-deta main-reviews">
						<div class="auther-detail-main reviews">
							<div class="auther-img">
								<img src="<?php echo e(asset('public/img/user1.png')); ?>">									
							</div>
							<div class="auther-detail">
								<ul>
									<li>
										<h2 style="color: #ff8868;">John Doe</h2>
									</li>
									<li class="date-time">January 5, 2017 at 1:00 pm</li>
									<li>
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus otam rem aperiam. Error sit voluptatem acct usant protium dolorem  beatae vitae explicabo. Totam rem aperiam aspernatur aut odit aut fugit enim ipsam voluptem.  Naque ipsa quae ab illo inventore veritatis. Sed ut perspiciatis unde omnis iste natus otam rem aperiam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="aside-bar course-content-detail">
					<div class="frontend-box">
						<!-- <a href="#"> -->
						<div class="frontend-box-inner">
							<div class="img">
								<?php if($course->thumbnail): ?>
								<img src="<?php echo e(asset('public/files/courses')); ?>/<?php echo e($course->thumbnail); ?>">
								<?php else: ?>
								<img src="<?php echo e(asset('public/img/course-image.png')); ?>">
								<?php endif; ?>
							</div>
							<div class="course-detail-front">
								<ul class="course-price">
									<li class="sale-price">
										<p>$ <?php echo e($course->price); ?></p>
									</li>
									<!-- <li class="regular-price">
										<p style="color: #ff8868;">$200</p>
									</li>
									<li class="regular-price regular-price" style="text-decoration: inherit;">
										<p style="color: #ff8868;">95% off</p>
									</li> -->
								</ul>
								<p><i class="fa fa-clock-o"></i> Last updated <?php echo e($date->format('Y-m-d')); ?></p>
								<div class="req-deta" style="margin: 0;">
									<h2>Includes:</h2>
									<ul style="color: #000;" class="incl">
										<li><p>Weeks: <?php echo e($atts['week']); ?></p></li>
										<li><p>Lessons:  <?php echo e($atts['lesson']); ?>  </p></li>	
										<li><p>Quizes:    </p></li>											
										<li><p>Resources:    </p></li>											
									</ul>
									<p class="btn-course-aside">
										<form method="post" action="<?php echo e(route('addEnrollUser')); ?>">
											<input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
											<?php echo e(csrf_field()); ?>

											<button type="submit">enrolled now</button>
										</form>
									</p>
									<?php if(session()->has('message')): ?>
									<div class="alert alert-warning">
									  <strong>Warning!</strong> <?php echo e(session('message')); ?>

									</div>
									<?php endif; ?>

								</div>
							</div>
						</div>
						<!-- </a> -->					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sing-upp">
		<div class="welcome-text">
			<div class="container">
				<h1>START LEARNING TODAY</h1>
				<a href="#">BEGIN YOUR Free trial</a>
			</div>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>