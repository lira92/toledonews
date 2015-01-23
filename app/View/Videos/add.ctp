<div class="videos form">
<?php echo $this->Form->create('Video'); ?>
	<fieldset>
		<legend><?php echo __('Add Video'); ?></legend>
	<?php
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
