<div class="generos index">
	<h2><?php echo __('Generos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('GENERO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('GEN_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('GEN_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($generos as $genero): ?>
	<tr>
		<td><?php echo h($genero['Genero']['GENERO_ID']); ?>&nbsp;</td>
		<td><?php echo h($genero['Genero']['GEN_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($genero['Genero']['GEN_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $genero['Genero']['GENERO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $genero['Genero']['GENERO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $genero['Genero']['GENERO_ID']), array(), __('Are you sure you want to delete # %s?', $genero['Genero']['GENERO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Genero'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
