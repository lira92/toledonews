<?php

App::uses('AppController', 'Controller');
/**
 * Paginas Controller
 *
 * @property Pagina $Pagina
 * @property PaginatorComponent $Paginator
 */
class PaginasController extends AppController {
    
    public $components = array('Paginator');
   
    public function index() {
        $this->Pagina->recursive = 0;
        $this->set('paginas', $this->Paginator->paginate());
    }
    
    public function view($id = null) {
        if (!$this->Pagina->exists($id)) {
            throw new NotFoundException(__('Invalid pagina'));
        }
        $options = array('conditions' => array('Pagina.' . $this->Pagina->primaryKey =>
                    $id));
        $this->set('pagina', $this->Pagina->find('first', $options));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Pagina->create();
            if ($this->Pagina->save($this->request->data)) {
                $this->Session->setFlash(__('The pagina has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The pagina could not be saved. Please, try again.'));
            }
        }
        $tipos = $this->Pagina->Tipo->find('list');
        //$menus = $this->Pagina->Menu->find('list');
        $parents[1] = "selecionar";
        $Menulist = $this->Pagina->Menu->generateTreeList(null, null, null, " - ");
        if ($Menulist) {
            foreach ($Menulist as $key => $value) {
                $parents[$key] = $value;
            }
        }
        $menus = $parents;
        $this->set(compact('tipos', 'menus'));
    }
    
    public function edit($id = null) {
        if (!$this->Pagina->exists($id)) {
            throw new NotFoundException(__('Invalid pagina'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Pagina->save($this->request->data)) {
                $this->Session->setFlash(__('The pagina has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The pagina could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Pagina.' . $this->Pagina->primaryKey =>
                        $id));
            $this->request->data = $this->Pagina->find('first', $options);
        }
        $tipos = $this->Pagina->Tipo->find('list');
        //$menus = $this->Pagina->Menu->find('list');
        $parents[1] = "selecionar";
        $Menulist = $this->Pagina->Menu->generateTreeList(null, null, null, " - ");
        if ($Menulist) {
            foreach ($Menulist as $key => $value) {
                $parents[$key] = $value;
            }
        }
        $menus = $parents;
        $this->set(compact('tipos', 'menus'));
    }
    
    public function delete($id = null) {
        $this->Pagina->id = $id;
        if (!$this->Pagina->exists()) {
            throw new NotFoundException(__('Invalid pagina'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Pagina->delete()) {
            $this->Session->setFlash(__('The pagina has been deleted.'));
        } else {
            $this->Session->setFlash(__('The pagina could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    
    public function ver($id = null) {            
		$Pagina = null;
		if ($id<>null) {
			
            if ($this->Pagina->exists($id)) {
				
				$this->Session->write('pagina_patrocinio_ID', $id);

				$Pagina = $this->Pagina->findById($id);
        	}
    	}
        
        $this->layout = 'site';
        $this->set(compact('Pagina'));
    }
}
