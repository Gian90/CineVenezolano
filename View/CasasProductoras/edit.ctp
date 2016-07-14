<div class="casasProductoras form">
<?php echo $this->Form->create('CasasProductora'); ?>
	<fieldset>
		<legend><?php echo __('Edit Casas Productora'); ?></legend>
	<?php
		echo $this->Form->input('CASA_PRODUCTORA_ID');
		echo $this->Form->input('CAS_PRO_NOMBRE');
		echo $this->Form->input('CAS_PRO_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CasasProductora.CASA_PRODUCTORA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CasasProductora.CASA_PRODUCTORA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Casas Productoras'), array('action' => 'index')); ?></li>
	</ul>
</div>
