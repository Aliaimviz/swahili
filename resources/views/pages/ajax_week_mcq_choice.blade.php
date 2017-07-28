<?php $i=1; ?>
  
@foreach ($mcqViews as $mcqz)
 <div class="mcqDiv">
 	  <input type="hidden" name="mcqDivId" class="mcqDivId" value=""/>
 	  <br>
	  <h1> <b>{{ $i }}.</b> <p class="mcqHeading">{{$mcqz->mcq_ques}}</p> </h1>
	  <a class="ajaxMcqEdit" href="#"><i class="fa fa-pencil fa-2" aria-hidden="true">Edit</i></a>
		  @foreach ($mcqz->mcqAnswers as $mcqAnswe)

		    <li>{{ $mcqAnswe->choice }} : {{ $mcqAnswe->answer}} @if($mcqAnswe->cor_ans != null) <b>[Correct Answer]</b> @endif</li> 

		  @endforeach
		<?php  $i++; ?>
 </div> 	
@endforeach
<!-- <p>dolorem ipsum quia dolor. <input type="text"> ipsum quia dol dolor dolorem protos ellum electure decor.Prem ipsum quia dolor.
<input type="text"> ipsum quia dolor dolorem ipsum quia dolor. <input type="text"> 
quia dolor dolor dolorem protos electure decor. Prem ipsum quia dolor. dolorem ipsum quia dolor</p> -->