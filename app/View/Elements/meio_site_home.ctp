<?PHP
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
?>        