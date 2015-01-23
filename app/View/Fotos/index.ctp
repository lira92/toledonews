<div class="fotos index">
	<h2><?php echo __('Fotos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('site'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('src'); ?></th>
			<th><?php echo $this->Paginator->sort('Atividade'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('contador'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fotos as $foto): ?>
	<tr>
		<td><?php echo h($foto['Foto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foto['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $foto['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($foto['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $foto['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($foto['Foto']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['email']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['site']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['src']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['Atividade']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['data_cadastro']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['contador']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['modified']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foto['Foto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foto['Foto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foto['Foto']['id']), array(), __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?>
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
