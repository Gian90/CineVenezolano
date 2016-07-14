<div class="trailers view">
<h2><?php echo __('Trailer'); ?></h2>
	<dl>
		<dt><?php echo __('TRAILER ID'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['TRAILER_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TRA RUTA TRAILER'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['TRA_RUTA_TRAILER']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TRA MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['TRA_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trailer'), array('action' => 'edit', $trailer['Trailer']['TRAILER_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trailer'), array('action' => 'delete', $trailer['Trailer']['TRAILER_ID']), array(), __('Are you sure you want to delete # %s?', $trailer['Trailer']['TRAILER_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trailers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trailer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
