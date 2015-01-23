<div class="patrocinadores index">
	<h2><?php echo __('Patrocinadores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('src'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($patrocinadores as $patrocinadore): ?>
	<tr>
		<td><?php echo h($patrocinadore['Patrocinadore']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrocinadore['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $patrocinadore['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($patrocinadore['Patrocinadore']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($patrocinadore['Patrocinadore']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($patrocinadore['Patrocinadore']['src']); ?>&nbsp;</td>
		<td><?php echo h($patrocinadore['Patrocinadore']['modified']); ?>&nbsp;</td>
		<td><?php echo h($patrocinadore['Patrocinadore']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patrocinadore['Patrocinadore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patrocinadore['Patrocinadore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patrocinadore['Patrocinadore']['id']), array(), __('Are you sure you want to delete # %s?', $patrocinadore['Patrocinadore']['id'])); ?>
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
