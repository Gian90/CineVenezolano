<div class="referenciasCricticas view">
<h2><?php echo __('Referencias Crictica'); ?></h2>
	<dl>
		<dt><?php echo __('CRICTICA ID'); ?></dt>
		<dd>
			<?php echo h($referenciasCrictica['ReferenciasCrictica']['CRICTICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REFERENCIA ID'); ?></dt>
		<dd>
			<?php echo h($referenciasCrictica['ReferenciasCrictica']['REFERENCIA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REFERENCIA CRITICA ID'); ?></dt>
		<dd>
			<?php echo h($referenciasCrictica['ReferenciasCrictica']['REFERENCIA_CRITICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REF CRI MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($referenciasCrictica['ReferenciasCrictica']['REF_CRI_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referencias Crictica'), array('action' => 'edit', $referenciasCrictica['ReferenciasCrictica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referencias Crictica'), array('action' => 'delete', $referenciasCrictica['ReferenciasCrictica']['id']), array(), __('Are you sure you want to delete # %s?', $referenciasCrictica['ReferenciasCrictica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referencias Cricticas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referencias Crictica'), array('action' => 'add')); ?> </li>
	</ul>
</div>
