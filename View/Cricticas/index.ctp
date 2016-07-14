<div class="cricticas index">
	<h2><?php echo __('Cricticas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CRICTICA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CRI_DESCRIPCION'); ?></th>
			<th><?php echo $this->Paginator->sort('CRI_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cricticas as $crictica): ?>
	<tr>
		<td><?php echo h($crictica['Crictica']['CRICTICA_ID']); ?>&nbsp;</td>
		<td><?php echo h($crictica['Crictica']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($crictica['Crictica']['CRI_DESCRIPCION']); ?>&nbsp;</td>
		<td><?php echo h($crictica['Crictica']['CRI_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $crictica['Crictica']['CRICTICA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $crictica['Crictica']['CRICTICA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $crictica['Crictica']['CRICTICA_ID']), array(), __('Are you sure you want to delete # %s?', $crictica['Crictica']['CRICTICA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Crictica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
