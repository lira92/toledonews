<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoria['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $categoria['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contador'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['contador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Fotos'); ?></h3>
	<?php if (!empty($categoria['Foto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Site'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Atividade'); ?></th>
		<th><?php echo __('Data Cadastro'); ?></th>
		<th><?php echo __('Contador'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Foto'] as $foto): ?>
		<tr>
			<td><?php echo $foto['id']; ?></td>
			<td><?php echo $foto['tipo_id']; ?></td>
			<td><?php echo $foto['categoria_id']; ?></td>
			<td><?php echo $foto['titulo']; ?></td>
			<td><?php echo $foto['telefone']; ?></td>
			<td><?php echo $foto['email']; ?></td>
			<td><?php echo $foto['endereco']; ?></td>
			<td><?php echo $foto['site']; ?></td>
			<td><?php echo $foto['descricao']; ?></td>
			<td><?php echo $foto['src']; ?></td>
			<td><?php echo $foto['Atividade']; ?></td>
			<td><?php echo $foto['data_cadastro']; ?></td>
			<td><?php echo $foto['contador']; ?></td>
			<td><?php echo $foto['modified']; ?></td>
			<td><?php echo $foto['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fotos', 'action' => 'view', $foto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fotos', 'action' => 'edit', $foto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), array(), __('Are you sure you want to delete # %s?', $foto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Related Patrocinadores'); ?></h3>
	<?php if (!empty($categoria['Patrocinadore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Patrocinadore'] as $patrocinadore): ?>
		<tr>
			<td><?php echo $patrocinadore['id']; ?></td>
			<td><?php echo $patrocinadore['categoria_id']; ?></td>
			<td><?php echo $patrocinadore['titulo']; ?></td>
			<td><?php echo $patrocinadore['descricao']; ?></td>
			<td><?php echo $patrocinadore['src']; ?></td>
			<td><?php echo $patrocinadore['modified']; ?></td>
			<td><?php echo $patrocinadore['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patrocinadores', 'action' => 'view', $patrocinadore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patrocinadores', 'action' => 'edit', $patrocinadore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patrocinadores', 'action' => 'delete', $patrocinadore['id']), array(), __('Are you sure you want to delete # %s?', $patrocinadore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Videos'); ?></h3>
	<?php if (!empty($categoria['Video'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Video'] as $video): ?>
		<tr>
			<td><?php echo $video['id']; ?></td>
			<td><?php echo $video['categoria_id']; ?></td>
			<td><?php echo $video['titulo']; ?></td>
			<td><?php echo $video['descricao']; ?></td>
			<td><?php echo $video['src']; ?></td>
			<td><?php echo $video['modified']; ?></td>
			<td><?php echo $video['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videos', 'action' => 'view', $video['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videos', 'action' => 'edit', $video['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videos', 'action' => 'delete', $video['id']), array(), __('Are you sure you want to delete # %s?', $video['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
