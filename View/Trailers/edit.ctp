<div class="trailers form">
<?php echo $this->Form->create('Trailer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trailer'); ?></legend>
	<?php
		echo $this->Form->input('TRAILER_ID');
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('TRA_RUTA_TRAILER');
		echo $this->Form->input('TRA_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Trailer.TRAILER_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Trailer.TRAILER_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trailers'), array('action' => 'index')); ?></li>
	</ul>
</div>
