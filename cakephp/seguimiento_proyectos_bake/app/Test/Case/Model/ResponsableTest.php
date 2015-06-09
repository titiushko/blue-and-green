<?php
App::uses('Responsable', 'Model');

/**
 * Responsable Test Case
 *
 */
class ResponsableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.responsable',
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
		$this->Responsable = ClassRegistry::init('Responsable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Responsable);

		parent::tearDown();
	}

}
