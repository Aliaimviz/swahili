@foreach ($weeks as $week)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="add-week-panel ">
									<div class="and-all lesson-add">
										<ul>
											<li>
												<h4>Lesson. 1:</h4>
											</li>
											<li>
												<p>Title of Lesson.</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
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
												<h4>Coding. 1:</h4>
											</li>
											<li>
												<p>Title Of Coding</p>
											</li>
											<li class="dissmis-li-edit"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
									<div class="add-lesson-quiz-coding">
										<ul>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-lesson{{$week->id}}">Lesson</a></li>
											<input type="hidden" value="" id="weekIdLesson" name="weekIdLesson"/>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-quiz">Quiz</a></li>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-coding">Conding</a></li>
											<li class="dissmis-li-edit" style="padding-top: 20px;"><a href="#">Edit</a> <button type="button" class="close" data-dismiss="#" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

	<!-- add-lesson-model -->
	<div class="modal fade add-lesson" id="add-lesson{{$week->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="add-week-fileds">
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Lesson:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<form id="weekLessonForm" class="about-course" enctype="multipart/form-data">
							<label for="enter-the-week-title">Enter the lesson title</label>
							<input type="text" id="lessonTitle" name="lessonTitle">
							<input type="hidden" value="{{$week->id}}" id="weekValue" name="weekValue"/>
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
		<div class="modal fade" id="add-coding{{$week->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<form class="about-course">
								<label for="enter-the-week-title">Enter the resource title</label>
								<input type="text" id="enter-the-week-title" >
								<label for="attach-file">Attach files</label>
								<input type="hidden" value="{{$week->id}}" id="weekValue" name="weekValue"/>							
								<input type="file" id="attach-file" >
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