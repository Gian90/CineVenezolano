<div class="institutos form">
<?php echo $this->Form->create('Instituto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instituto'); ?></legend>
	<?php
		echo $this->Form->input('INSTITUTO_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instituto.INSTITUTO_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Instituto.INSTITUTO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?></li>
	</ul>
</div>
