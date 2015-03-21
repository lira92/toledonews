<div class="meio">
	<div style="float:left;">
    
		<!-- formulario q atualiza a session -->
		<?php 
		$options = $this->MenuSite->isMenuLocal();
        echo $this->Form->create('Atualiza', array('url' => 'atualiza')); ?>
		<table style="width:100%">
			<tr>
				<td>
                    <?php echo $this->Form->input('local',array('label'=>false,'options' => $options)); ?>
				</td>
				<td>
                    <?php echo $this->Form->end('IR', array('style' => 'height:15px;')); ?>
				</td>
			</tr>
		</table>
	</div>
	
	
	<a href="princigaleria.php?idcategoria=50">
        <img src="<?PHP echo $this->webroot; ?>img/horoscopo.png" class="horoscopo" style="margin-right:150px; border-left:0px;"/>
    </a>
	<a href="princigaleria.php?idcategoria=52">
        <img src="<?PHP echo $this->webroot; ?>img/clima_tempo.png" class="horoscopo" />
    </a>
</div>