<?php
App::uses('Video', 'Model');

/**
 * Video Test Case
 *
 */
class VideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.video',
		'app.categoria',
		'app.tipo',
		'app.foto',
		'app.menu',
		'app.parent_menus',
		'app.comentario',
		'app.pagina',
		'app.patrocinio',
		'app.contagen',
		'app.ensaio',
		'app.patrocinadore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Video = ClassRegistry::init('Video');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Video);

		parent::tearDown();
	}

}
