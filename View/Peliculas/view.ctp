<div class="peliculas view">
<h2><?php echo __('Pelicula'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TRAILER ID'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['TRAILER_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL TITULO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_TITULO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL ANO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_ANO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL SINOPSIS'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_SINOPSIS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL RECAUDO ESTRENO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_RECAUDO_ESTRENO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL RECAUDO ACUMULADO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_RECAUDO_ACUMULADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL ESPECTADORESESTRENO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_ESPECTADORESESTRENO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL ESPECTADORES ACUMULADO'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_ESPECTADORES_ACUMULADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL RUTA IMA CAPTURA'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_RUTA_IMA_CAPTURA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL RUTA IMA POSTER'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_RUTA_IMA_POSTER']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL RUTA PELICULA'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_RUTA_PELICULA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PEL MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['PEL_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pelicula'), array('action' => 'edit', $pelicula['Pelicula']['PELICULA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pelicula'), array('action' => 'delete', $pelicula['Pelicula']['PELICULA_ID']), array(), __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['PELICULA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias'), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencia'), array('controller' => 'referencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tematicas'), array('controller' => 'tematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tematica'), array('controller' => 'tematicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Generos'); ?></h3>
	<?php if (!empty($pelicula['Genero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('GENERO ID'); ?></th>
		<th><?php echo __('GEN NOMBRE'); ?></th>
		<th><?php echo __('GEN MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['Genero'] as $genero): ?>
		<tr>
			<td><?php echo $genero['GENERO_ID']; ?></td>
			<td><?php echo $genero['GEN_NOMBRE']; ?></td>
			<td><?php echo $genero['GEN_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'generos', 'action' => 'view', $genero['GENERO_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'generos', 'action' => 'edit', $genero['GENERO_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'generos', 'action' => 'delete', $genero['GENERO_ID']), array(), __('Are you sure you want to delete # %s?', $genero['GENERO_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Referencias'); ?></h3>
	<?php if (!empty($pelicula['Referencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('REFERENCIA ID'); ?></th>
		<th><?php echo __('REF RUTA WEB'); ?></th>
		<th><?php echo __('REF DESCRIPCION'); ?></th>
		<th><?php echo __('REF MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['Referencia'] as $referencia): ?>
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
<div class="related">
	<h3><?php echo __('Related Tematicas'); ?></h3>
	<?php if (!empty($pelicula['Tematica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('TEMATICA ID'); ?></th>
		<th><?php echo __('TEM NOMBRE'); ?></th>
		<th><?php echo __('TEM MOSTRAR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['Tematica'] as $tematica): ?>
		<tr>
			<td><?php echo $tematica['TEMATICA_ID']; ?></td>
			<td><?php echo $tematica['TEM_NOMBRE']; ?></td>
			<td><?php echo $tematica['TEM_MOSTRAR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tematicas', 'action' => 'view', $tematica['TEMATICA_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tematicas', 'action' => 'edit', $tematica['TEMATICA_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tematicas', 'action' => 'delete', $tematica['TEMATICA_ID']), array(), __('Are you sure you want to delete # %s?', $tematica['TEMATICA_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tematica'), array('controller' => 'tematicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
