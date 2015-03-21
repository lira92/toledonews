<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth', 'Tree');
	public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth', 'AjaxMultiUpload.Upload','DebugKit.Toolbar');
	public $uses = array('Menu','Pagina','Patrocinio');
	
	function beforeFilter(){
		$this->userAuth();
        
	}
    
	function beforeRender(){
		// pegar na sessão o id da cidade e adicionar na consulta
		$local_id = $this->Session->read('localID');
        if($local_id == null){
		
			$MenuSite = $this->Menu->find("threaded", array(
				'conditions'=>array('AND'=>array('Menu.parent_id NOT'=>null)),
				'order' => array('lft' => 'ASC')  
			));
		}else{
			$MenuSite = $this->Menu->find("threaded", array(
				'conditions'=>array('AND'=>array('Menu.parent_id'=>$local_id)),
				'order' => array('lft' => 'ASC')  
			));
		}
        $this->set('MenuSite', $MenuSite);
        $this->set('title_for_layout', 'Rede news');
	}
    
	private function userAuth(){
		$this->UserAuth->beforeFilter($this);
	}
	
}
