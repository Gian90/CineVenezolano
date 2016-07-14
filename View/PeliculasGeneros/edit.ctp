<div class="peliculasGeneros form">
<?php echo $this->Form->create('PeliculasGenero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Peliculas Genero'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('GENERO_ID');
		echo $this->Form->input('PELICULA_GENERO_ID');
		echo $this->Form->input('PEL_GEN_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PeliculasGenero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PeliculasGenero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas Generos'), array('action' => 'index')); ?></li>
	</ul>
</div>
