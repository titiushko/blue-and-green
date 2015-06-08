<?php
class Mesero extends AppModel {
	public $validate = array(
		'dui' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'DUI ya existe.'
			)
		),
		'nombres' => array(
			'rule' => 'notEmpty'
		),
		'apellidos' => array(
			'rule' => 'notEmpty'
		),
		'telefono' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			)
		)
	);
}
