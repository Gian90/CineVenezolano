<div class="cricticas form">
<?php echo $this->Form->create('Crictica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Crictica'); ?></legend>
	<?php
		echo $this->Form->input('CRICTICA_ID');
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('CRI_DESCRIPCION');
		echo $this->Form->input('CRI_MOSTRAR');
		echo $this->Form->input('Referencia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Crictica.CRICTICA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Crictica.CRICTICA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cricticas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
