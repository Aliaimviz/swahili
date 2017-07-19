@if(isset($discussions))
	@foreach($discussions as $disc)
	<?php $i = 0; ?>

    <div class="chats dynaChat{{$disc[$i]->disc_id}}">
		<div class="chat-pro-img">

			<img src="{{ asset('public/img/discussion-prof-img.png') }}">
		</div>
		<div class="chat-all-here discussionBlock" data-id="{{ $disc[$i]->disc_id }}">
			<h1>{{ $disc[$i]->first_name }} {{ $disc[$i]->last_name }}. <span>( {{ $disc[$i]->dis_title }} )</span></h1>
			<p>{{ $disc[$i]->dis_ques }}</p>
			<div class="re-com-im">
				@if($disc[$i]->com_content || $disc[$i]->file)
					<div class="replies yes"><p> {{ count($disc) }} Replies </p></div>
				@endif
				<div class="com-like">
					<ul>
						<li data-toggle="modal" data-target="#add-lesson"><a href="#" class="discusImage" data-id="{{ $disc[$i]->disc_id }}"><i class="fa fa-upload"></i> Upload Image</a></li>
						<li data-toggle="modal" data-target="#add-coding"><a href="#" class="discusComment" data-id="{{ $disc[$i]->disc_id }}"><i class="fa fa-comment-o"></i> Comment</a></li>
						<!--<li data-toggle="modal" data-target="#add-coding"><a href="#"><i class="fa fa-smile-o"></i> React</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Direct</a></li> -->
					</ul>
				</div>
			</div>
			@foreach($disc as $di)
			@if($di->com_content || $di->file)
			<div class="chats inner-chat-here" style="display:none">
				<div class="chat-pro-img">
					<img src="{{ asset('public/img/discussion-prof-img.png') }}">
				</div>
				<div class="chat-all-here">
					<h1>{{ $di->first_name }} {{ $di->last_name }}</h1>
					@if($di->com_content)
						<p>{{ $di->com_content }}</p>
					@elseif($di->file)
						<img height="100px" width="100px" src="{{ asset('public/files/comment_images')}}/{{$di->file}}">
					@else
						<p></p>
					@endif
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
	<?php $i++; ?>

	@endforeach
@else
 <h1> No Discussion Found! </h1>
@endif