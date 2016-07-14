<div class="peliculasTematicas form">
<?php echo $this->Form->create('PeliculasTematica'); ?>
	<fieldset>
		<legend><?php echo __('Add Peliculas Tematica'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('TEMATICA_ID');
		echo $this->Form->input('PEL_TEM_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Peliculas Tematicas'), array('action' => 'index')); ?></li>
	</ul>
</div>
