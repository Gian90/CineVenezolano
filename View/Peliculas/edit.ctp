<div class="peliculas form">
<?php echo $this->Form->create('Pelicula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pelicula'); ?></legend>
	<?php
		echo $this->Form->input('PELICULA_ID');
		echo $this->Form->input('TRAILER_ID');
		echo $this->Form->input('PEL_TITULO');
		echo $this->Form->input('PEL_ANO');
		echo $this->Form->input('PEL_SINOPSIS');
		echo $this->Form->input('PEL_RECAUDO_ESTRENO');
		echo $this->Form->input('PEL_RECAUDO_ACUMULADO');
		echo $this->Form->input('PEL_ESPECTADORESESTRENO');
		echo $this->Form->input('PEL_ESPECTADORES_ACUMULADO');
		echo $this->Form->input('PEL_RUTA_IMA_CAPTURA');
		echo $this->Form->input('PEL_RUTA_IMA_POSTER');
		echo $this->Form->input('PEL_RUTA_PELICULA');
		echo $this->Form->input('PEL_MOSTRAR');
		echo $this->Form->input('Genero');
		echo $this->Form->input('Referencia');
		echo $this->Form->input('Tematica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pelicula.PELICULA_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pelicula.PELICULA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tematicas'), array('controller' => 'tematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tematica'), array('controller' => 'tematicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
