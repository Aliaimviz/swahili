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
		<section id="language">
		<div class="container-fluid back-layer-img">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="layer-img">
						<h2>LANGUAGE  TUTORS</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row row-centered">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="avatar tutors">
						<h1 class="h1.user-lover-heading">THE ROLE OF THE LANGUAGE TUTOR</h1>
						<div class="seprator new-sep">&nbsp</div> 
					</div>
					<div class="language-p">
						<p >One of the greatest challenges of learning a language in the beginning stages is finding someone to practice with who is patient, competent, and encouraging. The role of the language tutor isn't to lecture you, but rather to be a safe place to practice the content that you have learned that week. Our language tutors are experienced and love what they do. With this program component, we provide employment to local people who are passionate about connecting you to their culture.</p>
						<p>For an additional $150 you can upgrade to our pro packages, which include 14 one-hour video conferencing sessions with a language partner. You can look at the availability of the language partners online and plan your weekly session according to your schedule each week.</p>

						<a href="{{route('allCourses')}}">ENROLL NOW</a>
					</div>

				</div>
			</div>
		</div>
		<div class="sing-upp">
						<div class="welcome-text">
							<div class="container">
							<h1>START LEARNING TODAY</h1>
							<a href="#">BEGIN YOUR Free trial</a>
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