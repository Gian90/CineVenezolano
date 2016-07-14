<div class="referenciasCricticas form">
<?php echo $this->Form->create('ReferenciasCrictica'); ?>
	<fieldset>
		<legend><?php echo __('Add Referencias Crictica'); ?></legend>
	<?php
		echo $this->Form->input('CRICTICA_ID');
		echo $this->Form->input('REFERENCIA_ID');
		echo $this->Form->input('REFERENCIA_CRITICA_ID');
		echo $this->Form->input('REF_CRI_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Referencias Cricticas'), array('action' => 'index')); ?></li>
	</ul>
</div>
