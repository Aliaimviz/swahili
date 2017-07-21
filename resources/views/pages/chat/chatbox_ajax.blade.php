
						@foreach($chat_messages as $chat_message)
						  @if($chat_message->user_id == Auth::user()->id)	
							<div class="comment-img">
								<div class="class-pr-img class-pr-img2">
									<img src="{{ asset('public/img/check.png') }}" class="check-ri">
									<img src="{{ asset('public/img/class-pr-1.png') }}">
								</div>
								<div class="class-pr-con class-pr-con2">
									<p>{{  $chat_message->message }} </p>
									<span><i class="fa fa-clock-o"></i> {{ $chat_message->created_at->todatestring() }}</span>
								</div>
							</div>
						 @else


						 <div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex">
								<p>{{  $chat_message->message }}</p>
								<span><i class="fa fa-clock-o"></i> {{ $chat_message->created_at->todatestring() }}</span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
						</div>
						 @endif
						 							
						@endforeach
						
<!--
						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 class-pr-conex ">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
							<div class="class-pr-img class-pr-img2 class-pr-imgex">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
						</div>

						<div class="comment-img">
							<div class="class-pr-img class-pr-img2">
								<img src="{{ asset('public/img/check.png') }}" class="check-ri">
								<img src="{{ asset('public/img/class-pr-1.png') }}">
							</div>
							<div class="class-pr-con class-pr-con2">
								<p>dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor ellum proster dolorem ipsum quia dolor. dolorem ipsum quia dolor. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster. lorem ipsum quia dolor dolor ellum prosterdolorem ipsum quia dolor dolor ellum proster</p>
								<span><i class="fa fa-clock-o"></i> 12:30</span>
							</div>
						</div> -->
 
						<div class="comment-img">
							<div class="class-pr-con class-pr-con2 reply-com">
								
								<textarea placeholder="Type a reply... " name="chatFormMsg" id="chatFormMsg" data-emojiable="true"></textarea>
								<!-- <div class="smil-gif">
									<a href="#"><i class="fa fa-smile-o" ></i></a>
									<a href="#">GIF</a>
								</div> -->
							</div>
							<div class="class-pr-img class-pr-img2 reply-com-btn slider-center-button">
								<form id="chatMsgForm">
									<input type="hidden" value="" name="chat_id" id="chat_id"/>	
									<input type="Submit" value="SUBMIT">
								<form>
							</div>
						</div>
