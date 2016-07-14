<div class="lugares view">
<h2><?php echo __('Lugare'); ?></h2>
	<dl>
		<dt><?php echo __('LUGAR ID'); ?></dt>
		<dd>
			<?php echo h($lugare['Lugare']['LUGAR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' TABLE  PK'); ?></dt>
		<dd>
			<?php echo h($lugare['Lugare']['_TABLE__PK']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LUG TIPO'); ?></dt>
		<dd>
			<?php echo h($lugare['Lugare']['LUG_TIPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LUG NOMBRE'); ?></dt>
		<dd>
			<?php echo h($lugare['Lugare']['LUG_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LUG MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($lugare['Lugare']['LUG_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lugare'), array('action' => 'edit', $lugare['Lugare']['LUGAR_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lugare'), array('action' => 'delete', $lugare['Lugare']['LUGAR_ID']), array(), __('Are you sure you want to delete # %s?', $lugare['Lugare']['LUGAR_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugare'), array('action' => 'add')); ?> </li>
	</ul>
</div>
