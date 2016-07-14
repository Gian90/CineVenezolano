<div class="institutos index">
	<h2><?php echo __('Institutos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('INSTITUTO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('INS_TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('INS_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('INS_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($institutos as $instituto): ?>
	<tr>
		<td><?php echo h($instituto['Instituto']['INSTITUTO_ID']); ?>&nbsp;</td>
		<td><?php echo h($instituto['Instituto']['INS_TIPO']); ?>&nbsp;</td>
		<td><?php echo h($instituto['Instituto']['INS_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($instituto['Instituto']['INS_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instituto['Instituto']['INSTITUTO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instituto['Instituto']['INSTITUTO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instituto['Instituto']['INSTITUTO_ID']), array(), __('Are you sure you want to delete # %s?', $instituto['Instituto']['INSTITUTO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Instituto'), array('action' => 'add')); ?></li>
	</ul>
</div>
