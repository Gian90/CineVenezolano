<div class="generos form">
<?php echo $this->Form->create('Genero'); ?>
	<fieldset>
		<legend><?php echo __('Add Genero'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Generos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
