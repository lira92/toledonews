<div class="fotos form">
<?php echo $this->Form->create('Foto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Foto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('pagina_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('endereco');
		echo $this->Form->input('site');
		echo $this->Form->input('descricao');
		//echo $this->Form->input('src');
		echo $this->Form->input('atividade');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

