<?php
App::uses('AppModel', 'Model');
/**
 * Comentario Model
 *
 * @property Pagina $Pagina
 * @property Menu $Menu
 */
class Comentario extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	//public $useDbConfig = 'test';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'autor';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pagina_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'menu_id' => array(
			'n' => array(
				'rule' => array('n'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'autor' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),				'message' => 'Este campo deve ser informado!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comentario' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),				'message' => 'Este campo deve ser informado!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'data_cadastro' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),				'message' => 'Este campo deve ser informado!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'exibir' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pagina' => array(
			'className' => 'Pagina',
			'foreignKey' => 'pagina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Menu' => array(
			'className' => 'Menu',
			'foreignKey' => 'menu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
