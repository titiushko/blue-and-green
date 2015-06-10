<?php
App::uses('AppModel', 'Model');
/**
 * Telefono Model
 *
 * @property Persona $Persona
 */
class Telefono extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_telefono';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero_telefono';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numero_telefono' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'codigo_persona',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
