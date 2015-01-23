<div class="contagens index">
	<h2><?php echo __('Contagens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contagens as $contagen): ?>
	<tr>
		<td><?php echo h($contagen['Contagen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contagen['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $contagen['Menu']['id'])); ?>
		</td>
		<td><?php echo h($contagen['Contagen']['ip']); ?>&nbsp;</td>
		<td><?php echo h($contagen['Contagen']['data_cadastro']); ?>&nbsp;</td>
		<td><?php echo h($contagen['Contagen']['modified']); ?>&nbsp;</td>
		<td><?php echo h($contagen['Contagen']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contagen['Contagen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contagen['Contagen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contagen['Contagen']['id']), array(), __('Are you sure you want to delete # %s?', $contagen['Contagen']['id'])); ?>
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