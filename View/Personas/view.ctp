<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('PERSONA ID'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PERSONA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER PRIMER NOMBRE'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_PRIMER_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER SEGUNDO NOMBRE'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_SEGUNDO_NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER PRIMER APELLIDO'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_PRIMER_APELLIDO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER SEGUNDO APELLIDO'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_SEGUNDO_APELLIDO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER SEXO'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_SEXO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER FECHA NAC'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_FECHA_NAC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER FECHA FALLE'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_FECHA_FALLE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER RUTA FOTO'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_RUTA_FOTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER BIOGRAFIA'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_BIOGRAFIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PER MOSTRAR'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['PER_MOSTRAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['PERSONA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['PERSONA_ID']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['PERSONA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
	</ul>
</div>
