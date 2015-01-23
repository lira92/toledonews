<div class="tipos view">
<h2><?php echo __('Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Categorias'); ?></h3>
	<?php if (!empty($tipo['Categoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Contador'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipo['Categoria'] as $categoria): ?>
		<tr>
			<td><?php echo $categoria['id']; ?></td>
			<td><?php echo $categoria['tipo_id']; ?></td>
			<td><?php echo $categoria['titulo']; ?></td>
			<td><?php echo $categoria['contador']; ?></td>
			<td><?php echo $categoria['modified']; ?></td>
			<td><?php echo $categoria['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorias', 'action' => 'view', $categoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorias', 'action' => 'edit', $categoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorias', 'action' => 'delete', $categoria['id']), array(), __('Are you sure you want to delete # %s?', $categoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Fotos'); ?></h3>
	<?php if (!empty($tipo['Foto'])): ?>
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
	<?php foreach ($tipo['Foto'] as $foto): ?>
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
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($tipo['Menu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Menus Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Srcs'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipo['Menu'] as $menu): ?>
		<tr>
			<td><?php echo $menu['id']; ?></td>
			<td><?php echo $menu['Parent_menus_id']; ?></td>
			<td><?php echo $menu['tipo_id']; ?></td>
			<td><?php echo $menu['titulo']; ?></td>
			<td><?php echo $menu['src']; ?></td>
			<td><?php echo $menu['srcs']; ?></td>
			<td><?php echo $menu['modified']; ?></td>
			<td><?php echo $menu['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $menu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $menu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $menu['id']), array(), __('Are you sure you want to delete # %s?', $menu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Paginas'); ?></h3>
	<?php if (!empty($tipo['Pagina'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Subtitulo'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Conteudo'); ?></th>
		<th><?php echo __('Fonte'); ?></th>
		<th><?php echo __('Contador'); ?></th>
		<th><?php echo __('Slideshow'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fim'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipo['Pagina'] as $pagina): ?>
		<tr>
			<td><?php echo $pagina['id']; ?></td>
			<td><?php echo $pagina['tipo_id']; ?></td>
			<td><?php echo $pagina['menu_id']; ?></td>
			<td><?php echo $pagina['titulo']; ?></td>
			<td><?php echo $pagina['subtitulo']; ?></td>
			<td><?php echo $pagina['src']; ?></td>
			<td><?php echo $pagina['conteudo']; ?></td>
			<td><?php echo $pagina['fonte']; ?></td>
			<td><?php echo $pagina['contador']; ?></td>
			<td><?php echo $pagina['slideshow']; ?></td>
			<td><?php echo $pagina['inicio']; ?></td>
			<td><?php echo $pagina['fim']; ?></td>
			<td><?php echo $pagina['modified']; ?></td>
			<td><?php echo $pagina['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'paginas', 'action' => 'view', $pagina['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'paginas', 'action' => 'edit', $pagina['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'paginas', 'action' => 'delete', $pagina['id']), array(), __('Are you sure you want to delete # %s?', $pagina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
