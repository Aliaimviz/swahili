@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section id="main-area">
	<div class="main-slider">
		<div id="outerBankSlider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#outerBankSlider" data-slide-to="0" class="active"></li>
				<li data-target="#outerBankSlider" data-slide-to="1"></li>
				<li data-target="#outerBankSlider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="img-fluid" src="{{ asset('public/img/slider-img.png') }}" alt="First slide">
					<div class="carousel-caption">
						<div class="tree-img">
							<img src="{{ asset('public/img/slider-small-img.png') }}" alt="">
						</div>
						<h1 class="learn-professional">LEARN PROFESSIONAL SWAHILI ONLINE</h1>
						<!--  <p class="lead">Only local independent charter booking service</p> -->
						<div class="slider-center-button">
							<a href="#">START FREE TRAIL</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="img-fluid" src="{{ asset('public/img/slider-img.png') }}" alt="Second slide">
					<div class="carousel-caption">
						<div class="tree-img">
							<img src="{{ asset('public/img/slider-small-img.png') }}" alt="">
						</div>
						<h1 class="learn-professional">LEARN PROFESSIONAL SWAHILI ONLINE</h1>
						<!-- <p class="lead">Only local independent charter booking service</p>
							-->
						<div class="slider-center-button">
							<a href="#">START FREE TRAIL</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="img-fluid" src="{{ asset('public/img/slider-img.png') }}" alt="Second slide">
					<div class="carousel-caption">
						<div class="tree-img">
							<img src="{{ asset('public/img/slider-small-img.png') }}" alt="">
						</div>
						<h1 class="learn-professional">LEARN PROFESSIONAL SWAHILI ONLINE</h1>
						<!-- <p class="lead">Only local independent charter booking service</p>
							-->
						<div class="slider-center-button">
							<a href="#">START FREE TRAIL</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#outerBankSlider" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#outerBankSlider" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
	<div id="container">
		<div class="online-program col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h1 class="online-program-heading">EXPERIENCE OUR ONLINE IMMERSION PROGRAM</h1>
			<div class="seprator">&nbsp;</div>
			<p class="online-program-para">
				Swahilipro is an interactive online course. Your learning is done at your speed with us. We utilize video lectures, online quizzes, vocab flashcards, animated interactive classrooms, cultural videos, songs, and stories to equip you with a holistic knowledge of language
				and culture across East Africa.
			</p>
		</div>
	</div>
	<div class="user-lover">
		<div id="container">
			<h1 class="user-lover-heading">Why users Love Sawahili Pro ?</h1>
			<div class="seprator new-sep">&nbsp;</div>
			<p class="user-lover-para">
				Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
			</p>
			<div class="icon-area">
				<ul class="oval-icons">
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-1.png') }}" alt="icon-1"></div>
						</a>
						<p class="bottom-name">Courses</p>
					</li>
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-2.png') }}" alt="icon-2"></div>
						</a>
						<p class="bottom-name">Quizzes</p>
					</li>
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-3.png') }}" alt="icon-3"></div>
						</a>
						<p class="bottom-name">Groups</p>
					</li>
				</ul>
				<ul class="oval-icons">
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-4.png') }}" alt="icon-4"></div>
						</a>
						<p class="bottom-name">Messages</p>
					</li>
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-5.png') }}" alt="icon-5"></div>
						</a>
						<p class="bottom-name">Upload</p>
					</li>
					<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
						<a href="#">
							<div class="oval-border"><img src="{{ asset('public/img/icon-6.png') }}" alt="icon-6"></div>
						</a>
						<p class="bottom-name">Transactions</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="two-images-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="sec-1">
			<h1 class="our-cos">OUR<br>CURRICULUM <span class="arrows">>></span></h1>
		</div>
		<div class="sec-2">
			<h1 class="our-price">OUR<br>PRICING<span class="arrows second-arrow">>></span></h1>
		</div>
	</div>
	<div class="innovative col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="container">
			<h1 class="inovative-heading">AN INNOVATIVE APPROACH TO<br>LEARNING LANGUAGE</h1>
			<div class="seprator">&nbsp;</div>
			<div class="tree-big-img">
				<img class="img-fluid" src="{{ asset('public/img/grey-swahlipro.png') }}" alt="">
			</div>
		</div>
	</div>
	<div class="hidden-costs col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="container">
			<div class="hidden-costs-heading">
				<h1>The Hidden Costs of traditional programs</h1>
				<div class="seprator-white">&nbsp;</div>
				<p class="hidden-costs-para">
					Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
				</p>
			</div>
			<ul class="small-icon-area">
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-1.png') }}" alt="icon-1"></div>
						<h2>LOCAL TRANSPORT</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-2.png') }}" alt="icon-2"></div>
						<h2>CHILDCARE</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-3.png') }}" alt="icon-3"></div>
						<h2>TRAVEL INSURANCE</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-4.png') }}" alt="icon-4"></div>
						<h2>STUDENT VISAS</h2>
					</a>
				</li>
			</ul>
			<ul class="small-icon-area icon-area-newest">
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-5.png') }}" alt="icon-5"></div>
						<h2>COURSE FEES</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-6.png') }}" alt="icon-6"></div>
						<h2>AIRFARE</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-7.png') }}" alt="icon-7"></div>
						<h2>TIME OFF WORK</h2>
					</a>
				</li>
				<li class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<a href="#">
						<div class="icon-img"><img src="{{ asset('public/img/triditional-programs-icon-8.png') }}" alt="icon-8"></div>
						<h2>ROOM & BOARD</h2>
					</a>
				</li>
			</ul>
			<div class="total-costs">
				<h2>TOTAL COSTS FOR ONE MONTH IN COUNTRY $2,500- $4,500</h2>
				<h2 class="bold-heading">SWAHILIPRO COST $250</h2>
			</div>
		</div>
	</div>
	<div class="could-change col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1 class="inovative-heading">LEARNING SWAHILI <br>COULD CHANGE YOUR LIFE	</h1>
		<div class="seprator">&nbsp;</div>
		<p>Communicate with people from East Africa. Perform your job effe</p>
		<p>Perform your job effectively.</p>
		<p>Travel the world.</p>
		<p>Gain professional skills.</p>
	</div>
	<div class="start-learning-today col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Start Learning Today</h1>
		<div class="slider-center-button new-bottom-button">
			<a href="#">Start Learning Today</a>
		</div>
	</div>
</section>
@endsection