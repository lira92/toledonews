<?php
App::uses('UserMgmtAppController', 'Usermgmt.Controller');
class UserGroupsController extends UserMgmtAppController {
	public $uses = array('Usermgmt.UserGroup', 'Usermgmt.User');
	/**
	 * Used to view all groups by Admin
	 *
	 * @access public
	 * @return array
	 */
	public function index() {
		$this->UserGroup->unbindModel( array('hasMany' => array('UserGroupPermission')));
		$userGroups=$this->UserGroup->find('all', array('order'=>'UserGroup.id'));
		$this->set('userGroups', $userGroups);
	}
	/**
	 * Used to add group on the site by Admin
	 *
	 * @access public
	 * @return void
	 */
	public function addGroup() {
		if ($this->request -> isPost()) {
			$this->UserGroup->set($this->data);
			if ($this->UserGroup->addValidate()) {
				$this->UserGroup->save($this->request->data,false);
				$this->Session->setFlash(__('O grupo adicionado com sucesso'));
				$this->redirect('/addGroup');
			}
		}
	}
	/**
	 * Used to edit group on the site by Admin
	 *
	 * @access public
	 * @param integer $groupId group id
	 * @return void
	 */
	public function editGroup($groupId=null) {
		if (!empty($groupId)) {
			if ($this->request -> isPut()) {
				$this->UserGroup->set($this->data);
				if ($this->UserGroup->addValidate()) {
					$this->UserGroup->save($this->request->data,false);
					$this->Session->setFlash(__('O grupo atualizado com êxito'));
					$this->redirect('/allGroups');
				}
			} else {
				$this->request->data = $this->UserGroup->read(null, $groupId);
			}
		} else {
			$this->redirect('/allGroups');
		}
	}
	/**
	 * Used to delete group on the site by Admin
	 *
	 * @access public
	 * @param integer $userId group id
	 * @return void
	 */
	public function deleteGroup($groupId = null) {
		if (!empty($groupId)) {
			if ($this->request -> isPost()) {
				$users=$this->User->isUserAssociatedWithGroup($groupId);
				if($users) {
					$this->Session->setFlash(__('Desculpe alguns usuários estão associados a esse grupo, não é possível excluir'));
					$this->redirect('/allGroups');
				}
				if ($this->UserGroup->delete($groupId, false)) {
					$this->Session->setFlash(__('Grupo eliminado com sucesso'));
				}
			}
			$this->redirect('/allGroups');
		} else {
			$this->redirect('/allGroups');
		}
	}
}