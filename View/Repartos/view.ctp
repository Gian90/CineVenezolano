<div class="repartos view">
<h2><?php echo __('Reparto'); ?></h2>
	<dl>
		<dt><?php echo __('PERSONA ID'); ?></dt>
		<dd>
			<?php echo h($reparto['Reparto']['PERSONA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($reparto['Reparto']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REPARTO ID'); ?></dt>
		<dd>
			<?php echo h($reparto['Reparto']['REPARTO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REP PERSONAJE'); ?></dt>
		<dd>
			<?php echo h($reparto['Reparto']['REP_PERSONAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REP MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($reparto['Reparto']['REP_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reparto'), array('action' => 'edit', $reparto['Reparto']['REPARTO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reparto'), array('action' => 'delete', $reparto['Reparto']['REPARTO_ID']), array(), __('Are you sure you want to delete # %s?', $reparto['Reparto']['REPARTO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repartos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reparto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
