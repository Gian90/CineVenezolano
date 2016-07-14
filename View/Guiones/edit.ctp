<div class="guiones form">
<?php echo $this->Form->create('Guione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guione'); ?></legend>
	<?php
		echo $this->Form->input('TIPO_CARGO_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Guione.TIPO_CARGO_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Guione.TIPO_CARGO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guiones'), array('action' => 'index')); ?></li>
	</ul>
</div>
