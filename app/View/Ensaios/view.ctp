<div class="ensaios view">
<h2><?php echo __('Ensaio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ensaio['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $ensaio['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditos'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['creditos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ensaio['Ensaio']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

