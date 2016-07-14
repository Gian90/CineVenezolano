<div class="peliculasReferencias form">
<?php echo $this->Form->create('PeliculasReferencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Peliculas Referencia'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('REFERENCIA_ID');
		echo $this->Form->input('PEL_REF_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Peliculas Referencias'), array('action' => 'index')); ?></li>
	</ul>
</div>
