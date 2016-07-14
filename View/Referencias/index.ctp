<div class="referencias index">
	<h2><?php echo __('Referencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('REFERENCIA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('REF_RUTA_WEB'); ?></th>
			<th><?php echo $this->Paginator->sort('REF_DESCRIPCION'); ?></th>
			<th><?php echo $this->Paginator->sort('REF_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($referencias as $referencia): ?>
	<tr>
		<td><?php echo h($referencia['Referencia']['REFERENCIA_ID']); ?>&nbsp;</td>
		<td><?php echo h($referencia['Referencia']['REF_RUTA_WEB']); ?>&nbsp;</td>
		<td><?php echo h($referencia['Referencia']['REF_DESCRIPCION']); ?>&nbsp;</td>
		<td><?php echo h($referencia['Referencia']['REF_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $referencia['Referencia']['REFERENCIA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $referencia['Referencia']['REFERENCIA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $referencia['Referencia']['REFERENCIA_ID']), array(), __('Are you sure you want to delete # %s?', $referencia['Referencia']['REFERENCIA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cricticas'), array('controller' => 'cricticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Crictica'), array('controller' => 'cricticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
