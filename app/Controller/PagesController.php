<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	var $layout = 'site';
    
	public function home() {
		// depois q a função atualizar estiver funcionando aqui deve ser deletado;		
        $this->Session->write('menu_patrocinio_ID', null);
		$this->Session->write('pagina_patrocinio_ID', null);
		$this->Menu->recursive = 1;
		
		
		/*$Menulist = $this->Menu->find("all", array(
                                        'conditions' => array('Menu.home' => 1),
                                        'fields' => array('Menu.*', 'Pagina.*', 'COUNT(Pagina.id) AS contador'),
                                        'joins' => array( array(
                                                'table' => '(SELECT * FROM paginas  ORDER BY inicio DESC)',
                                                'alias' => 'Pagina',
                                                'conditions'=> array('Menu.id=Pagina.menu_id')
                                        ) ),
                                        'group' => array('Menu.id'),
                                        'order' => array('Pagina.inicio DESC')
        ));*/
        //$local_id = $this->Session->read('localID');
		$local_id = 27;
       	$id_MenuSite = $this->Menu->children($local_id); 
		$array_id_filhos = array(null);
		foreach ($id_MenuSite as $key => $Menu) {
			$array_id_filhos[$Menu['Menu']['id']] = $Menu['Menu']['id'];
		
		}
		$Menulist_home = $this->Pagina->find("all", array(
										'limit' => 18,
										'conditions' => array('Pagina.menu_id' => $array_id_filhos),
										'order' => array('inicio DESC')
		));

		$slideshow = $this->Pagina->find('all', array('conditions' => array('slideshow' => 1)));
        
		$publicidade_meio = $this->Patrocinio->find('all', array('conditions' => array('local' => 3)));

        $this->set('id_MenuSite',$id_MenuSite);
        $this->set('publicidade_meio',$publicidade_meio);
		$this->set('slideshow',$slideshow);
		$this->set('Menulist_home',$Menulist_home);	


		
	}
    
	
	
	
	
	
	
	
	
	public function atualiza() {
	
		$this->layout = false;
		
		if ($this->request->is('post')) {
			$formulario = $this->request->data;
			//debug($formulario);
		}else{
			//verifica se ja existe session
			if ($this->Session->valid('localID')) {
				/// $this->Session->write('localID', $formulario['Atualiza']['local']);
			}else{
				$this->Session->write('localID', null);
			}
		}
		$this->Session->write('localID', 29);
		
	}
	
}
