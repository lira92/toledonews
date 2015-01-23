<?php
App::uses('Anuncio', 'Model');

/**
 * Anuncio Test Case
 *
 */
class AnuncioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.anuncio',
		'app.tipo',
		'app.noticia',
		'app.user',
		'app.imagen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Anuncio = ClassRegistry::init('Anuncio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Anuncio);

		parent::tearDown();
	}

}
