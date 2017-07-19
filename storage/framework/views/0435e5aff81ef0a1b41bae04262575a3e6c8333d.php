<?php if(isset($discussions)): ?>
	<?php $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $i = 0; ?>

    <div class="chats dynaChat<?php echo e($disc[$i]->disc_id); ?>">
		<div class="chat-pro-img">

			<img src="<?php echo e(asset('public/img/discussion-prof-img.png')); ?>">
		</div>
		<div class="chat-all-here discussionBlock" data-id="<?php echo e($disc[$i]->disc_id); ?>">
			<h1><?php echo e($disc[$i]->first_name); ?> <?php echo e($disc[$i]->last_name); ?>. <span>( <?php echo e($disc[$i]->dis_title); ?> )</span></h1>
			<p><?php echo e($disc[$i]->dis_ques); ?></p>
			<div class="re-com-im">
				<?php if($disc[$i]->com_content || $disc[$i]->file): ?>
					<div class="replies yes"><p> <?php echo e(count($disc)); ?> Replies </p></div>
				<?php endif; ?>
				<div class="com-like">
					<ul>
						<li data-toggle="modal" data-target="#add-lesson"><a href="#" class="discusImage" data-id="<?php echo e($disc[$i]->disc_id); ?>"><i class="fa fa-upload"></i> Upload Image</a></li>
						<li data-toggle="modal" data-target="#add-coding"><a href="#" class="discusComment" data-id="<?php echo e($disc[$i]->disc_id); ?>"><i class="fa fa-comment-o"></i> Comment</a></li>
						<!--<li data-toggle="modal" data-target="#add-coding"><a href="#"><i class="fa fa-smile-o"></i> React</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Direct</a></li> -->
					</ul>
				</div>
			</div>
			<?php $__currentLoopData = $disc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $di): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($di->com_content || $di->file): ?>
			<div class="chats inner-chat-here" style="display:none">
				<div class="chat-pro-img">
					<img src="<?php echo e(asset('public/img/discussion-prof-img.png')); ?>">
				</div>
				<div class="chat-all-here">
					<h1><?php echo e($di->first_name); ?> <?php echo e($di->last_name); ?></h1>
					<?php if($di->com_content): ?>
						<p><?php echo e($di->com_content); ?></p>
					<?php elseif($di->file): ?>
						<img height="100px" width="100px" src="<?php echo e(asset('public/files/comment_images')); ?>/<?php echo e($di->file); ?>">
					<?php else: ?>
						<p></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<?php $i++; ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
 <h1> No Discussion Found! </h1>
<?php endif; ?>