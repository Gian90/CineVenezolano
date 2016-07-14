<div class="casasProductoras view">
<h2><?php echo __('Casas Productora'); ?></h2>
	<dl>
		<dt><?php echo __('CASA PRODUCTORA ID'); ?></dt>
		<dd>
			<?php echo h($casasProductora['CasasProductora']['CASA_PRODUCTORA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAS PRO NOMBRE'); ?></dt>
		<dd>
			<?php echo h($casasProductora['CasasProductora']['CAS_PRO_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAS PRO MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($casasProductora['CasasProductora']['CAS_PRO_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Casas Productora'), array('action' => 'edit', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Casas Productora'), array('action' => 'delete', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID']), array(), __('Are you sure you want to delete # %s?', $casasProductora['CasasProductora']['CASA_PRODUCTORA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas Productoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casas Productora'), array('action' => 'add')); ?> </li>
	</ul>
</div>
