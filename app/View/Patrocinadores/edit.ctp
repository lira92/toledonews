<div class="patrocinadores form">
<?php echo $this->Form->create('Patrocinadore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patrocinadore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

