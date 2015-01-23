<div class="patrocinios index">
	<h2><?php echo __('Patrocinios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pagina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('src'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('miniatura'); ?></th>
			<th><?php echo $this->Paginator->sort('popup'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($patrocinios as $patrocinio): ?>
	<tr>
		<td><?php echo h($patrocinio['Patrocinio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrocinio['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $patrocinio['Pagina']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrocinio['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $patrocinio['Menu']['id'])); ?>
		</td>
		<td><?php echo h($patrocinio['Patrocinio']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['src']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['url']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['miniatura']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['popup']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['modified']); ?>&nbsp;</td>
		<td><?php echo h($patrocinio['Patrocinio']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patrocinio['Patrocinio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patrocinio['Patrocinio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patrocinio['Patrocinio']['id']), array(), __('Are you sure you want to delete # %s?', $patrocinio['Patrocinio']['id'])); ?>
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
