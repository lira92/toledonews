<?php
App::uses('AppController', 'Controller');

/**
 * Fotos Controller
 *
 * @property Foto $Foto
 * @property PaginatorComponent $Paginator
 */
class FotosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
		$this->set('foto', $this->Foto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */



	public function add($id = null, $tipo_id = null) {
		
		if ($this->request->is('post')) {
		
			$this->Foto->create();
			
			if ($this->Foto->save($this->request->data, true)) {
				$this->Session->setFlash(__('The foto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		}
		
		$optionsTipos = array('conditions' => array('Tipo.id' => $tipo_id));
		$optionsPaginas = array('conditions' => array('Pagina.id' => $id));
		
		$tipos = $this->Foto->Tipo->find('list', $optionsTipos);
		$categorias = $this->Foto->Categoria->find('list');
		$paginas = $this->Foto->Pagina->find('list',$optionsPaginas);
		$this->set(compact('paginas','tipos', 'categorias'));
	}
	
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('The foto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
			$this->request->data = $this->Foto->find('first', $options);
		}
		$tipos = $this->Foto->Tipo->find('list');
		$categorias = $this->Foto->Categoria->find('list');
		$paginas = $this->Foto->Pagina->find('list');
		$this->set(compact('paginas','tipos', 'categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Foto->id = $id;
		if (!$this->Foto->exists()) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foto->delete()) {
			$this->Session->setFlash(__('The foto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
