<div class="financiamientos form">
<?php echo $this->Form->create('Financiamiento'); ?>
	<fieldset>
		<legend><?php echo __('Add Financiamiento'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('INSTITUTO_ID');
		echo $this->Form->input('FIN_MONTO');
		echo $this->Form->input('FIN_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Financiamientos'), array('action' => 'index')); ?></li>
	</ul>
</div>
