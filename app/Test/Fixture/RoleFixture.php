<?php
/**
 * RoleFixture
 *
 */
class RoleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'_id' => array('type' => 'string', 'length' => 2000, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'default' => null),
		'modified' => array('type' => 'datetime', 'default' => null),
		'name' => array('type' => 'string', 'length' => 2000),
		'indexes' => array(
			'0' => array()
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-07 13:58:14',
			'modified' => '2012-10-07 13:58:14',
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
