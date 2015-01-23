<?php
class UserAuthHelper extends AppHelper {

	/**
	 * This helper uses following helpers
	 *
	 * @var array
	 */
	var $helpers = array('Session');
	/**
	 * Used to check whether user is logged in or not
	 *
	 * @access public
	 * @return boolean
	 */
	public function isLogged() {
		return ($this->getUserId() !== null);
	}
	/**
	 * Used to get user from session
	 *
	 * @access public
	 * @return array
	 */
	public function getUser() {
		return $this->Session->read('UserAuth');
	}
	/**
	 * Used to get user id from session
	 *
	 * @access public
	 * @return integer
	 */
	public function getUserId() {
		return $this->Session->read('UserAuth.User.id');
	}
	/**
	 * Used to get group id from session
	 *
	 * @access public
	 * @return integer
	 */
	public function getGroupId() {
		return $this->Session->read('UserAuth.User.user_group_id');
	}
	/**
	 * Used to get group name from session
	 *
	 * @access public
	 * @return string
	 */
	public function getGroupName() {
		return $this->Session->read('UserAuth.UserGroup.alias_name');
	}
	/**
	 * Used to check is admin logged in
	 *
	 * @access public
	 * @return string
	 */
	public function isAdmin() {
		$groupId = $this->Session->read('UserAuth.User.user_group_id');
		if($groupId==ADMIN_GROUP_ID) {
			return true;
		}
		return false;
	}
	/**
	 * Used to check is guest logged in
	 *
	 * @access public
	 * @return string
	 */
	 
	public function isMenu() {
		$groupId = $this->Session->read('UserAuth.User.user_group_id');
		
		App::import("Model", "Usermgmt.UserGroupPermission");  
		$model = new UserGroupPermission();  
		$dados = $model->find("all", array(
			'conditions'=>array('UserGroupPermission.user_group_id'=>$groupId,'UserGroupPermission.allowed'=>1),
			'fields' => array('UserGroupPermission.controller', 'UserGroupPermission.action')
		));  
		
		return $dados;
	}
	
	
	public function isGuest() {
		$groupId = $this->Session->read('UserAuth.User.user_group_id');
		if(empty($groupId)) {
			return true;
		}
		return false;
	}
	public function showCaptcha($error) {
		App::import("Vendor", "Usermgmt.recaptcha/recaptchalib");
		$code = recaptcha_get_html(PUBLIC_KEY_FROM_RECAPTCHA, $error, true);
		return $this->output($code);
	}
}