<?php

App::uses('AppModel', 'Model');
/**
 * Menu Model
 *
 * @property Menu $ParentMenu
 * @property Tipo $Tipo
 * @property Comentario $Comentario
 * @property Contagen $Contagen
 * @property Ensaio $Ensaio
 * @property Menu $ChildMenu
 * @property Pagina $Pagina
 * @property Patrocinio $Patrocinio
 */
class Menu extends AppModel {
    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'titulo';
    public $actsAs = array('Tree');
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array('Tipo' => array(
            'className' => 'Tipo',
            'foreignKey' => 'tipo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''));
    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Comentario' => array(
            'className' => 'Comentario',
            'foreignKey' => 'menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Contagen' => array(
            'className' => 'Contagen',
            'foreignKey' => 'menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Ensaio' => array(
            'className' => 'Ensaio',
            'foreignKey' => 'menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Pagina' => array(
            'className' => 'Pagina',
            'foreignKey' => 'menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Patrocinio' => array(
            'className' => 'Patrocinio',
            'foreignKey' => 'menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''));
}
