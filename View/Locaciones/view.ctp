<div class="locaciones view">
<h2><?php echo __('Locacione'); ?></h2>
	<dl>
		<dt><?php echo __('LUGAR ID'); ?></dt>
		<dd>
			<?php echo h($locacione['Locacione']['LUGAR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($locacione['Locacione']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LOCACION ID'); ?></dt>
		<dd>
			<?php echo h($locacione['Locacione']['LOCACION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LOG MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($locacione['Locacione']['LOG_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacione'), array('action' => 'edit', $locacione['Locacione']['LOCACION_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacione'), array('action' => 'delete', $locacione['Locacione']['LOCACION_ID']), array(), __('Are you sure you want to delete # %s?', $locacione['Locacione']['LOCACION_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
