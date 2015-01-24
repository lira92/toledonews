<div class="secao_miolo lista_noticias" style="padding: 0px 10px;">
    
        <h1><?PHP echo $Menu['Menu']['titulo']; ?></h1>
            
        <?PHP            
        $contador = 0;
        foreach ($Paginas as $key => $Pagina) {
            
            echo '
    <div class="row">
        <div class="col-lg-12">
            <a href="'. Router::url(array('controller'=>'paginas', 'action'=>'ver', $Pagina['Pagina']['id'] )) .'">
                <img src="app/webroot/img/paginas/'.$Pagina['Pagina']['src'].'">                    
                <strong>' . $Pagina['Pagina']['titulo']. '</strong><br />
                <span>'.$Pagina['Pagina']['subtitulo'].'</span>
            </a>
        </div>
    </div>
            ';
            $contador++;
            
            //pr( $Pagina );
            /*            
            if ($contador==3) {
                $contador=0;
                echo '
                <div class="col-lg-12">
                    <div class="publicidade">
                        <h2>Publicidade</h2>
                    </div>
                </div>
                ';
            }
            */
        }    
        ?>
</div>