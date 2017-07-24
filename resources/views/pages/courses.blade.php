@extends('layouts.app')
@section('title', 'All Courses')
@section('content')
<section id="course">
	<div class="container-fluid back-layer-img">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="layer-img">
					<h2 style="padding-left: 0;">Search your course</h2>
					<form id="course-search-form" method="get" action="/" target="_self">
						<div class="input-group input-group-lg"> 
							<input style="border: 1px solid #fff;" id="nlk-search-str" name="s" type="text" maxlength="200" class="form-control" placeholder="Type here" data-def="Zadejte dotaz" required>							    
							<span class="input-group-btn"> 
							<button class="btn btn-primary" type="button" id="nlk-search-submit">
							<i class="fa fa-search"></i>
							</button> 							    
							</span>   							    
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="slid-main-cont">
		<p>Top Courses in "English Learning"</p>
		<div class="row">
			@foreach($courses as $co)
			<div class="col-md-3 col-sm-12 marginTB15">
				<a href="{{ route('singleCourseView', ['id' => $co->id]) }}">
					<div class="frontend-box-inner">
						<div class="img"><img src="{{ asset('public/img/course-image.png') }}"></div>
						<div class="course-detail-front">
							<h5>{{ $co->title }}</h5>
							<p>{{ $co->description }}</p>
							<ul class="course-ratings">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li>
									<p>4.7 (28,127)</p>
								</li>
							</ul>
							<ul class="course-price">
								<!-- <li class="regular-price">
									<p> </p>
								</li> -->
								<li class="sale-price">
									<p>${{ $co->price }}</p>
								</li>
							</ul>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
		<!-- <div class="naviga">
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left fa fa-angle-left "></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right fa fa-angle-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div> -->
	</div>
</section>

@endsection