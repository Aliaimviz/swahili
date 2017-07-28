<?php $i=1; ?>
  
<?php $__currentLoopData = $mcqViews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mcqz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="mcqDiv">
 	  <input type="hidden" name="mcqDivId" class="mcqDivId" value=""/>
 	  <br>
	  <h1> <b><?php echo e($i); ?>.</b> <p class="mcqHeading"><?php echo e($mcqz->mcq_ques); ?></p> </h1>
	  <a class="ajaxMcqEdit" href="#"><i class="fa fa-pencil fa-2" aria-hidden="true">Edit</i></a>
		  <?php $__currentLoopData = $mcqz->mcqAnswers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mcqAnswe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		    <li><?php echo e($mcqAnswe->choice); ?> : <?php echo e($mcqAnswe->answer); ?> <?php if($mcqAnswe->cor_ans != null): ?> <b>[Correct Answer]</b> <?php endif; ?></li> 

		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php  $i++; ?>
 </div> 	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->