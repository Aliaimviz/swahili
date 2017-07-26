<?php $i=1; ?>
<?php $__currentLoopData = $blanks_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blanks_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<span><?php echo e($i); ?>.</span>  <br>
<b>Question: </b> <p><?php echo e($blanks_data->ques); ?></p>
<br>
<b>Answer: </b> <p><?php echo e($blanks_data->answers); ?></p>

<?php $i++; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->