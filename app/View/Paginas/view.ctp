<div class="paginas view">
<h2><?php echo __('Pagina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pagina['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $pagina['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pagina['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $pagina['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitulo'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['subtitulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conteudo'); ?></dt>
		<dd>
			<?php echo ($pagina['Pagina']['conteudo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fonte'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['fonte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contador'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['contador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slideshow'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['slideshow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fim'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($pagina['Comentario'])): ?>
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
	<?php foreach ($pagina['Comentario'] as $comentario): ?>
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
	<h3><?php echo __('Related Patrocinios'); ?></h3>
	<?php if (!empty($pagina['Patrocinio'])): ?>
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
	<?php foreach ($pagina['Patrocinio'] as $patrocinio): ?>
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