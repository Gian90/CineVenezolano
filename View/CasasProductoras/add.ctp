<div class="casasProductoras form">
<?php echo $this->Form->create('CasasProductora'); ?>
	<fieldset>
		<legend><?php echo __('Add Casas Productora'); ?></legend>
	<?php
		echo $this->Form->input('CAS_PRO_NOMBRE');
		echo $this->Form->input('CAS_PRO_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Casas Productoras'), array('action' => 'index')); ?></li>
	</ul>
</div>
