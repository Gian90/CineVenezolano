<div class="peliculasTematicas form">
<?php echo $this->Form->create('PeliculasTematica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Peliculas Tematica'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('TEMATICA_ID');
		echo $this->Form->input('PELICULA_TEMATICA_ID');
		echo $this->Form->input('PEL_TEM_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PeliculasTematica.PELICULA_TEMATICA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PeliculasTematica.PELICULA_TEMATICA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas Tematicas'), array('action' => 'index')); ?></li>
	</ul>
</div>
