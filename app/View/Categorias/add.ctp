<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria'); ?></legend>
	<?php
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('contador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

