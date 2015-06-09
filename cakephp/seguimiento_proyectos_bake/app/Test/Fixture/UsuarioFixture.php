<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'codigo_usuario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'primary', 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'nombres_usuario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'apellidos_usuario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'nacimiento_usuario' => array('type' => 'date', 'null' => true, 'default' => null),
		'password_usuario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'codigo_usuario', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'codigo_usuario' => 'Lorem ipsum dolor sit amet',
			'nombres_usuario' => 'Lorem ipsum dolor sit amet',
			'apellidos_usuario' => 'Lorem ipsum dolor sit amet',
			'nacimiento_usuario' => '2015-06-09',
			'password_usuario' => 'Lorem ipsum dolor sit amet'
		),
	);

}
