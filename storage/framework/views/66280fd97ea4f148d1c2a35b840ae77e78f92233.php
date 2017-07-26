<?php $__env->startSection('title', 'All Courses'); ?>
<?php $__env->startSection('content'); ?>

	<section class="content">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
					<h1 class="h1.user-lover-heading mess">Classmates</h1>
					<div class="seprator new-sep mess2">&nbsp</div> 

					<div class="class-mate-pr">
						<div class="classmatspro classmatsproser ">
							<div class="class-pr-img">
								<h1><label for="search">Search<label></h1>
							</div>
								<div class="class-pr-con">
									<!-- <h1>Announcments</h1>
									<h3>THE INSTRUCTOR</h3> -->
									<div class="leabtn">
									<form>
										<input id="searchChatInput" type="text"  placeholder="Search" >
						 				<button id="searchChatButton" type="submit"><i class="fa fa-search"></i></button>
						 				<!-- <button type="submit" class="fil"><i class="fa fa-filter"></i></button> -->
					 				</form>
									</div>
								</div>
						</div>
					  <!--
						<div class="classmatspro " data-toggle="modal" data-target="#add-coding">
						
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/group-img.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1 style="margin-top: 29px; margin-left: 12px; font-size: 20px; font-weight: bold; color: #000;">Start Chat</h1>						
							</div>
						
						</div>

						<div class="classmatspro classmatspr2">
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/group-img.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>


						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>

						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div> -->
					  <?php if(isset($user_messages)): ?>	
							<?php $__currentLoopData = $user_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php $user_friend = explode(',', $user_message->user_ids  );?>
								
								<div class="classmatspro getChatLog" data-id="<?php echo e($user_message->id); ?>">
									<div class="class-pr-img">
										<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
									  <?php if($user_message->is_group == 1): ?>
										<img src="<?php echo e(asset('public/img/group-img.png')); ?>">							    
									  <?php else: ?>
										<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">							   
									  <?php endif; ?>							  	
									</div>
									<div class="class-pr-con">
									  <?php if($user_message->is_group == 1): ?>	
										<h1><?php echo e(App\Chat::getFriendName($user_friend[1])); ?>, <?php echo e(App\Chat::getFriendName($user_friend[2])); ?>...</h1>								  
									  <?php else: ?>
										<h1><?php echo e(App\Chat::getFriendName($user_friend[1])); ?></h1>
									  <?php endif; ?>
										<p></p>
									</div>
								</div>
																				
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
					<?php endif; ?>									

						<!--<div class="classmatspro">
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>

						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="<?php echo e(asset('public/img/check.png')); ?>" class="check-ri">
								<img src="<?php echo e(asset('public/img/class-pr-1.png')); ?>">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div> -->

					</div>	
			</div>


<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
					<h1 class="h1.user-lover-heading mess" id="headingChat"></h1>
					<div class="seprator new-sep ">&nbsp</div> 
					<a href="#" class="ellip"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
					<div class="class-mate-pr class-mate-br">

				<div id="chatDiv">
				</div>
					    </div>
					</div>
		</div>

		<div class="model">
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
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Chat:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         
	            				<label for="enter-the-week-title">Enter Email of your Friend to start chat: </label>
	            					<input type="text" id="emailChat" value="" data-role="tagsinput">	            				
	            				<!--<label for="options" >User Type</label>
	            				<select id="options" name="" >
								  <option value="Choose">Option1</option>
								  <option value="student">Option2</option>
								  <option value="teacher">Option3</option>
								</select> -->
	            				<div class="submit-btn">
            						<input  type="Submit" id="submitChatPeople" value="Submit">	            						            					
            					</div>
	            			
                        </div>
	                  </div>
	                </div>
	              </div>
	            </div>	
		</div>
	</section>

<style type="text/css">
.class-mate-br{
             max-height: 450px;
             overflow: hidden;
             overflow-y: auto;	
}
</style>

<script type="text/javascript">

$(document).ready(function(e){

	$("#submitChatPeople").on('click', function(e){
		e.preventDefault();
		console.log("submit Chat People");
		console.log($("#emailChat").tagsinput('items'));
		 var userEmails = $("#emailChat").val();

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "<?php echo e(route('startChat')); ?>",
		            type: 'post', 
		            data: {'userEmails': userEmails},		            
			        success: function (data) { 
		           	  toastr.success(data.msg);
		           	  console.log(data);
		           	  $("#add-coding").modal('hide');
		           	  location.reload();
		            },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		        });
	});

	$(".getChatLog").on('click', function(e){
		e.preventDefault();
		console.log("get Chat Log");
		var chatId = $(this).data('id');
		console.log("chatId" + chatId);
			  
			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "<?php echo e(route('getChatLog')); ?>",
		            type: 'post', 
		            data: {'chatId': chatId},		            
			        success: function (data) { 
		           	  toastr.success(data.msg);
		           	  console.log(data);
		           	  $("#chatDiv").html(data.chatLog);
		           	  $("#chat_id").val(data.chat_id);		           	  
		           	  $("#headingChat").text(data.HeadingString);
		           	  $('.class-mate-br').scrollTop($('.class-mate-br')[0].scrollHeight);
		           	  chatLogFuncs();
		            },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		        });
	});


 function chatLogFuncs(){

	$("#chatMsgForm").submit('click', function(e){
		e.preventDefault();
		console.log("get Chat Log");
		
		//console.log("chatId" + chatId);
			var chatId = $("#chat_id").val();
			var chatMessage = $("#chatFormMsg").val();

			var formData = $("#chatMsgForm").serialize();

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "<?php echo e(route('insertChatMessage')); ?>",
		            type: 'post', 
		            data: {'chatId': chatId, 'chatMessage': chatMessage},		            
			        success: function (data) { 
		           	  toastr.success(data.msg);
		           	  console.log(data);
		           	  updateChatLog(data.chat_id);

		           	// settimeout(function(){
		           	 	$('.class-mate-br').scrollTop($('.class-mate-br')[0].scrollHeight);
		           	// },1000); 
		           	  		           	  
		           	  //scroll down
		           	  //$("#chat_id").val(data.chat_id);
		           	  
		            },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		        });
	});
 }//chatlogfunc end

		//Updatin Chat log
		function updateChatLog(chatId){
			console.log("update chat log executed");

				  $.ajaxSetup({
			          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
			      });

			      $.ajax({
			            url: "<?php echo e(route('getChatLog')); ?>",
			            type: 'post', 
			            data: {'chatId': chatId},		            
				        success: function (data) { 
			           	  toastr.success(data.msg);
			           	  console.log(data);
			           	  $("#chatDiv").html(data.chatLog);
			           	  $("#chat_id").val(data.chat_id);
			           	  chatLogFuncs();
			            },
			        	error: function (data) { 
			        	  console.log(data);
			           	  toastr.error(data.msg);        		
				        },	                    
			           
			        });
		}

//Search

  $("#searchChatButton").keyup(function(e){
  		e.preventDefault();

  			console.log($("#searchChatInput").val());
  				var searchTerm = $("#searchDiscusInput").val();

				  $.ajaxSetup({
			          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
			      });

			      $.ajax({
			            url: "<?php echo e(route('get_searchChatlist_ajax')); ?>",
			            type: 'post',
			            data: {'searchTerm': searchTerm},
		                      	            
				        success: function (data) { 
				          //console.log(data);
			           	  //toastr.success(data.msg);
			           	   //console.log(data.disView);
			           	  // $(".dynaChat1").find('.inner-chat-here').css('display', 'block');
			           	   $("#discussionBox").html(data.disView);

			           	   //laoded after ajax
			           	   $(".replies.yes p").click(function(){
						       $(".chats.inner-chat-here").toggle();
						   });
			           	  // location.reload();
			           	  // $("html, body").animate({ scrollTop:$(document).height()-700 }, 1000);
			           	  // $("html, body").animate({ scrollTop: $(document).height() }, 1000);
			           	   //$("html, body").animate({ scrollTop: $(document).height() }, 200);
				        },
			        	error: function (data) { 
			        	  console.log(data);
			           	  toastr.error(data.msg);        		
				        },	                    
			           
			     }); 


  });

});

</script>

<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>