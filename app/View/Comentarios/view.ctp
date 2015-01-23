<div class="comentarios view">
<h2><?php echo __('Comentario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $comentario['Pagina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $comentario['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cadastro'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['data_cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exibir'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['exibir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
