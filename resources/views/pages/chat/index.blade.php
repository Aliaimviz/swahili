@extends('layouts.app')
@section('title', 'All Courses')
@section('content')

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
									<input type="text"  placeholder="Search" id="search">
					 				<button type="submit"><i class="fa fa-search"></i></button>
					 				<!-- <button type="submit" class="fil"><i class="fa fa-filter"></i></button> -->
				 				</form>
								</div>
							</div>
						</div>
						<div class="classmatspro " data-toggle="modal" data-target="#add-coding">
						
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/group-img.png') }}">
							</div>
							<div class="class-pr-con">
								<h1 style="margin-top: 29px; margin-left: 12px; font-size: 20px; font-weight: bold; color: #000;">Start Chat</h1>						
							</div>
						
						</div>
						<div class="classmatspro classmatspr2">
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/group-img.png') }}">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>
						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>
						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>
						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>
						<div class="classmatspro">
							<div class="class-pr-img">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con">
								<h1>Jason Bontan</h1>
								<p>dolorem ipsum porset ellu...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
					<h1 class="h1.user-lover-heading mess">Rebecca Hannah</h1>
					<div class="seprator new-sep ">&nbsp</div> 
					<a href="#" class="ellip"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
					<div class="class-mate-pr class-mate-br">
						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
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
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
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
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster dolorem ipsum quia dolor. dolorem ipsum quia dolor. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 reply-com">
								<textarea placeholder="Type a reply... " data-emojiable="true"></textarea>
								<!-- <div class="smil-gif">
									<a href="#"><i class="fa fa-smile-o" ></i></a>
									<a href="#">GIF</a>
								</div> -->
							</div>
							<div class="class-pr-img class-pr-img2 reply-com-btn slider-center-button">
								<input type="Submit" value="SUBMIT">
							</div>
						</div>
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
		            url: "{{ route('startChat') }}",
		            type: 'post', 
		            data: {'userEmails': userEmails},		            
			        success: function (data) { 
		           	  toastr.success(data.msg);
		           	  console.log(data)
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