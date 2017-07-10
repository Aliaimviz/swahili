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
					<li class="active" href="#tab_a" data-toggle="pill"><a href="#tab_a" data-toggle="pill">Course:</a></li>
					<li href="#tab_b" data-toggle="pill"><a href="#tab_b" data-toggle="pill">Curriculum:</a></li>
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
								<form class="about-course" action="{{ route('addCourseForm') }}" method="POST">
									{{ csrf_field() }}
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
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="add-week-panel ">
									<div class="and-all lesson-add">
										<ul>
											<li>
												<h4>Lesson. 1:</h4>
											</li>
											<li>
												<p>Title Of Lesson</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="and-all quiz-add">
										<ul>
											<li>
												<h4>Quiz. 1:</h4>
											</li>
											<li>
												<p>Title Of Quiz</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="and-all coding-add">
										<ul>
											<li>
												<h4>Coding. 1:</h4>
											</li>
											<li>
												<p>Title Of Coding</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="add-lesson-quiz-coding">
										<ul>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-lesson">Lesson</a></li>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-quiz">Quiz</a></li>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-coding">Conding</a></li>
											<li class="dissmis-li-edit" style="padding-top: 20px;"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
								</div>
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
							<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Course:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
							<form class="about-course">
								<label for="enter-the-week-title">Enter the week title</label>
								<input type="text" id="enter-the-week-title" >
								<label for="description">Description</label>
								<textarea id="description" rows="5"></textarea>
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
						<form class="about-course">
							<label for="enter-the-week-title">Enter the lesson title</label>
							<input type="text" id="enter-the-week-title" >
							<label for="attach-file">Attach files</label>
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
@endsection