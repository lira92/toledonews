<div class="recentes">
	<div class="lista_noticias_recentes" style="padding: 0px 10px;">
		
			<h1 style="color:<?php echo $Menu['Menu']['cor']; ?> ;" ><?PHP echo $Menu['Menu']['titulo']; ?></h1>
			
			<?PHP            
			$contador = 0;
			foreach ($Paginas_meio as $key => $Pagina) {
			   
			   
			  
			   echo '
				<div class="row">
				<div style="
					background-color:'. $Menu['Menu']['cor'].'; height:10px; width:280px;
					background-image: linear-gradient(to right, rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(to right, rgba(255,255,255,.3) 1px, transparent 1px);
					background-size: 50px 5px, 10px 30px;
					background-repeat: repeat-x;"></div>
					<a href="'. Router::url(array('controller'=>'paginas', 'action'=>'ver', $Pagina['Pagina']['id'] )) .'">
						<img src="app/webroot/img/paginas/'.$Pagina['Pagina']['src'].'">                    
						<strong>' . $Pagina['Pagina']['titulo']. '</strong><br />
						<span>'.substr( $Pagina['Pagina']['subtitulo'], 0, 130).'</span>
					</a>
				</div>
				';
				
			}    
			?>
			
	</div>	

</div>	

<div class="menos_recente">
		
	<div class="lista_noticias" >	
		<?PHP            
        foreach ($Paginas_lateral as $key => $Pagina) {
           echo '
			<div class="row">
				<div style="
					background-color:'. $Menu['Menu']['cor'].'; height:10px; width:280px;
					background-image: linear-gradient(to right, rgba(255,255,255,.3) 1px, transparent 1px);
					background-size: 5px 5px;
					margin-bottom: 10px;
					
					"></div>
				
					<a href="'. Router::url(array('controller'=>'paginas', 'action'=>'ver', $Pagina['Pagina']['id'] )) .'">
						<img src="app/webroot/img/paginas/'.$Pagina['Pagina']['src'].'">                    
						<strong>' . $Pagina['Pagina']['titulo']. '</strong><br />
						<span>'. substr( $Pagina['Pagina']['subtitulo'], 0, 100).'</span>
					</a>
				
			</div>
            ';
        }    
        ?>		
	</div>
</div>	