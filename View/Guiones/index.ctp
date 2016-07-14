<div class="guiones index">
	<h2><?php echo __('Guiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('TIPO_CARGO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('GUI_TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('GUI_OBRA'); ?></th>
			<th><?php echo $this->Paginator->sort('GUI_AUTOR_OBRA'); ?></th>
			<th><?php echo $this->Paginator->sort('TIP_CAR_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('TIP_CAR_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($guiones as $guione): ?>
	<tr>
		<td><?php echo h($guione['Guione']['TIPO_CARGO_ID']); ?>&nbsp;</td>
		<td><?php echo h($guione['Guione']['GUI_TIPO']); ?>&nbsp;</td>
		<td><?php echo h($guione['Guione']['GUI_OBRA']); ?>&nbsp;</td>
		<td><?php echo h($guione['Guione']['GUI_AUTOR_OBRA']); ?>&nbsp;</td>
		<td><?php echo h($guione['Guione']['TIP_CAR_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($guione['Guione']['TIP_CAR_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guione['Guione']['TIPO_CARGO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guione['Guione']['TIPO_CARGO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guione['Guione']['TIPO_CARGO_ID']), array(), __('Are you sure you want to delete # %s?', $guione['Guione']['TIPO_CARGO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guione'), array('action' => 'add')); ?></li>
	</ul>
</div>
