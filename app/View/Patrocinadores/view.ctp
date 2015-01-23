<div class="patrocinadores view">
<h2><?php echo __('Patrocinadore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patrocinadore['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $patrocinadore['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patrocinadore['Patrocinadore']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
