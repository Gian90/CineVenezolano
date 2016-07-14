<div class="peliculasReferencias view">
<h2><?php echo __('Peliculas Referencia'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasReferencia['PeliculasReferencia']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REFERENCIA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasReferencia['PeliculasReferencia']['REFERENCIA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA REFERENCIA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasReferencia['PeliculasReferencia']['PELICULA_REFERENCIA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL REF MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($peliculasReferencia['PeliculasReferencia']['PEL_REF_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Peliculas Referencia'), array('action' => 'edit', $peliculasReferencia['PeliculasReferencia']['PELICULA_REFERENCIA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Peliculas Referencia'), array('action' => 'delete', $peliculasReferencia['PeliculasReferencia']['PELICULA_REFERENCIA_ID']), array(), __('Are you sure you want to delete # %s?', $peliculasReferencia['PeliculasReferencia']['PELICULA_REFERENCIA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas Referencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peliculas Referencia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
