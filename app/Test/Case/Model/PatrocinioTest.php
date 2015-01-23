<?php
App::uses('Patrocinio', 'Model');

/**
 * Patrocinio Test Case
 *
 */
class PatrocinioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patrocinio',
		'app.pagina',
		'app.tipo',
		'app.menu',
		'app.parent_menus',
		'app.comentario',
		'app.contagen',
		'app.ensaio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Patrocinio = ClassRegistry::init('Patrocinio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patrocinio);

		parent::tearDown();
	}

}
