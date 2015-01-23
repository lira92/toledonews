<?php
class MenuSiteHelper extends AppHelper {
	var $helpers = array('Session', 'Html');
	public function isMenu() {
		//$groupId = $this->Session->read('UserAuth.User.user_group_id');
		App::import("Model", "Menu");  
		$model = new Menu();  
		//$Menulist = $this->Menu->generateTreeList(array('Menu.id' => 27),null,null,"+");
		$Menulist = $model->find("threaded");
		/// inicia variavel
		$htmlMenu = '';
		$localId = $this->Session->read('localID');
		foreach ($Menulist as $key => $value):
			// aqui ele verifica qual o local EX: toledo, mercedes, e etc
			// isso ele pega na session que sera gravada no controller Pades function atualiza
			if($value['Menu']['id'] == $localId){
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
							array('controller' => 'pages', 'action' => 'noticiaCategoria', $valor['Menu']['id']),
							array('class' => 'menutopo', 'style' => 'color:'.$valor['Menu']['cor'])
						);
				$htmlMenu .= '<ul>';
					foreach ($valor['children'] as $idd => $result):
							$htmlMenu .= '<li>';
							$htmlMenu .=  	$this->Html->link( 
								$result['Menu']['titulo'],
								array('controller' => 'pages', 'action' => 'noticiaGenero', $result['Menu']['id']),
								array('class' => 'a.menutopo', 'style' => 'color: black;')
							);
							$htmlMenu .= '</li>';
					endforeach;
				$htmlMenu .= '</ul>
						</li>
						<li class="divisortopo"><img src="img/divisor_menu.png"></li>';
				endforeach;
$htmlMenu .= '		</ul>
				</div>
			</div>';
			}
		endforeach;
		return $htmlMenu;
		/// esquema do menu
		/* 
		<div class="menutopo">
				<div class="meio">
					<ul id="jsddm" class="menutopo">
						------------------------------------------
						<li class="menutopo">
							<a href="princigaleria.php?idmajor=1" class="menutopo" style="color:#2B2855 !important;">Notícias</a>
							<ul>
								<li>
									<a href="princigaleria.php?idcategoria=13">	Agronegócios</a>
								</li>
								<li>
									<a href="princigaleria.php?idcategoria=1">Brasil/Mundo</a>
								</li>
							</ul>
						</li>
						<li class="divisortopo"><img src="img/divisor_menu.png"></li>
						<li class="menutopo">
							<a href="princigaleria.php?idmajor=2" class="menutopo" style="color:#8E2728 !important;">Esportes</a>
							<ul style="visibility: hidden;">
								<li>
									<a href="princigaleria.php?idcategoria=20">	Basquetebol	</a>
								</li>
							</ul>
						</li>
						<li class="divisortopo"><img src="img/divisor_menu.png"></li>
										<a href="galeriavideo.php" class="menutopo" style="color:#8E2728 !important;"><li class="menutopo">
							Vídeos
						</li></a>
						----------------------------
					</ul>
				</div>
		</div>
		*/
	}
	public function publicidadeDireita() {
		//$menuId = $this->Session->read('UserAuth.User.user_group_id');
		//$paginaId = $this->Session->read('UserAuth.User.user_group_id');
		App::import("Model","Patrocinio");  
		$model = new Patrocinio();  
		$patrocinios = $model->find('all', array(
			//'conditions' => array('src' => null),
			//'fields' => array('src')
			//'order' => array('lft ASC') // or array('id ASC')
		));
		//$Menulist = $model->generateTreeList(null,null,null,"+");
		return $patrocinios;
	}
	public function bannerSite() {
		//$menuId = $this->Session->read('UserAuth.User.user_group_id');
		//$paginaId = $this->Session->read('UserAuth.User.user_group_id');
		App::import("Model","Pagina");  
		$model = new Pagina();  
		$banners = $model->find('all', array(
			'conditions' => array('Pagina.slideshow' => 1),
			//'fields' => array('src')
			'order' => array('Pagina.created ASC') // or array('id ASC')
		));
		//$Menulist = $model->generateTreeList(null,null,null,"+");
		return $banners;
	}
	public function isMenuLocal() {
		//$groupId = $this->Session->read('UserAuth.User.user_group_id');
		App::import("Model", "Menu");  
		$model = new Menu();  
		$Menulistlocal = $model->find('list', array(
			'conditions' => array('parent_id' => null),
			'fields' => array('titulo'),
			'order' => array('lft ASC') // or array('id ASC')
		));
		return $Menulistlocal;
	}
}