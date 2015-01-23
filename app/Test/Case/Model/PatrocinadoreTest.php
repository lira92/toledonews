<?php
App::uses('Patrocinadore', 'Model');

/**
 * Patrocinadore Test Case
 *
 */
class PatrocinadoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patrocinadore',
		'app.categoria',
		'app.tipo',
		'app.foto',
		'app.video'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Patrocinadore = ClassRegistry::init('Patrocinadore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patrocinadore);

		parent::tearDown();
	}

}
