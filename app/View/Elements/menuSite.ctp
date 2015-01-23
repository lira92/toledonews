<?php //echo $this->MenuSite->isMenu(); ?>
	
<?PHP
    $htmlMenu = '';
foreach ($MenuSite as $key => $value):
	// aqui ele verifica qual o local EX: toledo, mercedes, e etc
	// isso ele pega na session que sera gravada no controller Pades function atualiza
		// tendo o local vamos montar o menu com os generos das noticias daquele local
$htmlMenu .='<div class="menutopo">
		<div class="meio">
			<ul id="jsddm" class="menutopo">';
		foreach ($value['children'] as $chave => $valor):
			//entra no primeiro nivel desconsiderando o local q é o primeiro 
			//
$htmlMenu .= '	<li class="menutopo">';
$htmlMenu .=  	$this->Html->link( 
					$valor['Menu']['titulo'],
					array('controller' => 'menus', 'action' => 'ver', $valor['Menu']['id']),
					array('class' => 'menutopo', 'style' => 'color:'.$valor['Menu']['cor'])
				);
		$htmlMenu .= '<ul>';
			foreach ($valor['children'] as $idd => $result):
					$htmlMenu .= '<li>';
					$htmlMenu .=  	$this->Html->link( 
						$result['Menu']['titulo'],
						array('controller' => 'menus', 'action' => 'ver', $result['Menu']['id']),
						array('class' => 'a.menutopo', 'style' => 'color: black;')
					);
					$htmlMenu .= '</li>';
			endforeach;
		$htmlMenu .= '</ul>
				</li>';
		endforeach;
$htmlMenu .= '		</ul>
		</div>
	</div>';
endforeach;

echo $htmlMenu;
?>

