<?php

App::uses('AppController', 'Controller');
class MenusController extends AppController {
    
    public $components = array('Paginator');
    
    public function index() {
        $Menulist = $this->Menu->generateTreeList(null, null, null, "&nbsp;&nbsp;-&nbsp;&nbsp;");
        $this->set('Menulist', $Menulist);
        $menus = $this->Menu->find('list', array('fields' => 'cor'));
        $this->set(compact('menus'));
    }
    
    function add() {
        if (!empty($this->data)) {
            $this->Menu->save($this->data);
            $this->redirect(array('action' => 'index'));
        } else {
            $parents[null] = "[ Principal ]";
            $Menulist = $this->Menu->generateTreeList(null, null, null, " - ");
            if ($Menulist) {
                foreach ($Menulist as $key => $value) {
                    $parents[$key] = $value;
                }
                $this->set(compact('parents'));
                $tipos = $this->Menu->Tipo->find('list');
                $this->set(compact('tipos'));
            }
        }
    }
    
    function edit($id = null) {
        if (!empty($this->data)) {
            if ($this->Menu->save($this->data) == false)
                $this->Session->setFlash('Error saving Menu.');
            $this->redirect(array('action' => 'index'));
        } else {
            if ($id == null)
                die("No ID received");
            $this->data = $this->Menu->read(null, $id);
            $parents[null] = "[ Principal ]";
            $Menulist = $this->Menu->generateTreeList(null, null, null, " - ");
            if ($Menulist)
                foreach ($Menulist as $key => $value)
                    $parents[$key] = $value;
            $this->set(compact('parents'));
            $tipos = $this->Menu->Tipo->find('list');
            $this->set(compact('tipos'));
        }
    }
    function delete($id = null) {
        if ($id == null)
            die("No ID received");
        $this->Menu->id = $id;
        if ($this->Menu->delete() == false)
            $this->Session->setFlash('The Menu could not be deleted.');
        $this->redirect(array('action' => 'index'));
    }
    // move categoria 1 nivel acima
    function moveup($id = null) {
        if ($id == null)
            die("No ID received");
        $this->Menu->id = $id;
        if ($this->Menu->moveUp() == false)
            $this->Session->setFlash('The Menu could not be moved up.');
        $this->redirect(array('action' => 'index'));
    }
    // move categoria 1 nivel abaixo
    function movedown($id = null) {
        if ($id == null)
            die("No ID received");
        $this->Menu->id = $id;
        if ($this->Menu->moveDown() == false)
            $this->Session->setFlash('The Menu could not be moved down.');
        $this->redirect(array('action' => 'index'));
    }
    // remove categoria da lista Tree
    function removeNode($id = null) {
        if ($id == null)
            die("Nothing to Remove");
        if ($this->Menu->removeFromTree($id) == false)
            $this->Session->setFlash('removido com sucesso');
        $this->redirect(array('action' => 'index'));
    }
    
    function ver($id){
        
        $Menu = null;
        if ($id<>null) {
            if (!$this->Menu->exists($id)) {
        		throw new NotFoundException(__('Menu inválido.'));
        	} else {
        	   $Menu = $this->Menu->findById($id);
        	}
    	}
        
    }
}
