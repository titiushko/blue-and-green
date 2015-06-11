<?php
App::uses('AppModel', 'Model');
/**
 * Permiso Model
 *
 * @property Role $Role
 */
class Permiso extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_permiso';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_permiso';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_permiso' => array(
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Role' => array(
			'className' => 'Role',
			'joinTable' => 'roles_permisos',
			'foreignKey' => 'codigo_permiso',
			'associationForeignKey' => 'codigo_rol',
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
