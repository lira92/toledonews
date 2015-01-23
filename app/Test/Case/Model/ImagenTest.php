<?php
App::uses('Imagen', 'Model');

/**
 * Imagen Test Case
 *
 */
class ImagenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imagen',
		'app.noticia',
		'app.user',
		'app.tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imagen = ClassRegistry::init('Imagen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imagen);

		parent::tearDown();
	}

}
