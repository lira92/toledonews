<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('contador'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoria['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $categoria['Tipo']['id'])); ?>
		</td>
		<td><?php echo h($categoria['Categoria']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['contador']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['modified']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?>
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

