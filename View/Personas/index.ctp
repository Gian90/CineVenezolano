<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PERSONA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_PRIMER_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_SEGUNDO_NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_PRIMER_APELLIDO'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_SEGUNDO_APELLIDO'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_SEXO'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_FECHA_NAC'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_FECHA_FALLE'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_RUTA_FOTO'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_BIOGRAFIA'); ?></th>
			<th><?php echo $this->Paginator->sort('PER_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['PERSONA_ID']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_PRIMER_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_SEGUNDO_NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_PRIMER_APELLIDO']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_SEGUNDO_APELLIDO']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_SEXO']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_FECHA_NAC']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_FECHA_FALLE']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_RUTA_FOTO']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_BIOGRAFIA']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['PER_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $persona['Persona']['PERSONA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['PERSONA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $persona['Persona']['PERSONA_ID']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['PERSONA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
	</ul>
</div>
