<div class="financiamientos index">
	<h2><?php echo __('Financiamientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('INSTITUTO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FINANCIAMIENTO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FIN_MONTO'); ?></th>
			<th><?php echo $this->Paginator->sort('FIN_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($financiamientos as $financiamiento): ?>
	<tr>
		<td><?php echo h($financiamiento['Financiamiento']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($financiamiento['Financiamiento']['INSTITUTO_ID']); ?>&nbsp;</td>
		<td><?php echo h($financiamiento['Financiamiento']['FINANCIAMIENTO_ID']); ?>&nbsp;</td>
		<td><?php echo h($financiamiento['Financiamiento']['FIN_MONTO']); ?>&nbsp;</td>
		<td><?php echo h($financiamiento['Financiamiento']['FIN_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID']), array(), __('Are you sure you want to delete # %s?', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Financiamiento'), array('action' => 'add')); ?></li>
	</ul>
</div>
