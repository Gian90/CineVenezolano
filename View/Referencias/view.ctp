<div class="referencias view">
<h2><?php echo __('Referencia'); ?></h2>
	<dl>
		<dt><?php echo __('REFERENCIA ID'); ?></dt>
		<dd>
			<?php echo h($referencia['Referencia']['REFERENCIA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REF RUTA WEB'); ?></dt>
		<dd>
			<?php echo h($referencia['Referencia']['REF_RUTA_WEB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REF DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($referencia['Referencia']['REF_DESCRIPCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REF MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($referencia['Referencia']['REF_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referencia'), array('action' => 'edit', $referencia['Referencia']['REFERENCIA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referencia'), array('action' => 'delete', $referencia['Referencia']['REFERENCIA_ID']), array(), __('Are you sure you want to delete # %s?', $referencia['Referencia']['REFERENCIA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cricticas'), array('controller' => 'cricticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Crictica'), array('controller' => 'cricticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Peliculas'); ?></h3>
	<?php if (!empty($referencia['Pelicula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('PELICULA ID'); ?></th>
		<th><?php echo __('TRAILER ID'); ?></th>
		<th><?php echo __('PEL TITULO'); ?></th>
		<th><?php echo __('PEL ANO'); ?></th>
		<th><?php echo __('PEL SINOPSIS'); ?></th>
		<th><?php echo __('PEL RECAUDO ESTRENO'); ?></th>
		<th><?php echo __('PEL RECAUDO ACUMULADO'); ?></th>
		<th><?php echo __('PEL ESPECTADORESESTRENO'); ?></th>
		<th><?php echo __('PEL ESPECTADORES ACUMULADO'); ?></th>
		<th><?php echo __('PEL RUTA IMA CAPTURA'); ?></th>
		<th><?php echo __('PEL RUTA IMA POSTER'); ?></th>
		<th><?php echo __('PEL RUTA PELICULA'); ?></th>
		<th><?php echo __('PEL MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($referencia['Pelicula'] as $pelicula): ?>
		<tr>
			<td><?php echo $pelicula['PELICULA_ID']; ?></td>
			<td><?php echo $pelicula['TRAILER_ID']; ?></td>
			<td><?php echo $pelicula['PEL_TITULO']; ?></td>
			<td><?php echo $pelicula['PEL_ANO']; ?></td>
			<td><?php echo $pelicula['PEL_SINOPSIS']; ?></td>
			<td><?php echo $pelicula['PEL_RECAUDO_ESTRENO']; ?></td>
			<td><?php echo $pelicula['PEL_RECAUDO_ACUMULADO']; ?></td>
			<td><?php echo $pelicula['PEL_ESPECTADORESESTRENO']; ?></td>
			<td><?php echo $pelicula['PEL_ESPECTADORES_ACUMULADO']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_IMA_CAPTURA']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_IMA_POSTER']; ?></td>
			<td><?php echo $pelicula['PEL_RUTA_PELICULA']; ?></td>
			<td><?php echo $pelicula['PEL_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'peliculas', 'action' => 'view', $pelicula['PELICULA_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'peliculas', 'action' => 'edit', $pelicula['PELICULA_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'peliculas', 'action' => 'delete', $pelicula['PELICULA_ID']), array(), __('Are you sure you want to delete # %s?', $pelicula['PELICULA_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cricticas'); ?></h3>
	<?php if (!empty($referencia['Crictica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CRICTICA ID'); ?></th>
		<th><?php echo __('PELICULA ID'); ?></th>
		<th><?php echo __('CRI DESCRIPCION'); ?></th>
		<th><?php echo __('CRI MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($referencia['Crictica'] as $crictica): ?>
		<tr>
			<td><?php echo $crictica['CRICTICA_ID']; ?></td>
			<td><?php echo $crictica['PELICULA_ID']; ?></td>
			<td><?php echo $crictica['CRI_DESCRIPCION']; ?></td>
			<td><?php echo $crictica['CRI_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cricticas', 'action' => 'view', $crictica['CRICTICA_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cricticas', 'action' => 'edit', $crictica['CRICTICA_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cricticas', 'action' => 'delete', $crictica['CRICTICA_ID']), array(), __('Are you sure you want to delete # %s?', $crictica['CRICTICA_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Crictica'), array('controller' => 'cricticas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
