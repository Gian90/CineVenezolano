<div class="referencias form">
<?php echo $this->Form->create('Referencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Referencia'); ?></legend>
	<?php
		echo $this->Form->input('REF_RUTA_WEB');
		echo $this->Form->input('REF_DESCRIPCION');
		echo $this->Form->input('REF_MOSTRAR');
		echo $this->Form->input('Pelicula');
		echo $this->Form->input('Crictica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Referencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cricticas'), array('controller' => 'cricticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Crictica'), array('controller' => 'cricticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
