<div class="lugares form">
<?php echo $this->Form->create('Lugare'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lugare'); ?></legend>
	<?php
		echo $this->Form->input('LUGAR_ID');
		echo $this->Form->input('_TABLE__PK');
		echo $this->Form->input('LUG_TIPO');
		echo $this->Form->input('LUG_NOMBRE');
		echo $this->Form->input('LUG_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lugare.LUGAR_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Lugare.LUGAR_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lugares'), array('action' => 'index')); ?></li>
	</ul>
</div>