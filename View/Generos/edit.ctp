<div class="generos form">
<?php echo $this->Form->create('Genero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Genero'); ?></legend>
	<?php
		echo $this->Form->input('GENERO_ID');
		echo $this->Form->input('GEN_NOMBRE');
		echo $this->Form->input('GEN_MOSTRAR');
		echo $this->Form->input('Pelicula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Genero.GENERO_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Genero.GENERO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
