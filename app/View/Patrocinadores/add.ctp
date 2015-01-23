<div class="patrocinadores form">
<?php echo $this->Form->create('Patrocinadore'); ?>
	<fieldset>
		<legend><?php echo __('Add Patrocinadore'); ?></legend>
	<?php
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

