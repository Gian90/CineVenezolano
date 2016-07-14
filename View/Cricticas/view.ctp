<div class="cricticas view">
<h2><?php echo __('Crictica'); ?></h2>
	<dl>
		<dt><?php echo __('CRICTICA ID'); ?></dt>
		<dd>
			<?php echo h($crictica['Crictica']['CRICTICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($crictica['Crictica']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CRI DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($crictica['Crictica']['CRI_DESCRIPCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CRI MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($crictica['Crictica']['CRI_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Crictica'), array('action' => 'edit', $crictica['Crictica']['CRICTICA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Crictica'), array('action' => 'delete', $crictica['Crictica']['CRICTICA_ID']), array(), __('Are you sure you want to delete # %s?', $crictica['Crictica']['CRICTICA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cricticas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Crictica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Referencias'); ?></h3>
	<?php if (!empty($crictica['Referencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('REFERENCIA ID'); ?></th>
		<th><?php echo __('REF RUTA WEB'); ?></th>
		<th><?php echo __('REF DESCRIPCION'); ?></th>
		<th><?php echo __('REF MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($crictica['Referencia'] as $referencia): ?>
		<tr>
			<td><?php echo $referencia['REFERENCIA_ID']; ?></td>
			<td><?php echo $referencia['REF_RUTA_WEB']; ?></td>
			<td><?php echo $referencia['REF_DESCRIPCION']; ?></td>
			<td><?php echo $referencia['REF_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'referencias', 'action' => 'view', $referencia['REFERENCIA_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'referencias', 'action' => 'edit', $referencia['REFERENCIA_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'referencias', 'action' => 'delete', $referencia['REFERENCIA_ID']), array(), __('Are you sure you want to delete # %s?', $referencia['REFERENCIA_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
