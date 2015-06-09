<?php
App::uses('Proyecto', 'Model');

/**
 * Proyecto Test Case
 *
 */
class ProyectoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proyecto',
		'app.usuario',
		'app.tarea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proyecto = ClassRegistry::init('Proyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proyecto);

		parent::tearDown();
	}

}
