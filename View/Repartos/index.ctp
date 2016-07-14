<div class="repartos index">
	<h2><?php echo __('Repartos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PERSONA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REPARTO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REP_PERSONAJE'); ?></th>
			<th><?php echo $this->Paginator->sort('REP_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($repartos as $reparto): ?>
	<tr>
		<td><?php echo h($reparto['Reparto']['PERSONA_ID']); ?>&nbsp;</td>
		<td><?php echo h($reparto['Reparto']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($reparto['Reparto']['REPARTO_ID']); ?>&nbsp;</td>
		<td><?php echo h($reparto['Reparto']['REP_PERSONAJE']); ?>&nbsp;</td>
		<td><?php echo h($reparto['Reparto']['REP_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reparto['Reparto']['REPARTO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reparto['Reparto']['REPARTO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reparto['Reparto']['REPARTO_ID']), array(), __('Are you sure you want to delete # %s?', $reparto['Reparto']['REPARTO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reparto'), array('action' => 'add')); ?></li>
	</ul>
</div>
