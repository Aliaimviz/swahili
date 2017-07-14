@foreach($weeks as $week)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="add-week-panel ">
									<div class="and-all lesson-add">
										<ul>								
											<li>
												<h4>Lesson. {{ $week->lesson_id}}:</h4>
											</li>
											
											<li>
												<p>{{ $week->lesson_title}}.</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button id="deleteLesson" data-id="{{ $week->lesson_id }}" type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="and-all quiz-add">
										<ul>
											<li>
												<h4>Quiz. 1:</h4>
											</li>
											<li>
												<p>Title Of Quiz</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>  
									<div class="and-all coding-add">
										<ul>
											<li>
												<h4>Resource: </h4>
											</li>
											<li>
												<!--<a href="{{ route('resource_download', ['path' => $week->resource_file]) }}">{{$week->resource_title}}</a> -->
												
													<a href="{{ asset('/public/files/resources/'. $week->resource_file) }}" 
														download="{{ route('resource_download', ['path' => $week->resource_file]) }}" >{{$week->resource_title}}</a>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="add-lesson-quiz-coding">
										<ul>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-lesson{{$week->week_id}}">Lesson</a></li>
											<input type="hidden" value="" id="weekIdLesson" name="weekIdLesson"/>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-quiz">Quiz</a></li>
											<li class="add-btns"><a href="#"  data-toggle="modal" data-target="#add-coding{{$week->week_id}}">Resources</a></li>
											<li class="dissmis-li-edit" style="padding-top: 20px;"><a href="#">Edit</a> <button data-id="{{ $week->week_id }}" type="button" class="close deleteWeek"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

	<!-- add-lesson-model -->
	<div class="modal fade add-lesson" id="add-lesson{{$week->week_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="lessonClosed" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="add-week-fileds">
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Lesson:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<form class="about-course weekLessonForm" enctype="multipart/form-data">
							<label for="enter-the-week-title">Enter the lesson title</label>
							<input type="text" id="lessonTitle" name="lessonTitle">
							<input type="hidden" value="{{$week->week_id}}" id="weekValue" name="weekValue"/>
							<label for="attach-file">Attach files</label>
							<input type="file" id="lessonFile" name="lessonFile">
							<div class="submit-btn">
								<input type="Submit" value="Save">	            						            					
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- add-condo-model -->
		<div class="modal fade" id="add-coding{{$week->week_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="add-week-fileds">
							<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add resource:</h1>
							<div class="seprator new-sep ">&nbsp;</div>
							<form class="about-course weekCondingForm" enctype="multipart/form-data">
								<label for="enter-the-week-title">Enter the resource title</label>
								<input type="text" id="resourceTitle" name="resourceTitle">
								<label for="attach-file">Attach files</label>
								<input type="hidden" value="{{$week->week_id}}" id="weekValue" name="weekValue"/>							
								<input type="file" id="resourceFile" name="resourceFile">
								<div class="submit-btn">
									<input type="Submit" value="Save">	            						            					
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>  
@endforeach
