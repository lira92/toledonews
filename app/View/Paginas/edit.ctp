<script type="text/javascript">
    var ckEditor = CKEDITOR.replace( 'texto' );
</script>
<div class="paginas form">
<?php echo $this->Form->create('Pagina',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Pagina'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('titulo',array('label'=>'Título'));
		echo $this->Form->input('subtitulo',array('label'=>'Subtítulo'));
		
		echo $this->Form->input('conteudo',array('label'=>'Conteúdo','class'=>'ckeditor','div'=>false));
		//echo $this->Form->input('conteudo');
		echo $this->Form->input('fonte',array('label'=>'Fonte / Autor'));
		//echo $this->Form->input('contador');
		$options = array(1 => 'Sim', 0 => 'Não');
		echo $this->Form->input('slideshow',array('label'=>'Publicar no Slide Show', 'options' => $options));
		echo $this->Form->input('src',array('type' => 'file','label'=>'Capa da notícia.'));
		echo $this->Form->input('inicio',array('label'=>'Data para entrar no ar.'));
		echo $this->Form->input('fim',array('label'=>'Data para sair do ar.'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


