<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><?php echo __('Add Comentario'); ?></legend>
	<?php
		echo $this->Form->input('pagina_id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('autor');
		echo $this->Form->input('comentario');
		echo $this->Form->input('data_cadastro');
		echo $this->Form->input('exibir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

