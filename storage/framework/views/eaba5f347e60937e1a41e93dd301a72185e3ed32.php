<?php shuffle($matches_datas); ?>

<ul>
	<?php for($i=0; $i<count($matches_datas); $i++): ?>

			<li class="draggable" drag data-id="a"><a href="#"><?php echo e($matches_datas[$i]['match_left']); ?></a></li>	
	<?php endfor; ?>
</ul>

<?php shuffle($matches_datas); ?>
	<ul class="ul-sc"> 
		<?php for($i=0; $i<count($matches_datas); $i++): ?>
				<li class="droppable" data-id="d"><a href="#"><?php echo e($matches_datas[$i]['match_right']); ?></a></li>
		<?php endfor; ?>
	</ul>

