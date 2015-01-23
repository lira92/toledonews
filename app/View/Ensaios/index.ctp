<div class="ensaios index">
	<h2><?php echo __('Ensaios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('src'); ?></th>
			<th><?php echo $this->Paginator->sort('creditos'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ensaios as $ensaio): ?>
	<tr>
		<td><?php echo h($ensaio['Ensaio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ensaio['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $ensaio['Menu']['id'])); ?>
		</td>
		<td><?php echo h($ensaio['Ensaio']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($ensaio['Ensaio']['src']); ?>&nbsp;</td>
		<td><?php echo h($ensaio['Ensaio']['creditos']); ?>&nbsp;</td>
		<td><?php echo h($ensaio['Ensaio']['modified']); ?>&nbsp;</td>
		<td><?php echo h($ensaio['Ensaio']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ensaio['Ensaio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ensaio['Ensaio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ensaio['Ensaio']['id']), array(), __('Are you sure you want to delete # %s?', $ensaio['Ensaio']['id'])); ?>
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

