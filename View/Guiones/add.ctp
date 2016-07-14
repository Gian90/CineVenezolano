<div class="guiones form">
<?php echo $this->Form->create('Guione'); ?>
	<fieldset>
		<legend><?php echo __('Add Guione'); ?></legend>
	<?php
		echo $this->Form->input('GUI_TIPO');
		echo $this->Form->input('GUI_OBRA');
		echo $this->Form->input('GUI_AUTOR_OBRA');
		echo $this->Form->input('TIP_CAR_NOMBRE');
		echo $this->Form->input('TIP_CAR_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guiones'), array('action' => 'index')); ?></li>
	</ul>
</div>
