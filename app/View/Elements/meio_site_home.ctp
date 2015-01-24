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
                <span style="font-size: 8pt; color: '.$Menu['Menu']['cor'].';">'.$Menu['Pagina']['titulo'].'</span>
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
    

<?PHP
/*
$meio = '';
$contador = 0;
$contMiniNot = 0;

foreach ($Menulist as $Menu):
    if($contador == 0)
    {
        $meio .= '<div class="mininoticia">';
    }

    $meio .= '<div class="secao_mininoticia">
                    <h2 style="font-size: 14pt; font-weight: bold; color: '.$Menu['Menu']['cor'].';">' . $Menu['Menu']['titulo']. '</h2>
                    <div style="background-color: '.$Menu['Menu']['cor'].'; height:3px; margin-bottom:4px;"></div>';
                    
                    $meio .= '<a href="'. Router::url(array('controller'=>'menus', 'action'=>'ver', $Menu['Menu']['id'] )) .'">';
                    $meio .= '<img src="app/webroot/img/paginas/'.$Menu['Pagina']['src'].'" style="height:52px; width:69px; float:left; margin-right:5px;">
                            <p style="font-size: 8pt; color: '.$Menu['Menu']['cor'].';">'.$Menu['Pagina']['titulo'].'</p></a>';
    $meio .= '</div>';
            
    $contador++;
    // aqui ele adiciona uma publicidade no meio das mini noticias
    if ($contador == 3){
    		$meio .= '</div><div class="secao_publicidade">publicidade deve ser slidershow</div>';
            $contador = 0;
    }
endforeach;

echo $meio;
/**
<div class="row">
<div class="col-lg-4">
  <h2>Safari bug warning!</h2>
  <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
</div>
<div class="col-lg-4">
  <h2>Heading</h2>
  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
</div>
<div class="col-lg-4">
  <h2>Heading</h2>
  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
</div>
</div>
      */
?>