<div class="lugares index">
	<h2><?php echo __('Lugares'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('LUGAR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('_TABLE__PK'); ?></th>
			<th><?php echo $this->Paginator->sort('LUG_TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('LUG_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('LUG_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lugares as $lugare): ?>
	<tr>
		<td><?php echo h($lugare['Lugare']['LUGAR_ID']); ?>&nbsp;</td>
		<td><?php echo h($lugare['Lugare']['_TABLE__PK']); ?>&nbsp;</td>
		<td><?php echo h($lugare['Lugare']['LUG_TIPO']); ?>&nbsp;</td>
		<td><?php echo h($lugare['Lugare']['LUG_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($lugare['Lugare']['LUG_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lugare['Lugare']['LUGAR_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lugare['Lugare']['LUGAR_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lugare['Lugare']['LUGAR_ID']), array(), __('Are you sure you want to delete # %s?', $lugare['Lugare']['LUGAR_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lugare'), array('action' => 'add')); ?></li>
	</ul>
</div>
