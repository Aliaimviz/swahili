@extends('layouts.app')
@section('title', 'Courses Content')
@section('content')
<section id="welcome">
	<div class="dashboard">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<h2>COURSE TITLE GOES HERE</h2>
					<a href="#" class="conlearning">Continue Learning</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="pro-bar">
						<h5>YOUR PROGRESS</h5>
						<div class="progress">
							<div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
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
				<h1 class="h1.user-lover-heading">WEEK THREE</h1>
				<div class="seprator new-sep">&nbsp</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
				<div class="leabtn">
					<a href="#" class="conlearning">MATERIALS</a>
					<a href="#" class="conlearning">STUDY NOW</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="less-chec">
					<?php $i = 1;?>
					@foreach($lessons as $le)
					<div class="open-close-locked">
						<div class="open">
							<div class="lesson">
								<h5>Week {{$i++}}:</h5>
							</div>
							<div class="lesson-title-main">
								<div class="lesson-title">
									<h4>{{ $le['title']->title}}</h4>
								</div>
								<div class="comp">
									<ul>
										<li class="redo">Redo <i class="fa fa-undo" ></i></li>
										<li class="c-ompleted">Completed <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
										<li class="in-progress">In progress <i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></li>
										<li class="c-locked">locked <i class="fa fa-lock lock-d" ></i></li>
									</ul>
								</div>
								<div class="inner-sect" style="display: none;">
									<ul>
										<li class="video-title">
											<i class="fa fa-video-camera fir-c" ></i>Lessons {{ $le['lesson']}} 
											<p><i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></p>
										</li>
										<li class="excersise-title">
											<img src="{{ asset('public/img/dumble.png') }}">Quiz 
											<p><i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></p>
										</li>
										<li class="virtual-classroom">
											<img src="{{ asset('public/img/apple.png') }}">Resources {{ $le['resource']}} 
											<p><i class="fa fa-check-circle check-d" ></i><i class="fa fa-circle-o un-check-d" ></i></p>
										</li>
									</ul>
									<form action="" method="post">
										{{ csrf_field() }}
										<button type="submit" class="pull-right conlearning">Continue</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>


@endsection