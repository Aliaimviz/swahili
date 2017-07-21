
						<?php $__currentLoopData = $chat_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat_message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  <?php if($chat_message->user_id == Auth::user()->id): ?>	
							<div class="comment-img">
								<div class="class-pr-img class-pr-img2">
									<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
									<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
								</div>
								<div class="class-pr-con class-pr-con2">
									<p><?php echo e($chat_message->message); ?> </p>
									<span><i class="fa fa-clock-o"></i> <?php echo e($chat_message->created_at->todatestring()); ?></span>
								</div>
							</div>
						 <?php else: ?>


						 <div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex">
								<p><?php echo e($chat_message->message); ?></p>
								<span><i class="fa fa-clock-o"></i> <?php echo e($chat_message->created_at->todatestring()); ?></span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
						</div>
						 <?php endif; ?>
						 							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
<!--
						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex ">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster dolorem ipsum quia dolor. dolorem ipsum quia dolor. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div> -->
 
						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 reply-com">
								
								<textarea placeholder="Type a reply... " name="chatFormMsg" id="chatFormMsg" data-emojiable="true"></textarea>
								<!-- <div class="smil-gif">
									<a href="#"><i class="fa fa-smile-o" ></i></a>
									<a href="#">GIF</a>
								</div> -->
							</div>
							<div class="class-pr-img class-pr-img2 reply-com-btn slider-center-button">
								<form id="chatMsgForm">
									<input type="hidden" value="" name="chat_id" id="chat_id"/>	
									<input type="Submit" value="SUBMIT">
								<form>
							</div>
						</div>
