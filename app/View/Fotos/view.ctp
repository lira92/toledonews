<div class="fotos view">
<h2><?php echo __('Foto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foto['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $foto['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foto['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $foto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atividade'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['Atividade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cadastro'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['data_cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contador'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['contador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

