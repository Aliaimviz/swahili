@extends('layouts.app')
@section('title', 'Add Course')

@section('content')

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
							<img src="{{ asset('public/img/verified-customer.png') }}">
							<img src="{{ asset('public/img/customer.png') }}">
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
					<!-- <h1 class="discussion-title">Culture</h1>
						<div class="chats">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>Rebecca M. <span>(title of Post Goes here)</span></h1>
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum prostoecturs Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia</p>
								<div class="re-com-im">
									<div class="replies"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li data-toggle="modal" data-target="#add-lesson"><i class="fa fa-upload"></i> Upload Image</li>
											<li data-toggle="modal" data-target="#add-coding"><i class="fa fa-comment-o" ></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="chats">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>Rebecca M. <span>(title of Post Goes here)</span></h1>
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum prostoecturs Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia</p>
								<div class="re-com-im">
									<div class="replies"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="chats">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>Rebecca M. <span>(title of Post Goes here)</span></h1>
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum prostoecturs Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia</p>
								<div class="re-com-im">
									<div class="replies yes"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div>
								<div class="chats inner-chat-here">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>Rebecca M. <span>(title of Post Goes here)</span></h1>
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum prostoecturs Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia</p>
								<!-- <div class="re-com-im">
									<div class="replies"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div> -->
								
							</div>
							<div class="extra-ic">
									<ul>
										<li><i class="fa fa-comment-o"></i></li>
										<li><i class="fa fa-envelope-o"></i></li>
									</ul>
								</div>
						</div>

						<div class="chats  inner-chat-here">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>Rebecca M. <span>(title of Post Goes here)</span></h1>
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum prostoecturs Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia</p>
								<!-- <div class="re-com-im">
									<div class="replies"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div> -->
							</div>
							<div class="extra-ic">
									<ul>
										<li><i class="fa fa-comment-o"></i></li>
										<li><i class="fa fa-envelope-o"></i></li>
									</ul>
								</div>
						</div>
							</div>
						</div>


						 <!-- <div class="chats">
							<div class="chat-pro-img">
								<img src="{{ asset('public/img/discussion-prof-img.png') }}">
							</div>
							<div class="chat-all-here">
								<h1>SARA DOE. <span>(title of Post Goes here)</span></h1>
								<textarea placeholder="Add Comment Here..."></textarea>
								<input type="Submit"  value="SUBMIT">
								<div class="re-com-im">
									<div class="replies"><p><a href="#"> 16 Replies </a></p></div>
									<div class="com-like">
										<ul>
											<li><i class="fa fa-upload"></i> Upload Image</li>
											<li><i class="fa fa-comment-o"></i> Comment</li>
											<li><i class="fa fa-smile-o"></i> React</li>
											<li><i class="fa fa-envelope-o"></i> Direct</li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
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
                         	<form class="about-course">
	            				<label for="enter-the-week-title">Enter your Comment</label>
	            					<input type="text" id="enter-the-week-title" >	            				
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
	                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Discussion:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
                         	<div class="chats">
							<div class="chat-pro-img">
								<!-- <img src="{{ asset('public/img/discussion-prof-img.png') }}"> -->
							</div>
							<div class="chat-all-here">
								<!-- <h1>SARA DOE. <span>(title of Post Goes here)</span></h1> -->
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
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		     }); 		

 	});




 });

</script>

@endsection