<div class="guiones view">
<h2><?php echo __('Guione'); ?></h2>
	<dl>
		<dt><?php echo __('TIPO CARGO ID'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['TIPO_CARGO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GUI TIPO'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['GUI_TIPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GUI OBRA'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['GUI_OBRA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GUI AUTOR OBRA'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['GUI_AUTOR_OBRA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIP CAR NOMBRE'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['TIP_CAR_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIP CAR MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($guione['Guione']['TIP_CAR_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guione'), array('action' => 'edit', $guione['Guione']['TIPO_CARGO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guione'), array('action' => 'delete', $guione['Guione']['TIPO_CARGO_ID']), array(), __('Are you sure you want to delete # %s?', $guione['Guione']['TIPO_CARGO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
