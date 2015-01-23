<?php
App::uses('SitesTipo', 'Model');

/**
 * SitesTipo Test Case
 *
 */
class SitesTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sites_tipo',
		'app.tipo',
		'app.noticia',
		'app.user',
		'app.imagen',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SitesTipo = ClassRegistry::init('SitesTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SitesTipo);

		parent::tearDown();
	}

}
