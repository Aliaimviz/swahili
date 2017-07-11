@extends('layouts.app')
@section('title', 'Add Course')

@section('content')
<div class="dashboard-men">
	<div class="container">
		<div class="men-na">
			<p><a href="#"> <i class="fa fa-angle-left"></i> Dashboard</a></p>
		</div>
		<div class="men-logo"><a href="#"><img src="{{ asset('public/img/dashboardlogo.png') }}"></a></div>
		<div class="men-pr-set">
			<ul>
				<li><a href="#"> <img src="{{ asset('public/img/coins2.png') }}"> 2000</a></li>
				<li><a href="#"><img src="{{ asset('public/img/right-check.png') }}"><img src="{{ asset('public/img/mini-pr.png') }}"></a></li>
				<li><a href="#">SARA Doe</a></li>
				<li><a href="#"><i class="fa fa-cog" ></i></a> <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="margin-auto">				
			@if (session('success'))
			    <div class="alert alert-success">
			        <strong>Success!</strong> {{ session('success') }}
			    </div>
			@elseif(session('alert'))
				<div class="alert alert-danger">
				  <strong>Alert!</strong> {{ session('alert') }}
				</div>
			@endif
			</div>
		</div>
		<div class="row">

			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<ul class="nav nav-pills nav-stacked  course-tabs-nav ">
					<li class="active" href="#tab_a" data-toggle="pill"><a id="tabA" href="#tab_a" data-toggle="pill">Course:</a></li>
					<li href="#tab_b" data-toggle="pill"><a id="tabB" href="#tab_b" data-toggle="pill">Curriculum:</a></li>
					<li href="#tab_c" data-toggle="pill"><a href="#tab_c" data-toggle="pill">Price:</a></li>
					<li href="#tab_d" data-toggle="pill"><a href="#tab_d" data-toggle="pill">Student Enroll</a></li>
					<li href="#tab_e" data-toggle="pill"><a href="#tab_e" data-toggle="pill">Discussion</a></li>
				</ul>
			</div>
			<div class="tab-content col-xs-6 col-sm-6 col-md-8 col-lg-8 course-tabs-pane ">
				<div class="tab-pane active" id="tab_a">
					<div class="tab-pannel">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 float-left">
								<div class="course-ti">
									<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">About Course:</h1>
									<div class="seprator new-sep ">&nbsp;</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 float-left">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<form id="courseAddForm" class="about-course" method="POST">
									
									<input type="hidden" name="courseID" value="">
									<label for="enter-the-course-title">Enter the course title</label>
									<input type="text" id="enter-the-course-title" name="courseName" value="@if($course['title']){{$course['title']}}@endif">
									<label for="description">Description</label>
									<textarea id="description" rows="5" name="courseDescription">@if($course['description']){{$course['description']}}@endif</textarea>
									<label for="pre-request">Prerequisites</label>
									<input type="text" id="pre-request" value="@if($course['prerequisite']){{$course['prerequisite']}}@endif" name="coursePrerequisites">
									<div class="submit-btn">
										<input type="Submit" value="Save">			            						            					
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tab_b">
					<div class="tab-pannel">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 float-left">
								<div class="course-ti">
									<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Curriculm:</h1>
									<div class="seprator new-sep ">&nbsp;</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 float-left">
								<p class="add-week"><a href="#" data-toggle="modal" data-target="#add-week">Add week</a></p>
							</div>
						    <div id="weeksView">
							</div>
						</div>

					</div>
				</div>
				<div class="tab-pane" id="tab_c">
					<h4>Pane C</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
				</div>
				<div class="tab-pane" id="tab_d">
					<h4>Pane D</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
				</div>
				<div class="tab-pane" id="tab_e">
					<h4>Pane E</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
				</div>
			</div>
			<!-- tab content -->
		</div>
	</div>
	<div class="model">
		<div class="modal fade" id="add-week" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="add-week-fileds">
							<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Weeks in Courses:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
							<form id="weekForm" class="about-course">
								<label for="enter-the-week-title">Enter the week title</label>
								<input type="text" id="enter-the-week-title" name="title" >
								<label for="description">Description</label>
								<input type="hidden" value="" id="courseId" name="courseId"/>
								<textarea id="description" name="description"rows="5"></textarea>
								<div class="submit-btn">
									<input type="Submit" value="Save">	            						            					
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- add-week-model -->
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
							<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add resource:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
							<form class="about-course">
								<label for="enter-the-week-title">Enter the resource title</label>
								<input type="text" id="enter-the-week-title" >
								<label for="attach-file">Attach files</label>
								<input type="hidden" value="" id="weekValue" name="weekValue"/>								
								<input type="file" id="attach-file" >
								<div class="submit-btn">
									<input type="Submit" value="Save">	            						            					
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- add-coding-model -->
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
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Lesson:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<form id="weekLessonForm" class="about-course">
							<label for="enter-the-week-title">Enter the lesson title</label>
							<input type="text" id="lessonTitle" name="lessonTitle">
							<input type="hidden" value="" id="weekValue" name="weekValue"/>
							<label for="attach-file">Attach files</label>
							<input type="file" id="lessonFile" name="lessonFile">
							<div class="submit-btn">
								<input type="Submit" value="Save">	            						            					
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- add-lesson-model -->
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
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Questions:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<div class="inner-tabs-m col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
							<ul class="nav nav-pills nav-stacked ">
								<li class="active add-btns"><a href="#tab_aa" data-toggle="pill">Blanks</a></li>
								<li class="add-btns"><a href="#tab_bb" data-toggle="pill">Mcq’s</a></li>
								<li class="add-btns"><a href="#tab_cc" data-toggle="pill">Matches</a></li>
							</ul>
						</div>
						<div class="inner-tabs-m col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
							<div class="tab-content ">
								<div class="tab-pane active" id="tab_aa">
									<div class="add-mcq-fill">
										<div class="quest-ans">
											<span>1.</span>
											<p style="float: left; width: 95%; padding-top: 6px;">dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor dolorem protos electure decor.Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor ?</p>
											<hr>
											<form class="about-course">
												<input type="checkbox" id="dolorem-ipsum-quia-dolor" ><label for="dolorem-ipsum-quia-dolor">Dolorem ipsum quia dolor</label>
												<input type="checkbox" id="um-quia-dolorem" ><label for="um-quia-dolorem">Um quia dolorem </label>
												<input type="checkbox" id="dolorem-ipsum-quia-dolor" ><label for="dolorem-ipsum-quia-dolor">Dolorem ipsum quia dolor</label>
												<div class="submit-btn">
													<input type="Submit" value="Save">	            						            					
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_bb">
									<h4>Pane B</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
								<div class="tab-pane" id="tab_cc">
									<h4>Pane C</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
								<div class="tab-pane" id="tab_dd">
									<h4>Pane D</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
							</div>
							<!-- tab content -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- add-quiz-model -->
</section>

<script type="text/javascript">

$(document).ready(function(){

		var course_id;
		//Course Add Form
		$("#courseAddForm").submit(function(e){
			e.preventDefault();
			console.log("course add form for user");
			var formData = $("#courseAddForm").serialize();
			console.log(formData);

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('addCourseForm') }}",
		            type: 'post', 
		            data: formData,
			        success: function (data) { 

		           	  toastr.success(data.msg);
		           	  $("#tabA").toggleClass();
		           	  course_id = data.course_id;
		           	  $("#courseId").val(data.course_id);
		           	  $("#tabB").click();
			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },	                    
		           
		        });
		});

		//Week addition in Course

		$("#weekForm").submit(function(e){
			e.preventDefault();
			console.log("week add form intot the course");
			var formData = $("#weekForm").serialize();
			console.log(formData);

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('addWeekForm') }}",
		            type: 'post', 
		            data: formData,
			        success: function (data) { 

		           	  toastr.success(data.msg);
		           	  
		           	  //Updating course week view
		           	  weekView(data.course_id);

		           	  //Assigning week id to week forms        	  
		           	  $("#weekIdLesson").val(data.week_id);

		           	  $('#add-week').modal('toggle');
		           	  

			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },		           
		        });
		});


	//Reload Ajax Weeks View	
	function weekView(courseId){
		console.log("course idzzz" + courseId);

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('getUpdateWeeks') }}",
		            type: 'post', 
		            data: {'courseId': courseId},
			        success: function (data) { 

			          //Loading html view
			          $("#weeksView").html(data.weekView);
		           	  weekLessonFormFunction();


			        },
		        	error: function (data) { 
		        	//  console.log(data);
		           	 // toastr.error(data.msg);        		
			        },		           
		        });

	}

	//WeekLessonForm added with context to Add --------- Farhan
	function weekLessonFormFunction(){
		
		$("#weekLessonForm").submit(function(e){
			e.preventDefault();
			console.log("lesson for particular week of the course");
			var formData = $("#weekLessonForm").serialize();

			  $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });

		      $.ajax({
		            url: "{{ route('addLessonForm') }}",
		            type: 'post', 
		            data: formData,
			        success: function (data) {
			        	console.log(data);
		           	    toastr.success(data.msg);
		           	    
		           	    //hide lesson modal 
		           	    $('.add-lesson').modal('toggle');

		           	    //Updating weeks view		           	    
		           	    weekView(data.course_id);

			        },
		        	error: function (data) { 
		        	  console.log(data);
		           	  toastr.error(data.msg);        		
			        },		           
		        });
		});
    }

});


</script>
@endsection