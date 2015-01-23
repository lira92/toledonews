<div class="contagens view">
<h2><?php echo __('Contagen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contagen['Contagen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contagen['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $contagen['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($contagen['Contagen']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cadastro'); ?></dt>
		<dd>
			<?php echo h($contagen['Contagen']['data_cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contagen['Contagen']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contagen['Contagen']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
