@extends('layouts.app')
@section('title', 'All Courses')
@section('content')

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Swahili Pro</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			</div>
		<section id="faq">
		<div class="container-fluid back-layer-img">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="layer-img">
						<h2>Frequently asked questions</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container faq-sp">

			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">01</p>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p">How does your course compare to other online courses?</p>
				</div>
			</div>
			<div class="row">
				<div class="avatar faq-an">
						<h1 class="h1.user-lover-heading">ANSWER</h1>
						<div class="seprator new-sep">&nbsp</div> 
						<p>Our competitors such as Duolingo and Rosetta Stone take a memorize and repeat approach as if you were a toddler. The problem is that once you are an adult, memorizing and repeating random words and phrases doesn't lead you to understanding a language at a professional level, it just gives you enough language to have a limited dialogue within only a couple contexts. Swahilipro is a professional level course, we go beyond the surface, teaching you how to identify the correct Swahili to use, depending on the context.</p>
				</div>
			</div>
			<div class="row">			
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<p class="box-p p-right">What are common challenges with in-country study abroad programs?</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<p class="box-no">02</p>
				</div>
				</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">03</p>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p">What is the best approach to learning Swahili?</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p p-right">Should I upgrade to the pro version?</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">04</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">05</p>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p">How does your course compare to other online courses?</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p p-right">What happens if there are technical difficulties and a language partner is unable to report to our tutoring session?</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">06</p>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="box-no">07</p>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<p class="box-p">Should I start at level 1 or level 2?</p>
				</div>
			</div>
			
		</div>
		<div class="sing-upp">
						<div class="welcome-text">
							<div class="container">
							<h1>START LEARNING TODAY</h1>
							<a href="{{route('allCourses')}}">BEGIN YOUR Free trial</a>
						</div>
						</div>
					</div>	
		</section>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>




@endsection