<div class="tipos form">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
