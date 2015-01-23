<?php
App::uses('UserMgmtAppModel', 'Usermgmt.Model');
App::uses('CakeEmail', 'Network/Email');

class User extends UserMgmtAppModel {

	/**
	 * This model belongs to following models
	 *
	 * @var array
	 */
	var $belongsTo = array('Usermgmt.UserGroup');
	/**
	 * This model has following models
	 *
	 * @var array
	 */
	var $hasMany = array('LoginToken'=>array('className'=>'Usermgmt.LoginToken','limit' =>1));
	/**
	 * model validation array
	 *
	 * @var array
	 */
	var $validate = array();
	/**
	 * UsetAuth component object
	 *
	 * @var object
	 */
	var $userAuth;
	/**
	 * model validation array
	 *
	 * @var array
	 */
	function LoginValidate() {
		$validate1 = array(
				'email'=> array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Por favor, indique e-mail ou nome de usuário')
					),
				'password'=>array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Digite sua senha')
					)
			);
		$this->validate=$validate1;
		return $this->validates();
	}
	/**
	 * model validation array
	 *
	 * @var array
	 */
	function RegisterValidate() {
		$validate1 = array(
				"user_group_id" => array(
					'rule' => array('comparison', '!=', 0),
					'message'=> 'Por favor seleccione grupo'),
				'username'=> array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Digite nome de usuário',
						'last'=>true),
					'mustUnique'=>array(
						'rule' =>'isUnique',
						'message' =>'Este nome de usuário já existe',
					'last'=>true),
					'mustBeLonger'=>array(
						'rule' => array('minLength', 4),
						'message'=> 'Usuário deve ser maior que 3 caracteres',
						'last'=>true),
					),
				'first_name'=> array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Digite o primeiro nome')
					),
				'last_name'=> array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'on' => 'create',
						'message'=> 'Por favor, indique sobrenome')
					),
				'email'=> array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Por favor, indique e-mail',
						'last'=>true),
					'mustBeEmail'=> array(
						'rule' => array('email'),
						'message' => 'Por favor, indique-mail válido',
						'last'=>true),
					'mustUnique'=>array(
						'rule' =>'isUnique',
						'message' =>'Este e-mail já está registado',
						)
					),
				'oldpassword'=>array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Digite sua senha antiga',
						'last'=>true),
					'mustMatch'=>array(
						'rule' => array('verifyOldPass'),
						'message' => 'Digite a senha antiga correta'),
					),
				'password'=>array(
					'mustNotEmpty'=>array(
						'rule' => 'notEmpty',
						'message'=> 'Digite sua senha',
						'on' => 'create',
						'last'=>true),
					'mustBeLonger'=>array(
						'rule' => array('minLength', 6),
						'message'=> 'A senha deve ser maior do que 5 caracteres',
						'on' => 'create',
						'last'=>true),
					'mustMatch'=>array(
						'rule' => array('verifies'),
						'message' => 'Ambas as senhas devem ser iguais'),
						//'on' => 'create'
					),
				'captcha'=>array(
					'mustMatch'=>array(
						'rule' => array('recaptchaValidate'),
						'message' => ''),
					)
			);
		$this->validate=$validate1;
		return $this->validates();
	}
	/**
	 * Used to validate captcha
	 *
	 * @access public
	 * @return boolean
	 */
	public function recaptchaValidate() {
		App::import("Vendor", "Usermgmt.recaptcha/recaptchalib");
		$recaptcha_challenge_field = (isset($_POST['recaptcha_challenge_field'])) ? $_POST['recaptcha_challenge_field'] : "";
		$recaptcha_response_field = (isset($_POST['recaptcha_response_field'])) ? $_POST['recaptcha_response_field'] : "";
		$resp = recaptcha_check_answer(PRIVATE_KEY_FROM_RECAPTCHA, $_SERVER['REMOTE_ADDR'], $recaptcha_challenge_field, $recaptcha_response_field);
		$error = $resp->error;
		if(!$resp->is_valid) {
			$this->validationErrors['captcha'][0]=$error;
		}
		return true;
	}
	/**
	 * Used to match passwords
	 *
	 * @access public
	 * @return boolean
	 */
	public function verifies() {
		return ($this->data['User']['password']===$this->data['User']['cpassword']);
	}
	/**
	 * Used to match old password
	 *
	 * @access public
	 * @return boolean
	 */
	public function verifyOldPass() {
		$userId = $this->userAuth->getUserId();
		$user = $this->findById($userId);
		$oldpass=$this->userAuth->makePassword($this->data['User']['oldpassword'], $user['User']['salt']);
		return ($user['User']['password']===$oldpass);
	}
	/**
	 * Used to send registration mail to user
	 *
	 * @access public
	 * @param array $user user detail array
	 * @return void
	 */
	public function sendRegistrationMail($user) {
		// send email to newly created user
		$userId=$user['User']['id'];
		$email = new CakeEmail();
		$fromConfig = EMAIL_FROM_ADDRESS;
		$fromNameConfig = EMAIL_FROM_NAME;
		$email->from(array( $fromConfig => $fromNameConfig));
		$email->sender(array( $fromConfig => $fromNameConfig));
		$email->to($user['User']['email']);
		$email->subject('Your registration is complete');
		//$email->transport('Debug');
		$body="bem-vindo ".$user['User']['first_name'].", Obrigado pela sua inscrição em ".SITE_URL." \n\n Agradecemos,\n".EMAIL_FROM_NAME;
		try{
			$result = $email->send($body);
		} catch (Exception $ex) {
			// we could not send the email, ignore it
			$result="Não foi possível enviar e-mail de inscrição para userid-".$userId;
		}
		$this->log($result, LOG_DEBUG);
	}
	/**
	 * Used to send email verification mail to user
	 *
	 * @access public
	 * @param array $user user detail array
	 * @return void
	 */
	public function sendVerificationMail($user) {
		$userId=$user['User']['id'];
		$email = new CakeEmail();
		$fromConfig = EMAIL_FROM_ADDRESS;
		$fromNameConfig = EMAIL_FROM_NAME;
		$email->from(array( $fromConfig => $fromNameConfig));
		$email->sender(array( $fromConfig => $fromNameConfig));
		$email->to($user['User']['email']);
		$email->subject('Verificação de email Email');
		$activate_key = $this->getActivationKey($user['User']['password']);
		$link = Router::url("/userVerification?ident=$userId&activate=$activate_key",true);
		$body="Olá ".$user['User']['first_name'].", Clique no link abaixo para concluir a sua inscrição \n\n ".$link;
		try{
			$result = $email->send($body);
		} catch (Exception $ex){
			// we could not send the email, ignore it
			$result="Não foi possível enviar a verificação de e-mail para userid-".$userId;
		}
		$this->log($result, LOG_DEBUG);
	}
	/**
	 * Used to generate activation key
	 *
	 * @access public
	 * @param string $password user password
	 * @return hash
	 */
	public function getActivationKey($password) {
		$salt = Configure::read ( "Security.salt" );
		return md5(md5($password).$salt);
	}
	/**
	 * Used to send forgot password mail to user
	 *
	 * @access public
	 * @param array $user user detail
	 * @return void
	 */
	public function forgotPassword($user) {
		$userId=$user['User']['id'];
		$email = new CakeEmail();
		$fromConfig = EMAIL_FROM_ADDRESS;
		$fromNameConfig = EMAIL_FROM_NAME;
		$email->from(array( $fromConfig => $fromNameConfig));
		$email->sender(array( $fromConfig => $fromNameConfig));
		$email->to($user['User']['email']);
		$email->subject(EMAIL_FROM_NAME.': Pedido para redefinir sua senha');
		$activate_key = $this->getActivationKey($user['User']['password']);
		$link = Router::url("/activatePassword?ident=$userId&activate=$activate_key",true);
		$body= "
		Bem-vindo ".$user['User']['first_name'].", 
		vamos ajudá-lo a redefinir sua senha
	
		Você pediu para que sua senha seja redefinida em ".EMAIL_FROM_NAME.". 
		Por favor, clique no link abaixo para redefinir sua senha agora :
		".$link."
		Se o link acima não funcionar copie e cole o link URL (acima) na barra de endereços do navegador para acessar a página para redefinir a senha
		Escolha uma senha que você possa lembrar e mantenha-o seguro.
		graças,\n".
		EMAIL_FROM_NAME;
		try{
			$result = $email->send($body);
		} catch (Exception $ex){
			// we could not send the email, ignore it
			$result="Não foi possível enviar esqueci a senha de e-mail para userid-".$userId;
		}
		$this->log($result, LOG_DEBUG);
	}
	/**
	 * Used to mark cookie used
	 *
	 * @access public
	 * @param string $type
	 * @param string $credentials
	 * @return array
	 */
	public function authsomeLogin($type, $credentials = array()) {
		switch ($type) {
			case 'guest':
				// You can return any non-null value here, if you don't
				// have a guest account, just return an empty array
				return array();
			case 'cookie':
				$loginToken=false;
				if(strpos($credentials['token'], ":") !==false) {
					list($token, $userId) = split(':', $credentials['token']);
					$duration = $credentials['duration'];

					$loginToken = $this->LoginToken->find('first', array(
						'conditions' => array(
							'user_id' => $userId,
							'token' => $token,
							'duration' => $duration,
							'used' => false,
							'expires <=' => date('Y-m-d H:i:s', strtotime($duration)),
						),
						'contain' => false
					));
				}
				if (!$loginToken) {
					return false;
				}
				$loginToken['LoginToken']['used'] = true;
				$this->LoginToken->save($loginToken);

				$conditions = array(
					'User.id' => $loginToken['LoginToken']['user_id']
				);
			break;
			default:
				return array();
		}
		return $this->find('first', compact('conditions'));
	}
	/**
	 * Used to generate cookie token
	 *
	 * @access public
	 * @param integer $userId user id
	 * @param string $duration cookie persist life time
	 * @return string
	 */
	public function authsomePersist($userId, $duration) {
		$token = md5(uniqid(mt_rand(), true));
		$this->LoginToken->create(array(
			'user_id' => $userId,
			'token' => $token,
			'duration' => $duration,
			'expires' => date('Y-m-d H:i:s', strtotime($duration)),
		));
		$this->LoginToken->save();
		return "${token}:${userId}";
	}
	/**
	 * Used to get name by user id
	 *
	 * @access public
	 * @param integer $userId user id
	 * @return string
	 */
	public function getNameById($userId) {
		$res = $this->findById($userId);
		$name=(!empty($res)) ? ($res['User']['first_name'].' '.$res['User']['last_name']) : '';
		return $name;
	}
	/**
	 * Used to check users by group id
	 *
	 * @access public
	 * @param integer $groupId user id
	 * @return boolean
	 */
	public function isUserAssociatedWithGroup($groupId) {
		$res = $this->find('count', array('conditions'=>array('User.user_group_id'=>$groupId)));
		if(!empty($res)) {
			return true;
		}
		return false;
	}
}