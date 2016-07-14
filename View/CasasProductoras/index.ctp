<div class="casasProductoras index">
	<h2><?php echo __('Casas Productoras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CASA_PRODUCTORA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CAS_PRO_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('CAS_PRO_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($casasProductoras as $casasProductora): ?>
	<tr>
		<td><?php echo h($casasProductora['CasasProductora']['CASA_PRODUCTORA_ID']); ?>&nbsp;</td>
		<td><?php echo h($casasProductora['CasasProductora']['CAS_PRO_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($casasProductora['CasasProductora']['CAS_PRO_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID']), array(), __('Are you sure you want to delete # %s?', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Casas Productora'), array('action' => 'add')); ?></li>
	</ul>
</div>
