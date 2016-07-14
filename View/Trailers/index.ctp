<div class="trailers index">
	<h2><?php echo __('Trailers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('TRAILER_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TRA_RUTA_TRAILER'); ?></th>
			<th><?php echo $this->Paginator->sort('TRA_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($trailers as $trailer): ?>
	<tr>
		<td><?php echo h($trailer['Trailer']['TRAILER_ID']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['TRA_RUTA_TRAILER']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['TRA_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trailer['Trailer']['TRAILER_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trailer['Trailer']['TRAILER_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trailer['Trailer']['TRAILER_ID']), array(), __('Are you sure you want to delete # %s?', $trailer['Trailer']['TRAILER_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Trailer'), array('action' => 'add')); ?></li>
	</ul>
</div>
