<div class="fichasTecnicas view">
<h2><?php echo __('Fichas Tecnica'); ?></h2>
	<dl>
		<dt><?php echo __('PELICULA ID'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['PELICULA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FICHA TECNICA ID'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PERSONA ID'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['PERSONA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CASA PRODUCTORA ID'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['CASA_PRODUCTORA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIPO CARGO ID'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['TIPO_CARGO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIC TEC MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($fichasTecnica['FichasTecnica']['FIC_TEC_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fichas Tecnica'), array('action' => 'edit', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fichas Tecnica'), array('action' => 'delete', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID']), array(), __('Are you sure you want to delete # %s?', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fichas Tecnicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fichas Tecnica'), array('action' => 'add')); ?> </li>
	</ul>
</div>
