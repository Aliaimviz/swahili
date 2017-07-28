<?php $i=1; ?>

<?php $__currentLoopData = $blanks_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blanks_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<span><?php echo e($i); ?>.</span>  <br>
<div class="blank_ajax_div">	
<b>Question: </b> <p class="ajax_blank_ques"><?php echo e($blanks_data->ques); ?></p><a class="ajaxBlankEdit" href="#"><i class="fa fa-pencil fa-2" aria-hidden="true">Edit</i></a>
<br>
<b>Answer: </b> <p class="ajax_blank_ans"><?php echo e($blanks_data->answers); ?></p>
<input type="hidden" value="<?php echo e($blanks_data->id); ?>" name="blankId" class="blankId"/>
<?php $i++; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->