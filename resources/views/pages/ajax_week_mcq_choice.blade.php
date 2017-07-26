<?php $i=1; ?>
@foreach($blanks_datas as $blanks_data)
	<span>{{ $i }}.</span>  <br>
<b>Question: </b> <p>{{ $blanks_data->ques}}</p>
<br>
<b>Answer: </b> <p>{{ $blanks_data->answers}}</p>

<?php $i++; ?>
@endforeach

<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->