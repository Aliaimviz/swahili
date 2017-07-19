<?php $__env->startSection('title', 'Add Course'); ?>

<?php $__env->startSection('content'); ?>

		<section id="welcome">
			<div class="dashboard">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-6 col-sm-6 col-md-9 col-lg-9 float-left">
							<h2>COURSE TITLE GOES HERE</h2>
							<a href="#" class="conlearning">Continue Learning</a>
							<div class="pro-bar">
						<h5>YOUR PROGRESS</h5>
							<div class="progress">
                      <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
						<div class="image-frame">
							<img src="<?php echo e(asset('public/img/verified-customer.png')); ?>">
							<img src="<?php echo e(asset('public/img/customer.png')); ?>">
							<p>SARA DOE</p>
						</div>
						</div>
					</div>
				<!-- 	<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
						<div class="pro-bar">
						<h5>YOUR PROGRESS</h5>
							<div class="progress">
                      <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="dashboard-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
						<ul>
							<li><a href="#">Content </a></li>
							<li><a href="#">Discussions </a></li>
							<li><a href="#">LANGUAGE Partner</a></li>
							<li><a href="#">MEssages</a></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
					<h1 class="h1.user-lover-heading hvr" data-toggle="modal" data-target="#add-quiz"><a href="#"> START NEW DISCUSSION <i class="fa fa-plus-circle" data-toggle="modal" data-target="#add-quiz"></i> </a></h1>
					<div class="seprator new-sep">&nbsp</div> 
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
				<div class="leabtn">
				<form>
					<input type="text" maxlength="64" placeholder="Search" />
	 				<button type="submit"><i class="fa fa-search" ></i></button>
	 				<!-- <button type="submit" class="fil"><i class="fa fa-filter"></i></button> -->
 				</form>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<h1 class="discussion-title">Culture</h1>


<?php if(isset($discussions)): ?>
	<?php $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $i = 0; ?>

    <div class="chats">
		<div class="chat-pro-img">
			<img src="<?php echo e(asset('public/img/discussion-prof-img.png')); ?>">
		</div>
		<div class="chat-all-here discussionBlock" data-id="<?php echo e($disc[$i]->discussion_id); ?>">
			<h1><?php echo e($disc[$i]->first_name); ?> <?php echo e($disc[$i]->last_name); ?>. <span>( <?php echo e($disc[$i]->dis_title); ?> )</span></h1>
			<p><?php echo e($disc[$i]->dis_ques); ?></p>
			<div class="re-com-im">
				<?php if($disc[$i]->com_content || $disc[$i]->file): ?>
					<div class="replies yes"><p> <?php echo e(count($disc)); ?> Replies </p></div>
				<?php endif; ?>
				<div class="com-like">
					<ul>
						<li data-toggle="modal" data-target="#add-lesson"><a href="#"><i class="fa fa-upload"></i> Upload Image</a></li>
						<li data-toggle="modal" data-target="#add-coding"><a href="#" class="discusComment" data-id="<?php echo e($disc[$i]->disc_id); ?>"><i class="fa fa-comment-o"></i> Comment</a></li>
						<li data-toggle="modal" data-target="#add-coding"><a href="#"><i class="fa fa-smile-o"></i> React</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Direct</a></li>
					</ul>
				</div>
			</div>
			<?php $__currentLoopData = $disc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $di): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($di->com_content || $di->file): ?>
			<div class="chats inner-chat-here">
				<div class="chat-pro-img">
					<img src="<?php echo e(asset('public/img/discussion-prof-img.png')); ?>">
				</div>
				<div class="chat-all-here">
					<h1><?php echo e($di->first_name); ?> <?php echo e($di->last_name); ?></h1>
					<?php if($di->com_content): ?>
						<p><?php echo e($di->com_content); ?></p>
					<?php elseif($di->file): ?>
						<img src="<?php echo e(asset('public/files/comment_images')); ?>/<?php echo e($di->file); ?>">
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

<?php endif; ?>			

						<div class="load-mor-comment">
							<input type="submit" value="LOAD MORE">
						</div>

				</div>
			</div>

		</div>

		<div class="all-modals">
			<div class="modal fade" id="add-coding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	              <div class="modal-dialog" role="document">
	                <div class="modal-content">
	                <div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     	 <span aria-hidden="true">&times;</span>
                    	</button>
                  	</div>
	                  <div class="modal-body">
                        <div class="add-week-fileds">
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Comment:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<form class="about-course" id="commentForm">
	            				<label for="enter-the-week-title">Enter your Comment</label>
	            					<input type="text" id="enter-the-week-title" name="com_content" id="com_content" data-emojiable="true" >
	            					<input type="hidden" value="" id="dis_id" name="dis_id"/>	            				
	            				<div class="submit-btn">
            						<input type="Submit" value="Submit">	            						            					
            					</div>
	            			</form>
                        </div>
	                  </div>
	                </div>
	              </div>
	            </div>	
	             
<!-- comment -->
	            <div class="modal fade" id="add-lesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	              <div class="modal-dialog" role="document">
	                <div class="modal-content">
	                <div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     	 <span aria-hidden="true">&times;</span>
                    	</button>
                  	</div>
	                  <div class="modal-body">
                        <div class="add-week-fileds">
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Image:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<form class="about-course">
            				<label for="upload-image">Upload Image</label>
            					<input type="file" id="upload-image">
            				<div class="submit-btn">
        						<input type="Submit" value="Submit">	            						            					
        					</div>
            			</form>
                        </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	      	<!-- upload-image -->

	      	

	      	<div class="modal fade" id="add-quiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	              <div class="modal-dialog" role="document">
	                <div class="modal-content">
	                <div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     	 <span aria-hidden="true">&times;</span>
                    	</button>
                  	</div>
	                  <div class="modal-body">
                        <div class="add-week-fileds">
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Comment:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<div class="chats">
							<div class="chat-pro-img">
								<img src="<?php echo e(asset('public/img/discussion-prof-img.png')); ?>') }}">
							</div>
							<div class="chat-all-here">
								<h1>SARA DOE. <span>(title of Post Goes here)</span></h1>
								<form id="discussForm">
								<b>Title: </b><input type="text" id="discuss_name" name="discuss_name"/>
								<br>
								<b>Description: </b> <textarea name="discus_desc" placeholder="Add Comment Here..."></textarea>
								<input type="hidden" value="<?php echo e($course_id); ?>" name="course_id"/>	
								<input type="Submit"  value="SUBMIT">
								<div class="re-com-im">
									<!-- <div class="replies"><p><a href="#"> 16 Replies </a></p></div> -->
									<!-- <div class="com-like">
										<ul>
											<li data-toggle="modal" data-target="#add-lesson"><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li data-toggle="modal" data-target="#add-coding"><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div> -->
								</div>
								</form>
							</div>
						</div>
                        </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	      	<!-- upload-image -->
	          
		</div>
	</section>

<script type="text/javascript">

 $(document).ready(function(){

 	$("#discussForm").submit(function(e){
 		e.preventDefault();
 		console.log("discuss form");

 			url = window.location.href;
 			var value = url.substring(url.lastIndexOf('/') + 1);
 			console.log("last==" + value);
			var formData = new FormData(this);	
			console.log(formData);

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "<?php echo e(route('addDiscusForm')); ?>",
		            type: 'post',
		            data: formData,
		            processData: false,
		            contentType: false,		            	            
			        success: function (data) { 
			          console.log(data);
		           	  toastr.success(data.msg);
		           	   location.reload();
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		     }); 		

 	});

//Discuss Comment
	$(".discusComment").click(function(e){
		e.preventDefault();
		console.log('discus comment');
			var discusId = $(this).data('id');
			$("#dis_id").val(discusId);
	});

	$("#commentForm").submit(function(e){

		e.preventDefault();
		console.log('discus comment');
			var discusId = $(this).data('id');

			var formData = new FormData(this);	
			//console.log(formData);

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "<?php echo e(route('addDiscusComment')); ?>",
		            type: 'post',
		            data: formData,
		            processData: false,
		            contentType: false,		                      	            
			        success: function (data) { 
			          console.log(data);
		           	  toastr.success(data.msg);
		           	  
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		     }); 		

	});

 });

</script>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/config.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/util.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/jquery.emojiarea.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/emoji-picker.js')); ?>"></script>
<script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
    <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>
<script>
	$(document).ready(function(){
    $(".replies.yes p").click(function(){
        $(".chats.inner-chat-here").toggle();
    });
});
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>