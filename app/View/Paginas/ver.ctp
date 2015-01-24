<div class="secao_miolo lista_noticias" style="padding: 0px 10px;">
    <div class="row">
    	<div class="col-sm-8 blog-main">
    		<div class="blog-post">
                <?PHP if ($Pagina) { ?>
                    
                    <h2 class="blog-post-title"><?PHP echo $Pagina['Pagina']['titulo']; ?></h2>
                    <?PHP echo $Pagina['Pagina']['conteudo']; ?>
                    
                <?PHP } else { ?>
        			<h2 class="blog-post-title">Ops!!!</h2>
                    <p>Ocorreu algum erro, ao carregar a p&aacute;gina.<br />Tente novamente mais tarde.</p>
                <?PHP } ?>
            </div>  
    		<!-- /.blog-post -->
    	</div>
    	<!-- /.blog-sidebar -->
    </div>
</div>