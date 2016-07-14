<div class="tematicas form">
<?php echo $this->Form->create('Tematica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tematica'); ?></legend>
	<?php
		echo $this->Form->input('TEMATICA_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tematica.TEMATICA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tematica.TEMATICA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tematicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
