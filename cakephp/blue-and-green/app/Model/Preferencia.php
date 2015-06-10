<?php
App::uses('AppModel', 'Model');
/**
 * Preferencia Model
 *
 * @property Comentario $Comentario
 * @property TiposArticulo $TiposArticulo
 * @property Persona $Persona
 * @property Role $Role
 */
class Preferencia extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_preferencia';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'codigo_persona';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'color_preferencia' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'codigo_tipo_articulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'codigo_persona' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposArticulo' => array(
			'className' => 'TiposArticulo',
			'foreignKey' => 'codigo_tipo_articulo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'codigo_persona',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
