<?php $i=1; ?>

@foreach($blanks_datas as $blanks_data)
	<span>{{ $i }}.</span>  <br>
<div class="blank_ajax_div">	
<b>Question: </b> <p class="ajax_blank_ques">{{ $blanks_data->ques}}</p><a class="ajaxBlankEdit" href="#"><i class="fa fa-pencil fa-2" aria-hidden="true">Edit</i></a>
<br>
<b>Answer: </b> <p class="ajax_blank_ans">{{ $blanks_data->answers}}</p>
<input type="hidden" value="{{$blanks_data->id}}" name="blankId" class="blankId"/>
<?php $i++; ?>
</div>
@endforeach

<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->