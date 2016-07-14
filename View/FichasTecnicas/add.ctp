<div class="fichasTecnicas form">
<?php echo $this->Form->create('FichasTecnica'); ?>
	<fieldset>
		<legend><?php echo __('Add Fichas Tecnica'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('PERSONA_ID');
		echo $this->Form->input('CASA_PRODUCTORA_ID');
		echo $this->Form->input('TIPO_CARGO_ID');
		echo $this->Form->input('FIC_TEC_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fichas Tecnicas'), array('action' => 'index')); ?></li>
	</ul>
</div>
