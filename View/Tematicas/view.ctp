<div class="tematicas view">
<h2><?php echo __('Tematica'); ?></h2>
	<dl>
		<dt><?php echo __('TEMATICA ID'); ?></dt>
		<dd>
			<?php echo h($tematica['Tematica']['TEMATICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEM NOMBRE'); ?></dt>
		<dd>
			<?php echo h($tematica['Tematica']['TEM_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEM MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($tematica['Tematica']['TEM_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tematica'), array('action' => 'edit', $tematica['Tematica']['TEMATICA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tematica'), array('action' => 'delete', $tematica['Tematica']['TEMATICA_ID']), array(), __('Are you sure you want to delete # %s?', $tematica['Tematica']['TEMATICA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tematicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tematica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Peliculas'); ?></h3>
	<?php if (!empty($tematica['Pelicula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('PELICULA ID'); ?></th>
		<th><?php echo __('TRAILER ID'); ?></th>
		<th><?php echo __('PEL TITULO'); ?></th>
		<th><?php echo __('PEL ANO'); ?></th>
		<th><?php echo __('PEL SINOPSIS'); ?></th>
		<th><?php echo __('PEL RECAUDO ESTRENO'); ?></th>
		<th><?php echo __('PEL RECAUDO ACUMULADO'); ?></th>
		<th><?php echo __('PEL ESPECTADORESESTRENO'); ?></th>
		<th><?php echo __('PEL ESPECTADORES ACUMULADO'); ?></th>
		<th><?php echo __('PEL RUTA IMA CAPTURA'); ?></th>
		<th><?php echo __('PEL RUTA IMA POSTER'); ?></th>
		<th><?php echo __('PEL RUTA PELICULA'); ?></th>
		<th><?php echo __('PEL MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tematica['Pelicula'] as $pelicula): ?>
		<tr>
			<td><?php echo $pelicula['PELICULA_ID']; ?></td>
			<td><?php echo $pelicula['TRAILER_ID']; ?></td>
			<td><?php echo $pelicula['PEL_TITULO']; ?></td>
			<td><?php echo $pelicula['PEL_ANO']; ?></td>
			<td><?php echo $pelicula['PEL_SINOPSIS']; ?></td>
			<td><?php echo $pelicula['PEL_RECAUDO_ESTRENO']; ?></td>
			<td><?php echo $pelicula['PEL_RECAUDO_ACUMULADO']; ?></td>
			<td><?php echo $pelicula['PEL_ESPECTADORESESTRENO']; ?></td>
			<td><?php echo $pelicula['PEL_ESPECTADORES_ACUMULADO']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_IMA_CAPTURA']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_IMA_POSTER']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_PELICULA']; ?></td>
			<td><?php echo $pelicula['PEL_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'peliculas', 'action' => 'view', $pelicula['PELICULA_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'peliculas', 'action' => 'edit', $pelicula['PELICULA_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'peliculas', 'action' => 'delete', $pelicula['PELICULA_ID']), array(), __('Are you sure you want to delete # %s?', $pelicula['PELICULA_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
