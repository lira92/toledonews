<div class="comentarios index">
	<h2><?php echo __('Comentarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pagina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('autor'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('exibir'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comentarios as $comentario): ?>
	<tr>
		<td><?php echo h($comentario['Comentario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comentario['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $comentario['Pagina']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comentario['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $comentario['Menu']['id'])); ?>
		</td>
		<td><?php echo h($comentario['Comentario']['autor']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['comentario']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['data_cadastro']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['exibir']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['modified']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comentario['Comentario']['id']), array(), __('Are you sure you want to delete # %s?', $comentario['Comentario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

