<div class="paginas index">
	<h2><?php echo __('Paginas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('subtitulo'); ?></th>
			<th><?php echo $this->Paginator->sort('src'); ?></th>

			<th><?php echo $this->Paginator->sort('fonte'); ?></th>
			<th><?php echo $this->Paginator->sort('contador'); ?></th>
			<th><?php echo $this->Paginator->sort('slideshow'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fim'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paginas as $pagina): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($pagina['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $pagina['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pagina['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $pagina['Menu']['id'])); ?>
		</td>
		<td><?php echo h($pagina['Pagina']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($pagina['Pagina']['subtitulo']); ?>&nbsp;</td>
		<td><img src="app/webroot/img/paginas/<?php echo ($pagina['Pagina']['src']); ?>" height="80" width="80">
		

		<td><?php echo h($pagina['Pagina']['fonte']); ?>&nbsp;</td>
		<td><?php echo h($pagina['Pagina']['contador']); ?>&nbsp;</td>
		<td><?php echo h($pagina['Pagina']['slideshow']); ?>&nbsp;</td>
		<td><?php echo h($pagina['Pagina']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($pagina['Pagina']['fim']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pagina['Pagina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pagina['Pagina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pagina['Pagina']['id']), array(), __('Are you sure you want to delete # %s?', $pagina['Pagina']['id'])); ?>
			<br/><br/>
			<?php echo $this->Html->link(__('Imagens'), array('controller' => 'fotos', 'action' => 'add', $pagina['Pagina']['id'], $pagina['Pagina']['tipo_id'])); ?>
			<?php echo $this->Html->link(__('Videos'), array('controller' => 'videos','action' => 'add', $pagina['Pagina']['id'], $pagina['Pagina']['tipo_id'])); ?>
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