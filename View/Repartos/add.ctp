<div class="repartos form">
<?php echo $this->Form->create('Reparto'); ?>
	<fieldset>
		<legend><?php echo __('Add Reparto'); ?></legend>
	<?php
		echo $this->Form->input('PERSONA_ID');
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('REP_PERSONAJE');
		echo $this->Form->input('REP_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Repartos'), array('action' => 'index')); ?></li>
	</ul>
</div>
