<?php
App::uses('Tipo', 'Model');

/**
 * Tipo Test Case
 *
 */
class TipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo',
		'app.categoria',
		'app.foto',
		'app.patrocinadore',
		'app.video',
		'app.menu',
		'app.parent_menus',
		'app.comentario',
		'app.pagina',
		'app.patrocinio',
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
		$this->Tipo = ClassRegistry::init('Tipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
