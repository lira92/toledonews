<?php
App::uses('AppController', 'Controller');
/**
 * Patrocinadores Controller
 *
 * @property Patrocinadore $Patrocinadore
 * @property PaginatorComponent $Paginator
 */
class PatrocinadoresController extends AppController {

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
		$this->Patrocinadore->recursive = 0;
		$this->set('patrocinadores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patrocinadore->exists($id)) {
			throw new NotFoundException(__('Invalid patrocinadore'));
		}
		$options = array('conditions' => array('Patrocinadore.' . $this->Patrocinadore->primaryKey => $id));
		$this->set('patrocinadore', $this->Patrocinadore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patrocinadore->create();
			if ($this->Patrocinadore->save($this->request->data)) {
				$this->Session->setFlash(__('The patrocinadore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrocinadore could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Patrocinadore->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patrocinadore->exists($id)) {
			throw new NotFoundException(__('Invalid patrocinadore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patrocinadore->save($this->request->data)) {
				$this->Session->setFlash(__('The patrocinadore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrocinadore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patrocinadore.' . $this->Patrocinadore->primaryKey => $id));
			$this->request->data = $this->Patrocinadore->find('first', $options);
		}
		$categorias = $this->Patrocinadore->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Patrocinadore->id = $id;
		if (!$this->Patrocinadore->exists()) {
			throw new NotFoundException(__('Invalid patrocinadore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Patrocinadore->delete()) {
			$this->Session->setFlash(__('The patrocinadore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The patrocinadore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
