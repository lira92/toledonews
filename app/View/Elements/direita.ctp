<?php $patrocinios = $this->MenuSite->publicidadeDireita(); ?>
	<div style"float: right;">
<?php
	
	$diretorio = "app/webroot/img/patrocinio/fotos";
	//$diretorio = WWW_ROOT.$dir.DS;
foreach ($patrocinios as $key => $f):
		//print_r ($f);
		$src = $diretorio."/".$f["Patrocinio"]["src"];
		$titulo = $f["Patrocinio"]["titulo"];		
		echo "<div class='secao_direita'><img src='".$src."' alt='".$titulo."' width='200' ></img></div>";
	
		endforeach;
?>
</div>