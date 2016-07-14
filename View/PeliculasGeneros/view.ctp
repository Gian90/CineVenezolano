<div class="peliculasGeneros view">
<h2><?php echo __('Peliculas Genero'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasGenero['PeliculasGenero']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GENERO ID'); ?></dt>
		<dd>
			<?php echo h($peliculasGenero['PeliculasGenero']['GENERO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA GENERO ID'); ?></dt>
		<dd>
			<?php echo h($peliculasGenero['PeliculasGenero']['PELICULA_GENERO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL GEN MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($peliculasGenero['PeliculasGenero']['PEL_GEN_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Peliculas Genero'), array('action' => 'edit', $peliculasGenero['PeliculasGenero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Peliculas Genero'), array('action' => 'delete', $peliculasGenero['PeliculasGenero']['id']), array(), __('Are you sure you want to delete # %s?', $peliculasGenero['PeliculasGenero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas Generos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peliculas Genero'), array('action' => 'add')); ?> </li>
	</ul>
</div>
