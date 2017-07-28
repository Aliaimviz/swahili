<?php $__currentLoopData = $weeks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="add-week-panel ">
									<div class="and-all lesson-add">
										
										<ul>	
										 <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
										 	<?php $weekid = $we->week_id; ?>
										 <?php if(!empty($we->lesson_id)): ?>
											<li>
												
												<h4>Lesson. <?php echo e($we->lesson_id); ?>:</h4>
											</li>
																
											<li>
												<p><?php echo e($we->lesson_title); ?>.</p>
											</li>
											<li class="dissmis-li-edit"><a href="#" class="editLesson"  data-id="<?php echo e($we->lesson_id); ?>">Edit</a> <button class="deleteLesson" data-id="<?php echo e($we->lesson_id); ?>" type="button" class="close" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
											<br>
										<?php else: ?>
											<?php echo e($showFlag = false); ?>

											<li>												
												<h4>No Lessons</h4>
											</li>										
										<?php endif; ?>	
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
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
										 <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										 	<?php $weekid = $we->week_id; ?>
										 <?php if(!empty($we->resource_id)): ?>

											<li>

											  <a href="<?php echo e(asset('/public/files/resources/'. $we->resource_file)); ?>" 
														download="<?php echo e(route('resource_download', ['path' => $we->resource_file])); ?>" ><?php echo e($we->resource_title); ?></a>
																						
											</li>
											<!--<li class="dissmis-li-edit"><a href="#">Edit</a> --> <button type="button" data-id="<?php echo e($we->resource_id); ?>" class="close deleteResource" data-dismiss="#" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											</li>
											<br>									
										<?php else: ?>
											<?php echo e($showFlag = false); ?>

											<li>												
												<h4>No Resources added</h4>
											</li>										
										<?php endif; ?>

										 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>											


										</ul>
									</div>
									<div class="add-lesson-quiz-coding">
										<ul>
										 
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-lesson<?php echo $weekid; ?>">Lesson</a></li>
											<input type="hidden" value="" id="weekIdLesson" name="weekIdLesson"/>
											<li class="add-btns"><a href="#" data-toggle="modal" data-target="#add-quiz<?php echo $weekid; ?>">Quiz</a></li>
											<li class="add-btns"><a href="#"  data-toggle="modal" data-target="#add-coding<?php echo $weekid; ?>">Resources</a></li>
											<li class="dissmis-li-edit" style="padding-top: 20px;"><a href="#">Edit</a> <button data-id="<?php echo $weekid; ?>" type="button" class="close deleteWeek"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</li>	
																				
										</ul>
									</div>
								</div>
							</div>
						</div>

	<!-- add-lesson-model -->
	<?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="modal fade add-lesson" id="add-lesson<?php echo e($we->week_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<input type="hidden" value="<?php echo e($we->week_id); ?>" id="weekValue" name="weekValue"/>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<!-- add-condo-model -->
	<?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
		<div class="modal fade" id="add-coding<?php echo e($we->week_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								<input type="hidden" value="<?php echo e($we->week_id); ?>" id="weekValue" name="weekValue"/>							
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
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<!-- add-lesson-model -->
	<?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
	<div class="modal fade" id="add-quiz<?php echo e($we->week_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 	 <span aria-hidden="true">&times;</span>
                	</button>
              	</div>
                  <div class="modal-body">
                    <div class="add-week-fileds">
                        <h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Add Questions:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<div class="inner-tabs-m col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
						<ul class="nav nav-pills nav-stacked ">
						  <li class="active add-btns" href="#tab-a<?php echo e($we->week_id); ?>" data-toggle="tab"><a href="#tab-a" data-toggle="tab">Blanks</a></li>
						  <li class="add-btns" href="#tab-b<?php echo e($we->week_id); ?>" data-toggle="tab"><a href="#tab-b" data-toggle="tab">Mcq’s</a></li>
						  <li class="add-btns" href="#tab-c<?php echo e($we->week_id); ?>" data-toggle="tab"><a href="#tab-c" data-toggle="tab">Matches</a></li>						  
						</ul>
						</div>
						<div class="inner-tabs-m col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
							<div class="tab-content ">
						        <div class="tab-pane active" id="tab-a<?php echo e($we->week_id); ?>">
						        	<div class="add-mcq-fill">
						            	<div class="add-blanks">
						            		<div class="quest-ans">
						            	<form class="blankForm">
						            		 <!-- <button id="addBlank">Add Blank</button> -->
						            		 <b>Note:</b><p>Please use underscore (_) to write blanks</p>
														<p>Please write answers seperated by , in given order</p>
						            		 <b>Question:</b><textarea class="blankQues" name="blankQues"></textarea>
						            		 <br>
						            		 <b>Answers:</b><input type="text" name="blankAns" class="blankAns" data-role="tagsinput"/>
						            		 <br>
								            	<!--<span>1.</span>    
												<p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor. <input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p>
												<form class="about-course">	-->
												<input type="hidden" name="quiz_week_id" value="<?php echo e($we->week_id); ?>" class="quiz_week_id" />								     				
						            			<input type="hidden" value="0" class="editFlag" name="editFlag"/>	
						            				<div class="submit-btn">
						        						<input type="Submit" value="Save Blanks" id="blankFormButton">	            						            					
						        					</div>
						            	</form>
						            		 <div class="blank_list">
						            		 </div>						            		 						            	
											</div>
						            	</div>
									</div>
						        </div>
						        <div class="tab-pane" id="tab-b<?php echo e($we->week_id); ?>">
						            <div class="add-mcq-fill">
						            	<div class="add-mcqs">
						            		<div class="quest-ans">
						            		<!--	
											<span>1.</span><p style="float: left; width: 95%; padding-top: 6px;">dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor dolorem protos electure decor.Prem ipsum quia dolor. dolorem ipsum quia dolor dolorem ipsum quia dolor. dolorem ipsum quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor ?</p>
												-->
											<!--<button id="addMcqForm">Add Mcq</button> -->
												
											<form class="mcqForm" class="about-course">
												<h1><b>MCQ</b></h1>										
													<textarea name="mcq[]" class="mcqQues"></textarea>
													<input type="hidden" name="quiz_week_id" value="<?php echo e($we->week_id); ?>" class="quiz_week_id" /> 
												<hr>
												 <h1>Options: (Choose only correct Option)</h1>
													<ul>
														<li><input type="radio" id="dolorem-ipsum-quia-dolor" name="option1Select[]" value="A" >A:<input type="text" name="mcqOption1[]" id="mcqOption1" value=""/></li>
														<li><input type="radio" id="um-quia-dolorem" value="B"  name="option1Select[]">B:<input type="text" name="mcqOption2[]" id="mcqOption2" value=""/></li>
														<li><input type="radio" id="Quia-dolor-isyequer" value="C"  name="option1Select[]">C:<input type="text" name="mcqOption3[]" id="mcqOption3" value=""/></li>
													</ul>		         				
						            				<div class="submit-btn">
						        						<input type="Submit" value="Save MCQS">	            						            					
						        					</div>
						        					<div class="mcqList">
						        					</div>
					            			</form>
										</div>
						            	</div>
						            </div>	
						        </div>
						        <div class="tab-pane" id="tab-c<?php echo e($we->week_id); ?>">
						        	<div class="add-mcqs">
						        		<div class="matc">
											<div class="matc-inner">
												<input type="text" name="blankLeft" class="blankLeft"/>
												<input type="text" name="blankRight" class="blankRight"/>												
												<input type="hidden" value="<?php echo e($we->week_id); ?>" name="quiz_week_id" class="quiz_week_id"/>
												<input type="hidden" value="0" name="editFlagMatch" class="editFlagMatch" />												
												<input type="button" class="saveMatch" value="Save">	 
												<div class="mat-ul week-list-matches">
													<!--<ul>
														<li class="draggable" drag" data-id="a"><a href="#">Good  bye!</a></li>
														<li class="draggable" drag" data-id="b"><a href="#">fine</a></li>
														<li class="draggable" drag" data-id="c"><a href="#">good night</a></li>
														<li class="draggable" drag" data-id="d"><a href="#">i am</a></li>
														<li class="draggable" drag data-id="e"><a href="#">yes</a></li>
													</ul>
													<ul class="ul-sc"> 
														<li class="droppable" data-id="d"><a href="#">Ouiz</a></li>
														<li class="droppable" data-id="e"><a href="#">Bonne nuit</a></li>
														<li class="droppable" data-id="c"><a href="#">Au revoir!</a></li>
														<li class="droppable" data-id="a"><a href="#" >Daccord</a></li>
														<li class="droppable" data-id="b"><a href="#">Je suis</a></li>
													</ul> -->
												</div>	
											</div>
											<form class="about-course">												     				
						            				<div class="submit-btn">
						        						<!--<input type="Submit" value="Save">	-->           						            					
						        					</div>
						            			</form>
										</div>
						        	</div>						            
						        </div>						        
							</div><!-- tab content -->
						</div>					
						
 	                </div>
                  </div>
                </div>
              </div>
            </div>
	<!-- add-quiz-model -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<!-- Edit Lesson Form --> 

	
	<div class="modal fade add-lesson editLessonModal" id="editLessonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="lessonClosed" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="add-week-fileds">
						<h1 class="h1.user-lover-heading mess" style="font-size: 25px !important;">Edit Lesson:</h1>
						<div class="seprator new-sep ">&nbsp;</div>
						<form class="about-course editLessonForm" id="updateLessonForm" enctype="multipart/form-data">
							<label for="enter-the-week-title">Edit the lesson title</label>
							<input type="text" id="updateLessonTitle" name="updateLessonTitle">
							<input type="hidden" id="updateLessonId" name="updateLessonId" >
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
