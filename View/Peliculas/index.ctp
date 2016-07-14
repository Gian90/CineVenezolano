<div class="peliculas index">
	<h2><?php echo __('Peliculas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TRAILER_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_TITULO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_ANO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_SINOPSIS'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_RECAUDO_ESTRENO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_RECAUDO_ACUMULADO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_ESPECTADORESESTRENO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_ESPECTADORES_ACUMULADO'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_RUTA_IMA_CAPTURA'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_RUTA_IMA_POSTER'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_RUTA_PELICULA'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($peliculas as $pelicula): ?>
	<tr>
		<td><?php echo h($pelicula['Pelicula']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['TRAILER_ID']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_TITULO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_ANO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_SINOPSIS']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_RECAUDO_ESTRENO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_RECAUDO_ACUMULADO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_ESPECTADORESESTRENO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_ESPECTADORES_ACUMULADO']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_RUTA_IMA_CAPTURA']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_RUTA_IMA_POSTER']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_RUTA_PELICULA']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['PEL_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pelicula['Pelicula']['PELICULA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pelicula['Pelicula']['PELICULA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pelicula['Pelicula']['PELICULA_ID']), array(), __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['PELICULA_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tematicas'), array('controller' => 'tematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tematica'), array('controller' => 'tematicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
