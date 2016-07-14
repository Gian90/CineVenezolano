<div class="institutos form">
<?php echo $this->Form->create('Instituto'); ?>
	<fieldset>
		<legend><?php echo __('Add Instituto'); ?></legend>
	<?php
		echo $this->Form->input('INS_TIPO');
		echo $this->Form->input('INS_NOMBRE');
		echo $this->Form->input('INS_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?></li>
	</ul>
</div>
