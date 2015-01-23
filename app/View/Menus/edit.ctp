<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('titulo');
		$options = array(1 => 'Sim', 0 => 'Não');
		echo $this->Form->input('home',array('label'=>'Publicar na Página principal', 'options' => $options));
		echo $this->Form->input('cor',array("type"=>"color"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

