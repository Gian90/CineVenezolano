<div class="financiamientos view">
<h2><?php echo __('Financiamiento'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($financiamiento['Financiamiento']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INSTITUTO ID'); ?></dt>
		<dd>
			<?php echo h($financiamiento['Financiamiento']['INSTITUTO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FINANCIAMIENTO ID'); ?></dt>
		<dd>
			<?php echo h($financiamiento['Financiamiento']['FINANCIAMIENTO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIN MONTO'); ?></dt>
		<dd>
			<?php echo h($financiamiento['Financiamiento']['FIN_MONTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIN MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($financiamiento['Financiamiento']['FIN_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financiamiento'), array('action' => 'edit', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financiamiento'), array('action' => 'delete', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID']), array(), __('Are you sure you want to delete # %s?', $financiamiento['Financiamiento']['FINANCIAMIENTO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financiamientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financiamiento'), array('action' => 'add')); ?> </li>
	</ul>
</div>
