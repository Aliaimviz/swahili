<?php shuffle($matches_datas); ?>

<ul>
	@for($i=0; $i<count($matches_datas); $i++)

			<li class="draggable" drag data-id="a"><a href="#">{{ $matches_datas[$i]['match_left'] }}</a></li>	
	@endfor
</ul>

<?php shuffle($matches_datas); ?>
	<ul class="ul-sc"> 
		@for($i=0; $i<count($matches_datas); $i++)
				<li class="droppable" data-id="d"><a href="#">{{ $matches_datas[$i]['match_right'] }}</a></li>
		@endfor
	</ul>

