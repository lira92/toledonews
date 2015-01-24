<div class="row lista_noticias">
    <?PHP
    //pr( $Menulist );
    $contador = 0;
    foreach ($Menulist as $key => $Menu) {
        echo '
        <div class="col-lg-4">
            <h2 style="color: '.$Menu['Menu']['cor'].'; border-color: '.$Menu['Menu']['cor'].';">' . $Menu['Menu']['titulo']. '</h2>
            <a href="'. Router::url(array('controller'=>'menus', 'action'=>'ver', $Menu['Menu']['id'] )) .'">
                <img src="app/webroot/img/paginas/'.$Menu['Pagina']['src'].'" style="height:52px; width:69px; float:left; margin-right:5px;">
                <span style="color: '.$Menu['Menu']['cor'].';">'.$Menu['Pagina']['titulo'].'</span>
            </a>
        </div>
        ';
        $contador++;
        
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
    }    
    ?>
</div>
<div class="clearfix visible-xs-block"></div>