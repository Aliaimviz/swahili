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
		<section id="course " class="contact-uu">
		<div class="container-fluid back-layer-img">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="layer-img">
						<h2>WE'D LOVE TO HEAR FROM YOU</h2>
					</div>
				</div>
			</div>
		</div>
			<div class="welcome-text">
				<div class="container">
					<h1>CONTACT US!</h1>
				</div>
			</div>
		
		
			
			
		<div class="instruster">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 ">
						<div class="avatar faq-an">
						<h1 class="h1.user-lover-heading">GET IN TOUCH</h1>
						<div class="seprator new-sep">&nbsp</div> 
						<div class="form-fields form-style">
						<form method="post" action="{{ route('contactEmail') }}">
							<label>First Name<input type="text" name="f_name"></label>
							<label>Last Name<input type="text" name="l_name"></label>
							<label>Email<input type="Email" name="email"></label>
							<label>Message<textarea rows="8" name="message"></textarea></label>
							{{ csrf_field() }}
							<input type="Submit" value="SEND!" name="sendemail">
						</form>
						</div>
				</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
						<div class="ifr">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4763951921186!2d55.30151451459604!3d25.25455498386957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f432ff4a6b26d%3A0xdae817ced5a4b0f9!2sBurjuman+Exit+3!5e0!3m2!1sen!2s!4v1496229074436" width="445" height="560" frameborder="0" style="border:2px solid #efefef" allowfullscreen></iframe>
						</div>
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