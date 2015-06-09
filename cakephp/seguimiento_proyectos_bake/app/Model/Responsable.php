<?php
App::uses('AppModel', 'Model');
/**
 * Responsable Model
 *
 * @property Usuario $Usuario
 * @property Tarea $Tarea
 */
class Responsable extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_responsable';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'codigo_usuario';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'codigo_tarea' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'codigo_usuario' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'codigo_usuario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tarea' => array(
			'className' => 'Tarea',
			'foreignKey' => 'codigo_tarea',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
