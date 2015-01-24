<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	var $layout = 'site';
    
	public function home() {
		// depois q a função atualizar estiver funcionando aqui deve ser deletado;		
		///--------------------------------------------------------------------
		//$Menulist = $this->Menu->generateTreeList(array('Menu.id' => 27),null,null,"+");
        
        $this->Menu->recursive = -1;
		$Menulist = $this->Menu->find("all", array(
                                        'conditions' => array('Menu.home' => 1),
                                        'fields' => array('Menu.*', 'Pagina.*', 'COUNT(Pagina.id) AS contador'),
                                        'joins' => array( array(
                                                'table' => '(SELECT * FROM paginas ORDER BY id DESC)',
                                                'alias' => 'Pagina',
                                                'conditions'=> array('Menu.id=Pagina.menu_id')
                                        ) ),
                                        'group' => array('Menu.id'),
                                        'order' => array('Menu.id ASC')
        ));
        
		$slideshow = $this->Pagina->find('all', array('conditions' => array('slideshow' => 1)));
                
		$this->set('slideshow',$slideshow);
		$this->set('Menulist',$Menulist);	 
	}
    
	public function atualiza() {
	
		//essa function vai ser responsavel por alterar a sesseion do local 
		// coloquei um formulario no layout q chama essa function
		// não esta funcionando verificar a chamada do formulario no layout linha 205
		
		// a idéia é chamar essa function atualizar a session e dar um redirect para pagina inicial pages/home 
		// dessa forma as funções de menu e home rodão novamente e atualizão as noticias
		
		// se não der de usar o formulario do cake usar select em JS e atualizar a session e dar um redirect com JS
		// eu axo q já fiz uma gambiarra uma vez bem parecida mas não lembro mais 
	
	
		$this->layout = false;
		
		if ($this->request->is('post')) {
			$formulario = $this->request->data;
			debug($formulario);
			$this->Session->write('localID', $formulario['Atualiza']['local']);
		}else{
			//verifica se ja existe session
			if ($this->Session->valid('localID')) {
				/// não lembo oque eu ia fazer aqui dentro
			}else{
				// primeiro vamos trabalhar com padrão abrir o local Toledo id 27. depois pensamos em um esquema para apresentar noticias de todos locais
				// se o usuario não selecionar local nenhum.
				$this->Session->write('localID', 27);
			}
		}
		$this->redirect(array('controller' => 'pages'));
	}
	
}
