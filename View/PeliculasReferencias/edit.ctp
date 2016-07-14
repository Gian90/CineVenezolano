<div class="peliculasReferencias form">
<?php echo $this->Form->create('PeliculasReferencia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Peliculas Referencia'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('REFERENCIA_ID');
		echo $this->Form->input('PELICULA_REFERENCIA_ID');
		echo $this->Form->input('PEL_REF_MOSTRAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PeliculasReferencia.PELICULA_REFERENCIA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PeliculasReferencia.PELICULA_REFERENCIA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas Referencias'), array('action' => 'index')); ?></li>
	</ul>
</div>
