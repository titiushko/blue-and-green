<?php
App::uses('AppModel', 'Model');
/**
 * Tienda Model
 *
 * @property Comentario $Comentario
 * @property Articulo $Articulo
 */
class Tienda extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_tienda';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_tienda';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_tienda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estilo_tienda' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'codigo_tabla_origen_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'joinTable' => 'articulos_tiendas',
			'foreignKey' => 'codigo_tienda',
			'associationForeignKey' => 'codigo_articulo',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
