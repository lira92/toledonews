<?php
App::uses('AppController', 'Controller');
/**
 * Ensaios Controller
 *
 * @property Ensaio $Ensaio
 * @property PaginatorComponent $Paginator
 */
class EnsaiosController extends AppController {

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
		$this->Ensaio->recursive = 0;
		$this->set('ensaios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ensaio->exists($id)) {
			throw new NotFoundException(__('Invalid ensaio'));
		}
		$options = array('conditions' => array('Ensaio.' . $this->Ensaio->primaryKey => $id));
		$this->set('ensaio', $this->Ensaio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ensaio->create();
			if ($this->Ensaio->save($this->request->data)) {
				$this->Session->setFlash(__('The ensaio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ensaio could not be saved. Please, try again.'));
			}
		}
		$menus = $this->Ensaio->Menu->find('list');
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
		if (!$this->Ensaio->exists($id)) {
			throw new NotFoundException(__('Invalid ensaio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ensaio->save($this->request->data)) {
				$this->Session->setFlash(__('The ensaio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ensaio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ensaio.' . $this->Ensaio->primaryKey => $id));
			$this->request->data = $this->Ensaio->find('first', $options);
		}
		$menus = $this->Ensaio->Menu->find('list');
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
		$this->Ensaio->id = $id;
		if (!$this->Ensaio->exists()) {
			throw new NotFoundException(__('Invalid ensaio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ensaio->delete()) {
			$this->Session->setFlash(__('The ensaio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ensaio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
