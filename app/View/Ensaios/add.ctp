<div class="ensaios form">
<?php echo $this->Form->create('Ensaio'); ?>
	<fieldset>
		<legend><?php echo __('Add Ensaio'); ?></legend>
	<?php
		echo $this->Form->input('menu_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('src');
		echo $this->Form->input('creditos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

