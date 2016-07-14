<div class="referenciasCricticas index">
	<h2><?php echo __('Referencias Cricticas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CRICTICA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REFERENCIA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REFERENCIA_CRITICA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REF_CRI_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($referenciasCricticas as $referenciasCrictica): ?>
	<tr>
		<td><?php echo h($referenciasCrictica['ReferenciasCrictica']['CRICTICA_ID']); ?>&nbsp;</td>
		<td><?php echo h($referenciasCrictica['ReferenciasCrictica']['REFERENCIA_ID']); ?>&nbsp;</td>
		<td><?php echo h($referenciasCrictica['ReferenciasCrictica']['REFERENCIA_CRITICA_ID']); ?>&nbsp;</td>
		<td><?php echo h($referenciasCrictica['ReferenciasCrictica']['REF_CRI_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $referenciasCrictica['ReferenciasCrictica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $referenciasCrictica['ReferenciasCrictica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $referenciasCrictica['ReferenciasCrictica']['id']), array(), __('Are you sure you want to delete # %s?', $referenciasCrictica['ReferenciasCrictica']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referencias Crictica'), array('action' => 'add')); ?></li>
	</ul>
</div>
