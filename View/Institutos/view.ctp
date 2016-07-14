<div class="institutos view">
<h2><?php echo __('Instituto'); ?></h2>
	<dl>
		<dt><?php echo __('INSTITUTO ID'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['INSTITUTO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INS TIPO'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['INS_TIPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INS NOMBRE'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['INS_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INS MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['INS_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instituto'), array('action' => 'edit', $instituto['Instituto']['INSTITUTO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instituto'), array('action' => 'delete', $instituto['Instituto']['INSTITUTO_ID']), array(), __('Are you sure you want to delete # %s?', $instituto['Instituto']['INSTITUTO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
