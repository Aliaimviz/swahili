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
		<section id="course">
		<div class="container-fluid back-layer-img">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="layer-img">
						<h2>ABOUT US</h2>
					</div>
				</div>
			</div>
		</div>
		
		
			
			
		<div class="instruster">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 ">
						<div class="avatar faq-an">
						<h1 class="h1.user-lover-heading">THE INSTRUCTOR</h1>
						<div class="seprator new-sep">&nbsp</div> 
						<p>Rebecca Mandich is a true Swahilipro. She spent four years directing intensive Swahili immersion programs for foreigners in Tanzania and Zanzibar,
so she understands how adult students learn. She is currently a Masters candidate in the number one rated African Cultural Studies program at
UW-Madison.</p>
<p>Rebecca is passionate about all things creative, especially storytelling. She filmed and produced a Swahili feature film called "Nyange Kigoma," which appeared in the Zanzibar International Film Festival as well as the Swahili web series "Binadamu." Her creative mind, video expertise, knowledge of East Africa, and proven record of running successful language programs uniquely qualify her to create the right course to fit your needs.</p>
				</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
						<img src="{{ asset('public/img/instructor.png') }}">
					</div>
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