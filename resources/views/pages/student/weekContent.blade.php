@extends('layouts.app')
@section('title', 'Courses Content')
@section('content')
<div class="dashboard-men">
	<div class="container">
		<div class="men-na">
			<p><a href="#"> <i class="fa fa-angle-left"></i> Dashboard</a></p>
		</div>
		<div class="men-logo"><a href="#"><img src="{{ asset('public/img/dashboardlogo.png') }}""></a></div>
		<div class="men-pr-set">
			<ul>
				<li><a href="#"> <img src="{{ asset('public/img/coins2.png') }}""> 2000</a></li>
				<li><a href="#"><img src="{{ asset('public/img/right-check.png') }}""><img src="{{ asset('public/img/mini-pr.png') }}""></a></li>
				<li><a href="#">SARA Doe</a></li>
				<li><a href="#"><i class="fa fa-cog" ></i></a> <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<section class="content">
	<div class="container">
	<div class="row final-lesson week-content">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
			<div class="less-chec" style=" margin-top: 0px;">
				<div class="open-close-locked">
					<div class="closed">
						<div class="lesson-title-main">
							<div class="lesson-title">
								<h4>Objective</h4>
								<p>{{ $lesson[0]->description}}</p>
							</div>
						</div>
					</div>
				</div>
				@foreach($lesson as $le)
				<!-- open-close-locked -->
				<div class="open-close-locked">
					<div class="closed">
						<div class="lesson">
							<form>
								<i class="fa fa-video-camera fir-c"></i> <h5> <a href="{{ $le->lesson_id }}" class="lessonLearning">{{ $le->lesson_title}}</a></h5>
								<input type="hidden" name="videoID" value="{{ $le->lesson_id }}">
							</form>
						</div>
						<!-- <div class="comp">
							<ul>
								<li class="redo">Redo <i class="fa fa-undo" ></i></li>
								<li class="c-ompleted">Completed <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
								<li class="in-progress">In progress <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
								<li class="c-locked">locked <i class="fa fa-lock lock-d" ></i></li>
							</ul>
						</div> -->
					</div>
				</div>
				@endforeach
				@foreach($resource as $re)
				<!-- open-close-locked -->
				<div class="open-close-locked">
					<div class="closed">
						<div class="lesson">
							<form>
								<img src="{{ asset('public/img/apple.png') }}" class="font-awe"> <h5> <a href="#">{{ $re->title}}</a></h5>
								<input type="hidden" name="resourceID" value="{{$re->id }}">
							</form>
						</div>
						<!-- <div class="comp">
							<ul>
								<li class="redo">Redo <i class="fa fa-undo" ></i></li>
								<li class="c-ompleted">Completed <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
								<li class="in-progress">In progress <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
								<li class="c-locked">locked <i class="fa fa-lock lock-d" ></i></li>
							</ul>
						</div> -->
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
			<!-- 		<h1 class="h1.user-lover-heading mess">Rebecca Hannah</h1>
				<div class="seprator new-sep ">&nbsp</div>  -->
			<div class="weeks">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Week 1: Lesson 3</h1>
						<div class="seprator new-sep ">&nbsp</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
						<ul class="mater-study">
							<li><a href="#"><i class="fa fa-download"></i></a> Materials</li>
							<li><a href="#"><i class="fa fa-bars"></i></a>Study Now</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<div class="iframe-video">
							<iframe width="100%" height="407" src="https://www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection