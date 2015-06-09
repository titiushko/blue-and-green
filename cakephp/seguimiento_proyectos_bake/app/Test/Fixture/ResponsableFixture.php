<?php
/**
 * ResponsableFixture
 *
 */
class ResponsableFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'codigo_responsable' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false, 'key' => 'primary'),
		'codigo_tarea' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7, 'unsigned' => false),
		'codigo_usuario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'key' => 'index', 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'codigo_responsable', 'unique' => 1),
			'responsables_usuarios' => array('column' => 'codigo_usuario', 'unique' => 0)
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
			'codigo_responsable' => 1,
			'codigo_tarea' => 1,
			'codigo_usuario' => 'Lorem ipsum dolor sit amet'
		),
	);

}
