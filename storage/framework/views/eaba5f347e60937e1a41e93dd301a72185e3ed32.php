<?php shuffle($matches_datas); ?>

<ul>
	<?php for($i=0; $i<count($matches_datas); $i++): ?>

			<li class="draggable" drag data-id="a"><a href="#" class="ajax_blank_left"><?php echo e($matches_datas[$i]['match_left']); ?></a></li>	
	<?php endfor; ?>
</ul>

<?php shuffle($matches_datas); ?>
	<ul class="ul-sc"> 
		<?php for($i=0; $i<count($matches_datas); $i++): ?>
				<li class="droppable" data-id="d"><a href="#" class="ajax_blank_right"><?php echo e($matches_datas[$i]['match_right']); ?></a></li>
		<a class="ajaxMatchEdit" href="#"><i class="fa fa-pencil fa-2" aria-hidden="true">Edit</i></a>
		<input type="hidden" value="<?php echo e($matches_datas[$i]['id']); ?>" name="matchId" class="matchId"/>
		
		<?php endfor; ?>
	</ul>

