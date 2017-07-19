@extends('layouts.app')
@section('title', 'Add Course')

@section('content')

		<section id="welcome">
			<div class="dashboard">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-6 col-sm-6 col-md-9 col-lg-9 float-left">
							<h2>{{ $course_name }}</h2>
							<a href="#" class="conlearning">Continue Learning</a>
							<div class="pro-bar">
						<!--<h5>YOUR PROGRESS</h5>
							<div class="progress">
                      <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                    </div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
						<!--<div class="image-frame">
							<img src="{{ asset('public/img/verified-customer.png') }}">
							<img src="{{ asset('public/img/customer.png') }}">
							<p>SARA DOE</p> 
						</div> -->
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
				<form id="searchDiscusForm">
					<input type="text" id="searchDiscusInput" maxlength="64" placeholder="Search" />
					<input type="hidden" value="{{$course_id}}" name="course_id" id="course_id">
	 				<button type="submit"><i class="fa fa-search" ></i></button>
	 				<!-- <button type="submit" class="fil"><i class="fa fa-filter"></i></button> -->
 				</form>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id="discussionBox">
					<!-- <h1 class="discussion-title">Culture</h1> -->


@if(isset($discussions))
	@foreach($discussions as $disc)
	<?php $i = 0; ?>

    <div class="chats dynaChat{{$disc[$i]->disc_id}}">
		<div class="chat-pro-img">

			<img src="{{ asset('public/img/discussion-prof-img.png') }}">
		</div>
		<div class="chat-all-here discussionBlock" data-id="{{ $disc[$i]->disc_id }}">
			<h1>{{ $disc[$i]->first_name }} {{ $disc[$i]->last_name }}. <span>( {{ $disc[$i]->dis_title }} )</span></h1>
			<p>{{ $disc[$i]->dis_ques }}</p>
			<div class="re-com-im">
				@if($disc[$i]->com_content || $disc[$i]->file)
					<div class="replies yes"><p> {{ count($disc) }} Replies </p></div>
				@endif
				<div class="com-like">
					<ul>
						<li data-toggle="modal" data-target="#add-lesson"><a href="#" class="discusImage" data-id="{{ $disc[$i]->disc_id }}"><i class="fa fa-upload"></i> Upload Image</a></li>
						<li data-toggle="modal" data-target="#add-coding"><a href="#" class="discusComment" data-id="{{ $disc[$i]->disc_id }}"><i class="fa fa-comment-o"></i> Comment</a></li>
						<!--<li data-toggle="modal" data-target="#add-coding"><a href="#"><i class="fa fa-smile-o"></i> React</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Direct</a></li> -->
					</ul>
				</div>
			</div>
			@foreach($disc as $di)
			@if($di->com_content || $di->file)
			<div class="chats inner-chat-here" style="display:none">
				<div class="chat-pro-img">
					<img height="100px" width="100px" src="{{ asset('public/img/discussion-prof-img.png') }}">
				</div>
				<div class="chat-all-here">
					<h1>{{ $di->first_name }} {{ $di->last_name }}</h1>
					@if($di->com_content)
						<p>{{ $di->com_content }}</p>
					@elseif($di->file)
						<img height="100px" width="100px" src="{{ asset('public/files/comment_images')}}/{{$di->file}}">
					@else
						<p></p>
					@endif
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
	<?php $i++; ?>

	@endforeach
@else
 <h1> No Discussion Found! </h1>
@endif			

						<div class="load-mor-comment">
							<input type="submit" value="LOAD MORE">
						</div>

				</div>
			</div>

		</div>



		<div class="all-modals">
			<div class="modal fade" id="add-coding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	              <div class="modal-dialog">
	                <div class="modal-content">
	                <div class="modal-header">
                    	<button type="button" class="close" id="codingModelClose" data-dismiss="modal" aria-label="Close">
                     	 <span aria-hidden="true">&times;</span>
                    	</button>
                  	</div>
	                  <div class="modal-body">
                        <div class="add-week-fileds">
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Comment:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<form class="about-course" id="commentForm">
	            				<label for="enter-the-week-title">Enter your Comment</label>
	            					<input type="text"  name="com_content" id="com_content" data-emojiable="true" >
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
                    	<button type="button" class="close" id="imageModelClose" data-dismiss="modal" aria-label="Close">
                     	 <span aria-hidden="true">&times;</span>
                    	</button>
                  	</div>
	                  <div class="modal-body">
                        <div class="add-week-fileds">
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Image:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<form class="about-course" id="imageForm" enctype="multipart/form-data">
            				<label for="upload-image">Upload Image</label>
            				<input type="hidden" value="" id="dis_id_img" name="dis_id_img"/>
            					<input type="file" id="commentImage" name="commentImage" >
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
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Discussion:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<div class="chats">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<!--<h1>SARA DOE. <span>(title of Post Goes here)</span></h1> -->
								<form id="discussForm">
								<b>Title: </b><input type="text" id="discuss_name" name="discuss_name"/>
								<br>
								<b>Description: </b> <textarea name="discus_desc" placeholder="Add Comment Here..."></textarea>
								<input type="hidden" value="{{$course_id}}" name="course_id"/>	
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
		            url: "{{ route('addDiscusForm') }}",
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
 
 //Discuss Comment
	$(".discusImage").click(function(e){
		e.preventDefault();
		console.log('discus image');
			var discusId = $(this).data('id');
			//console.log("discusIdzzzzzzzzz" + discusId);
			$("#dis_id_img").val(discusId);
	});

	//Comment Form
	$("#commentForm").submit(function(e){

		e.preventDefault();
		console.log('discus comment');
			var discusId = $(this).data('id');

			var formData = new FormData(this);			

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('addDiscusComment') }}",
		            type: 'post',
		            data: formData,
		            processData: false,
		            contentType: false,		                      	            
			        success: function (data) { 
			          console.log(data);
		           	  toastr.success(data.msg);
		           	    //hide lesson modal 
		           	      $('#com_content').val('');
		           	      $('#add-coding').modal('hide');          	  

		           	      discus_ajax(data.discus_id);

 
			           	   $(".replies.yes p").click(function(){
						       $(".chats.inner-chat-here").toggle();
						   });
			           	   //	console.log("zxczxczxcxzcxz" + data.discus_id);
								setTimeout(function(){ 
			           	   			$(".dynaChat" + data.discus_id).find('.inner-chat-here').css('display', 'block');									
								}, 1000);			           	   

						   //$(".dynaChat" + discusId).find('.replies').click();		           	      
		           	      return true;

		           	  // location.reload();	
		           	   //$("html, body").animate({ scrollTop: $(document).height() }, 200);
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		     }); 		

	});


	//image Form
	$("#imageForm").submit(function(e){

		e.preventDefault();
		console.log('image form comment');

			var formData = new FormData(this);	

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('addImageComment') }}",
		            type: 'post',
		            data: formData,
		            processData: false,
		            contentType: false,		                      	            
			        success: function (data) { 
			          console.log(data);
		           	  toastr.success(data.msg);

		           	      $('#add-lesson').modal('hide');
			           	  

		           	      discus_ajax(data.discus_id);

 
			           	   $(".replies.yes p").click(function(){
						       $(".chats.inner-chat-here").toggle();
						   });
			           	   //	console.log("zxczxczxcxzcxz" + data.discus_id);
								setTimeout(function(){ 
			           	   			$(".dynaChat" + data.discus_id).find('.inner-chat-here').css('display', 'block');									
								}, 1000);			           	   

						   //$(".dynaChat" + discusId).find('.replies').click();		           	      
		           	      return true;
		           	  	
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		     }); 		

	});

	function discus_ajax(discus_id){

				var discus_id = discus_id

				  $.ajaxSetup({
			          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
			      });

			      $.ajax({
			            url: "{{ route('get_discussion_view_ajax') }}",
			            type: 'post',
			            data: {'dis_id': discus_id},
		                      	            
				        success: function (data) { 
				          console.log(data);
			           	  toastr.success(data.msg);
			           	   //console.log(data.disView);
			           	   $("#discussionBox").html(data.disView);	
			           	  // location.reload();
			           	   $("html, body").animate({ scrollTop:$(document).height()-700 }, 1000);
			           	  // $("html, body").animate({ scrollTop: $(document).height() }, 1000);
			           	   //$("html, body").animate({ scrollTop: $(document).height() }, 200);
				        },
			        	error: function (data) { 
			        	  console.log(data);
			           	  toastr.error(data.msg);        		
				        },	                    
			           
			     }); 

	}
 
  $("#searchDiscusInput").keyup(function(e){
  		e.preventDefault();

  		setTimeout(function(){ 

  			console.log($("#searchDiscusInput").val());
  				var searchTerm = $("#searchDiscusInput").val();
  				var course_id = $("#course_id").val();
				  $.ajaxSetup({
			          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
			      });

			      $.ajax({
			            url: "{{ route('get_discussionCuorse_view_ajax') }}",
			            type: 'post',
			            data: {'searchTerm': searchTerm, 'course_id': course_id},
		                      	            
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

  		}, 1500);

  });	

 });

</script>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('public/js/config.js') }}"></script>
<script src="{{ asset('public/js/util.js') }}"></script>
<script src="{{ asset('public/js/jquery.emojiarea.js') }}"></script>
<script src="{{ asset('public/js/emoji-picker.js') }}"></script>
<script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: "{{ asset('public/img/') }}",
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

@endsection



