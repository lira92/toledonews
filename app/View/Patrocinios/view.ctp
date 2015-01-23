<div class="patrocinios view">
<h2><?php echo __('Patrocinio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patrocinio['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $patrocinio['Pagina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patrocinio['Menu']['titulo'], array('controller' => 'menus', 'action' => 'view', $patrocinio['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miniatura'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['miniatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Popup'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['popup']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patrocinio['Patrocinio']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>