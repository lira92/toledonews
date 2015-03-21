<?php
App::uses('AppModel', 'Model');
/**
 * Pagina Model
 *
 * @property Tipo $Tipo
 * @property Menu $Menu
 * @property Comentario $Comentario
 * @property Patrocinio $Patrocinio
 */
class Pagina extends AppModel {
 public $actsAs = array(
        'Upload.Upload' => array(
            'src' => array(
                // Local onde salvar
				'path'=>'{ROOT}webroot{DS}img{DS}{model}s{DS}',
                'pathMethod'=>'flat',
                'customName' => '{!getNewName}',
                // Campos
               // 'fields' => array(
               //     'dir' => 'dir',
               //     'type' => 'mimetype',
               //     'size' => 'filesize'
               // ),
                // Thumbnails
                'thumbnailMethod' => 'php', // GD
                'thumbnailSizes' => array(
                    'thumb' => '200x100',
                    'large' => '550x502',
                ),
            ),
            
        )
    );

	public function getNewName($filename = ''){
        return uniqid();
    }
	
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
		'menu_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
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
		'subtitulo' => array(
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
		
		'conteudo' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 9999),				'message' => 'no máximo 9999 characters!',
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
		'fonte' => array(
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
		
		'slideshow' => array(
			'numeric' => array(
				'rule' => array('numeric'),				'message' => 'Informe um número!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inicio' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fim' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
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
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'pagina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Patrocinio' => array(
			'className' => 'Patrocinio',
			'foreignKey' => 'pagina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Foto' => array(
			'className' => 'Foto',
			'foreignKey' => 'pagina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Video' => array(
			'className' => 'Video',
			'foreignKey' => 'pagina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	/*
	public function beforeSave($options = array()) {
		if(!empty($this->data['Pagina']['src']['name'])) {  
			$this->data['Pagina']['src'] = $this->upload($this->data['Pagina']['src']);  
		} else {  
			unset($this->data['Pagina']['src']);  
		} 
	}
	public function upload($imagem = array(), $dir = 'img/paginas')  
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
	
	/*
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
	
	/*
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
	/*
	public function move_arquivos($imagem, $dir)  
	{  
		App::uses('File', 'Utility');  
		$arquivo = new File($imagem['tmp_name']);
		print_r($arquivo);
		$arquivo->copy($dir.$imagem['name']);  
		$arquivo->close();  
	}  
		*/
}
