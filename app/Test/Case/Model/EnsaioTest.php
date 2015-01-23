<?php
App::uses('Ensaio', 'Model');

/**
 * Ensaio Test Case
 *
 */
class EnsaioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ensaio',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ensaio = ClassRegistry::init('Ensaio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ensaio);

		parent::tearDown();
	}

}
