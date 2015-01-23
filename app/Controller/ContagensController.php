<?php
App::uses('AppController', 'Controller');
/**
 * Contagens Controller
 *
 * @property Contagen $Contagen
 * @property PaginatorComponent $Paginator
 */
class ContagensController extends AppController {

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
		$this->Contagen->recursive = 0;
		$this->set('contagens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contagen->exists($id)) {
			throw new NotFoundException(__('Invalid contagen'));
		}
		$options = array('conditions' => array('Contagen.' . $this->Contagen->primaryKey => $id));
		$this->set('contagen', $this->Contagen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contagen->create();
			if ($this->Contagen->save($this->request->data)) {
				$this->Session->setFlash(__('The contagen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contagen could not be saved. Please, try again.'));
			}
		}
		$menus = $this->Contagen->Menu->find('list');
		$this->set(compact('menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contagen->exists($id)) {
			throw new NotFoundException(__('Invalid contagen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contagen->save($this->request->data)) {
				$this->Session->setFlash(__('The contagen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contagen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contagen.' . $this->Contagen->primaryKey => $id));
			$this->request->data = $this->Contagen->find('first', $options);
		}
		$menus = $this->Contagen->Menu->find('list');
		$this->set(compact('menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contagen->id = $id;
		if (!$this->Contagen->exists()) {
			throw new NotFoundException(__('Invalid contagen'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contagen->delete()) {
			$this->Session->setFlash(__('The contagen has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contagen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
