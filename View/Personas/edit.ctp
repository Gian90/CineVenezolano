<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('PERSONA_ID');
		echo $this->Form->input('PER_PRIMER_NOMBRE');
		echo $this->Form->input('PER_SEGUNDO_NOMBRE');
		echo $this->Form->input('PER_PRIMER_APELLIDO');
		echo $this->Form->input('PER_SEGUNDO_APELLIDO');
		echo $this->Form->input('PER_SEXO');
		echo $this->Form->input('PER_FECHA_NAC');
		echo $this->Form->input('PER_FECHA_FALLE');
		echo $this->Form->input('PER_RUTA_FOTO');
		echo $this->Form->input('PER_BIOGRAFIA');
		echo $this->Form->input('PER_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.PERSONA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.PERSONA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
	</ul>
</div>
