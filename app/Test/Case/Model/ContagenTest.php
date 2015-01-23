<?php
App::uses('Contagen', 'Model');

/**
 * Contagen Test Case
 *
 */
class ContagenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contagen',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contagen = ClassRegistry::init('Contagen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contagen);

		parent::tearDown();
	}

}
