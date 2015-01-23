<?php
App::uses('AppController', 'Controller');
/**
 * Patrocinios Controller
 *
 * @property Patrocinio $Patrocinio
 * @property PaginatorComponent $Paginator
 */
class PatrociniosController extends AppController {

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
		$this->Patrocinio->recursive = 0;
		$this->set('patrocinios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patrocinio->exists($id)) {
			throw new NotFoundException(__('Invalid patrocinio'));
		}
		$options = array('conditions' => array('Patrocinio.' . $this->Patrocinio->primaryKey => $id));
		$this->set('patrocinio', $this->Patrocinio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patrocinio->create();
			if ($this->Patrocinio->save($this->request->data)) {
				$this->Session->setFlash(__('The patrocinio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrocinio could not be saved. Please, try again.'));
			}
		}
		$paginas = $this->Patrocinio->Pagina->find('list');
		$menus = $this->Patrocinio->Menu->find('list');
		$patrocinadores = $this->Patrocinio->Patrocinadore->find('list');
		$this->set(compact('paginas', 'menus', 'patrocinadores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patrocinio->exists($id)) {
			throw new NotFoundException(__('Invalid patrocinio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patrocinio->save($this->request->data)) {
				$this->Session->setFlash(__('The patrocinio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrocinio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patrocinio.' . $this->Patrocinio->primaryKey => $id));
			$this->request->data = $this->Patrocinio->find('first', $options);
		}
		$paginas = $this->Patrocinio->Pagina->find('list');
		$menus = $this->Patrocinio->Menu->find('list');
		$patrocinadores = $this->Patrocinio->Patrocinadore->find('list');
		$this->set(compact('paginas', 'menus', 'patrocinadores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Patrocinio->id = $id;
		if (!$this->Patrocinio->exists()) {
			throw new NotFoundException(__('Invalid patrocinio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Patrocinio->delete()) {
			$this->Session->setFlash(__('The patrocinio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The patrocinio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
