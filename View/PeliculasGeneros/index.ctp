<div class="peliculasGeneros index">
	<h2><?php echo __('Peliculas Generos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('GENERO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PELICULA_GENERO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PEL_GEN_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($peliculasGeneros as $peliculasGenero): ?>
	<tr>
		<td><?php echo h($peliculasGenero['PeliculasGenero']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($peliculasGenero['PeliculasGenero']['GENERO_ID']); ?>&nbsp;</td>
		<td><?php echo h($peliculasGenero['PeliculasGenero']['PELICULA_GENERO_ID']); ?>&nbsp;</td>
		<td><?php echo h($peliculasGenero['PeliculasGenero']['PEL_GEN_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $peliculasGenero['PeliculasGenero']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $peliculasGenero['PeliculasGenero']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $peliculasGenero['PeliculasGenero']['id']), array(), __('Are you sure you want to delete # %s?', $peliculasGenero['PeliculasGenero']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Peliculas Genero'), array('action' => 'add')); ?></li>
	</ul>
</div>
