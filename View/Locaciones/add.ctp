<div class="locaciones form">
<?php echo $this->Form->create('Locacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacione'); ?></legend>
	<?php
		echo $this->Form->input('LUGAR_ID');
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('LOG_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
