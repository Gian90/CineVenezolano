<div class="locaciones form">
<?php echo $this->Form->create('Locacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacione'); ?></legend>
	<?php
		echo $this->Form->input('LUGAR_ID');
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('LOCACION_ID');
		echo $this->Form->input('LOG_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locacione.LOCACION_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Locacione.LOCACION_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
