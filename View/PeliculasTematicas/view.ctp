<div class="peliculasTematicas view">
<h2><?php echo __('Peliculas Tematica'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasTematica['PeliculasTematica']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEMATICA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasTematica['PeliculasTematica']['TEMATICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA TEMATICA ID'); ?></dt>
		<dd>
			<?php echo h($peliculasTematica['PeliculasTematica']['PELICULA_TEMATICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL TEM ID'); ?></dt>
		<dd>
			<?php echo h($peliculasTematica['PeliculasTematica']['PEL_TEM_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Peliculas Tematica'), array('action' => 'edit', $peliculasTematica['PeliculasTematica']['PELICULA_TEMATICA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Peliculas Tematica'), array('action' => 'delete', $peliculasTematica['PeliculasTematica']['PELICULA_TEMATICA_ID']), array(), __('Are you sure you want to delete # %s?', $peliculasTematica['PeliculasTematica']['PELICULA_TEMATICA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas Tematicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peliculas Tematica'), array('action' => 'add')); ?> </li>
	</ul>
</div>
