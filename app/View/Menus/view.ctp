<div class="menus view">
<h2><?php echo __('Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menu['ParentMenu']['titulo'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menu['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $menu['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('home'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Srcs'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['srcs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($menu['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pagina Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Autor'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Data Cadastro'); ?></th>
		<th><?php echo __('Exibir'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['pagina_id']; ?></td>
			<td><?php echo $comentario['menu_id']; ?></td>
			<td><?php echo $comentario['autor']; ?></td>
			<td><?php echo $comentario['comentario']; ?></td>
			<td><?php echo $comentario['data_cadastro']; ?></td>
			<td><?php echo $comentario['exibir']; ?></td>
			<td><?php echo $comentario['modified']; ?></td>
			<td><?php echo $comentario['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), array(), __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Contagens'); ?></h3>
	<?php if (!empty($menu['Contagen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th><?php echo __('Data Cadastro'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Contagen'] as $contagen): ?>
		<tr>
			<td><?php echo $contagen['id']; ?></td>
			<td><?php echo $contagen['menu_id']; ?></td>
			<td><?php echo $contagen['ip']; ?></td>
			<td><?php echo $contagen['data_cadastro']; ?></td>
			<td><?php echo $contagen['modified']; ?></td>
			<td><?php echo $contagen['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contagens', 'action' => 'view', $contagen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contagens', 'action' => 'edit', $contagen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contagens', 'action' => 'delete', $contagen['id']), array(), __('Are you sure you want to delete # %s?', $contagen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Ensaios'); ?></h3>
	<?php if (!empty($menu['Ensaio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Creditos'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Ensaio'] as $ensaio): ?>
		<tr>
			<td><?php echo $ensaio['id']; ?></td>
			<td><?php echo $ensaio['menu_id']; ?></td>
			<td><?php echo $ensaio['titulo']; ?></td>
			<td><?php echo $ensaio['src']; ?></td>
			<td><?php echo $ensaio['creditos']; ?></td>
			<td><?php echo $ensaio['modified']; ?></td>
			<td><?php echo $ensaio['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ensaios', 'action' => 'view', $ensaio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ensaios', 'action' => 'edit', $ensaio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ensaios', 'action' => 'delete', $ensaio['id']), array(), __('Are you sure you want to delete # %s?', $ensaio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($menu['ChildMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Srcs'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td><?php echo $childMenu['id']; ?></td>
			<td><?php echo $childMenu['parent_id']; ?></td>
			<td><?php echo $childMenu['lft']; ?></td>
			<td><?php echo $childMenu['rght']; ?></td>
			<td><?php echo $childMenu['tipo_id']; ?></td>
			<td><?php echo $childMenu['titulo']; ?></td>
			<td><?php echo $childMenu['src']; ?></td>
			<td><?php echo $childMenu['srcs']; ?></td>
			<td><?php echo $childMenu['modified']; ?></td>
			<td><?php echo $childMenu['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $childMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), array(), __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Paginas'); ?></h3>
	<?php if (!empty($menu['Pagina'])): ?>
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
	<?php foreach ($menu['Pagina'] as $pagina): ?>
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

</div>
<div class="related">
	<h3><?php echo __('Related Patrocinios'); ?></h3>
	<?php if (!empty($menu['Patrocinio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pagina Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Miniatura'); ?></th>
		<th><?php echo __('Popup'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Patrocinio'] as $patrocinio): ?>
		<tr>
			<td><?php echo $patrocinio['id']; ?></td>
			<td><?php echo $patrocinio['pagina_id']; ?></td>
			<td><?php echo $patrocinio['menu_id']; ?></td>
			<td><?php echo $patrocinio['titulo']; ?></td>
			<td><?php echo $patrocinio['src']; ?></td>
			<td><?php echo $patrocinio['url']; ?></td>
			<td><?php echo $patrocinio['miniatura']; ?></td>
			<td><?php echo $patrocinio['popup']; ?></td>
			<td><?php echo $patrocinio['modified']; ?></td>
			<td><?php echo $patrocinio['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patrocinios', 'action' => 'view', $patrocinio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patrocinios', 'action' => 'edit', $patrocinio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patrocinios', 'action' => 'delete', $patrocinio['id']), array(), __('Are you sure you want to delete # %s?', $patrocinio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
