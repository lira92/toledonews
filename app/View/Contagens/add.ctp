<div class="contagens form">
<?php echo $this->Form->create('Contagen'); ?>
	<fieldset>
		<legend><?php echo __('Add Contagen'); ?></legend>
	<?php
		echo $this->Form->input('menu_id');
		echo $this->Form->input('ip');
		echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

