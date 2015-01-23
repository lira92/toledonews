<?php
App::uses('Pagina', 'Model');

/**
 * Pagina Test Case
 *
 */
class PaginaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pagina',
		'app.tipo',
		'app.menu',
		'app.parent_menus',
		'app.comentario',
		'app.contagen',
		'app.ensaio',
		'app.patrocinio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pagina = ClassRegistry::init('Pagina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pagina);

		parent::tearDown();
	}

}
