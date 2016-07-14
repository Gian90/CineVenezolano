<div class="tematicas form">
<?php echo $this->Form->create('Tematica'); ?>
	<fieldset>
		<legend><?php echo __('Add Tematica'); ?></legend>
	<?php
		echo $this->Form->input('TEM_NOMBRE');
		echo $this->Form->input('TEM_MOSTRAR');
		echo $this->Form->input('Pelicula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tematicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
