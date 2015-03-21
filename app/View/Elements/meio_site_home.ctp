

<div class="home_recente">
    <?PHP
    //pr( $Menulist_home);
    $contador = 0;
	$meio = 1;
	$id_publicado = array(0);
    foreach ($Menulist_home as $key => $Menu) {

			
			echo '
				<div class="lista_noticias_home_recentes">
					<div class="row">
						<div style="
							background-color:'. $Menu['Menu']['cor'].'; height:10px; width:280px;
							background-image: linear-gradient(to right, rgba(255,255,255,.3) 1px, transparent 1px);
							background-size: 5px 5px;
							margin-bottom: 10px;
							
							"></div>
						<h2 style="color: '.$Menu['Menu']['cor'].'; border-color: '.$Menu['Menu']['cor'].';">' . $Menu['Menu']['titulo']. '</h2>
						
						<a href="'. Router::url(array('controller'=>'menus', 'action'=>'ver', $Menu['Menu']['id'] )) .'">
							<img src="app/webroot/img/paginas/'.$Menu['Pagina']['src'].'" style="height:52px; width:69px; float:left; margin-right:5px;">
							<span style="color: '.$Menu['Menu']['cor'].';">'.$Menu['Pagina']['titulo'].'</span>
						</a>
					</div>
				</div>
				
				
			';
			$contador++;
			
			
			
			if ($contador==6) {
				$contador=0;
				
				
				
				
				echo '<div class="publicidade">';
					$controla_img_w = 921;
					
					foreach ($publicidade_meio as $k => $publicidade) {
						//obtem o tamanho da imageme tallsss....
						$endImg =  "http://".$_SERVER['SERVER_NAME']."/toledonews/app/webroot/img/patrocinio/fotos/".$publicidade["Patrocinio"]["src"];
						$endImg = str_replace(" ", "%20", $endImg);
						$imnfo = getimagesize($endImg);
						$img_w = $imnfo[0];	  // largura
						$img_h = $imnfo[1];	  // altura
						$img_f = $imnfo[2];	  // extensão
						$img_m = $imnfo['mime']; // mime-type
					
						if(in_array($publicidade["Patrocinio"]["id"], $id_publicado)){
							
						}else{
							if($controla_img_w >= ($img_w + 5)){
								echo '<a href="'. $publicidade["Patrocinio"]["url"].'">
									<img src="app/webroot/img/patrocinio/fotos/'.$publicidade["Patrocinio"]["src"].'" style=" float:left; margin-right:5px;">
									
								</a>';
								$controla_img_w = $controla_img_w - ($img_w + 5);
								echo $controla_img_w;
								$id_publicado[$publicidade["Patrocinio"]["id"]] = $publicidade["Patrocinio"]["id"];
							}else{
								break;
							}
							
						}	

					}
				
				echo '</div>';
				$meio++;
			}
		
    }    
    ?>
	<div style="
						background-color:silver; height:10px; width:920px;
						background-image: linear-gradient(to right, rgba(255,255,255,.3) 1px, transparent 1px);
						background-size: 5px 5px;
						margin-bottom: 10px;
						float: left;
						"></div>
	<div class="lista_noticias_home_recentes">
		<div style="margin-left:30px; margin-right: 20px; width:280px; height:200px; float:left;">
			<h2 style="color: black;"> Cinema </h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 36 ));?>" >
				<img src="app/webroot/img/home/cinema.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
		<div  style=" margin-right: 20px; width:280px; height:200px; float:left;">
			<h2 style="color: black;"> Horoscopo </h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 32 ));?>" >
				<img src="app/webroot/img/home/horoscopo.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
		<div style="width:280px; height:200px; float:left;">
			<h2 style="color: black;"> Humor </h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 34 ));?>" >
				<img src="app/webroot/img/home/humor.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
		<div style="margin-left:30px; margin-right: 20px; width:280px; height:180px; float:left;">
			<h2 style="color: black;"> Loterias </h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 38 ));?>" >
				<img src="app/webroot/img/home/loterias.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
		<div style=" margin-right: 20px; width:280px; height:180px; float:left;">
			<h2 style="color: black;"> Receitas e Dietas</h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 39 ));?>" >
				<img src="app/webroot/img/home/receitas.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
		<div style="width:280px; height:180px; float:left;">
			<h2 style="color: black;"> Previsão do Tempo </h2>
			<a href = "<?php echo Router::url(array('controller'=>'menus', 'action'=>'ver', 37 ));?>" >
				<img src="app/webroot/img/home/tempo.jpg" style="height:120px; width:260px; float:left; margin-right:5px;">
			</a>
		</div>
	</div>
</div>

<div style="
						background-color:silver; height:10px; width:920px;
						background-image: linear-gradient(to right, rgba(255,255,255,.3) 1px, transparent 1px);
						background-size: 5px 5px;
						margin-bottom: 10px;
						float: left;
						"></div>
<div class="clearfix visible-xs-block"></div>


