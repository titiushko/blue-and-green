<?php
App::uses('AppModel', 'Model');
/**
 * TiposArticulo Model
 *
 * @property Articulo $Articulo
 */
class TiposArticulo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_tipo_articulo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_tipo_articulo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_tipo_articulo' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'codigo_tipo_articulo',
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

}
