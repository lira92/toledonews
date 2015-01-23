<?php
App::uses('AppModel', 'Model');

// In the model

/**
 * Foto Model
 *
 * @property Tipo $Tipo
 * @property Categoria $Categoria
 */
class Foto extends AppModel {
/*public $actsAs = array(
	'Uploader.Attachment' => array(
		'src' => array(
			'overwrite' => true,
			//'dbColumn' => 'src',
			//'uploadDir' => '/localhost/app/webroot/img/uploads/',
			//'uploadDir' => '/var/www/app/webroot/img/uploads/',
			//'finalPath' => '/img/uploads/',
			'nameCallback' => 'formatName',
			'transforms' => array(
				'imageSmall' => array(
					'class' => 'crop',
					'append' => '-small',
					'overwrite' => true,
					'self' => false,
					'width' => 100,
					'height' => 100
				),
				'imageMedium' => array(
					'class' => 'resize',
					'append' => '-medium',
					'width' => 800,
					'height' => 600,
					'aspect' => false
				)
			)
		)
	)
);*/


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
	public $displayField = 'titulo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pagina_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'endereco' => array(
			
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'site' => array(
			
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descricao' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		
		'atividade' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 250),				'message' => 'no máximo 250 characters!',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 3),				'message' => 'Informe no minimo 03 characters!',
				'allowEmpty' => true,
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
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pagina' => array(
			'className' => 'Pagina',
			'foreignKey' => 'pagina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function beforeSave($options = array()) {
		if(!empty($this->data['Foto']['src']['name'])) {  
			$this->data['Foto']['src'] = $this->upload($this->data['Foto']['src']);  
		} else {  
			unset($this->data['Foto']['src']);  
		} 
	}
	public function upload($imagem = array(), $dir = 'img/fotos')  
	{  
		$dir = WWW_ROOT.$dir.DS;  
	  
		if(($imagem['error']!=0) and ($imagem['size']==0)) {  
			throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$imagem['error'].' e tamanho '.$imagem['size']);  
		}  
	  
		$this->checa_dir($dir);  
	  
		$imagem = $this->checa_nome($imagem, $dir);  
	  
		$this->move_arquivos($imagem, $dir);  
	  
		return $imagem['name'];  
	}
	public function checa_dir($dir)  
	{  
		App::uses('Folder', 'Utility');  
		$folder = new Folder();  
		if (!is_dir($dir)){  
			$folder->create($dir);  
		}  
	}  
	  
	/** 
	 * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	 * @return nome da imagem 
	*/   
	public function checa_nome($imagem, $dir)  
	{  
		$imagem_info = pathinfo($dir.$imagem['name']);  
		$imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];  
		debug($imagem_nome);  
		$conta = 2;  
		while (file_exists($dir.$imagem_nome)) {  
			$imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;  
			$imagem_nome .= '.'.$imagem_info['extension'];  
			$conta++;  
			debug($imagem_nome);  
		}  
		$imagem['name'] = $imagem_nome;  
		return $imagem;  
	}  
	  
	/** 
	 * Trata o nome removendo espaços, acentos e caracteres em maiúsculo. 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	*/   
	public function trata_nome($imagem_nome)  
	{  
		$imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));  
		return $imagem_nome;  
	}  
	  
	/** 
	 * Move o arquivo para a pasta de destino. 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	*/   
	public function move_arquivos($imagem, $dir)  
	{  
		App::uses('File', 'Utility');  
		$arquivo = new File($imagem['tmp_name']);
		print_r($arquivo);
		$arquivo->copy($dir.$imagem['name']);  
		$arquivo->close();  
	}  	
}
