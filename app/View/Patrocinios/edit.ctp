<div class="patrocinios form">
<?php echo $this->Form->create('Patrocinio', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Patrocinio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pagina_id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('patrocinadore_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('src',array('type'=>'file'));
		echo $this->Form->input('url');
		echo $this->Form->input('miniatura');
		echo $this->Form->input('popup');
		echo $this->Form->input('local', array(
				'options' => array(1 => 'Lateral Direita', 2 => 'Meio home', 3, 4, 5),
				'empty' => 'escolha o local'
));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

