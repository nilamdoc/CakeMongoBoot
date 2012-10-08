<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'_id' => array('type' => 'string', 'length' => 2000, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'date_join' => array('type' => 'string', 'length' => 2000),
		'email' => array('type' => 'string', 'length' => 2000),
		'last_login' => array('type' => 'string', 'length' => 2000),
		'lastname' => array('type' => 'string', 'length' => 2000),
		'mobile' => array('type' => 'string', 'length' => 2000),
		'name' => array('type' => 'string', 'length' => 2000),
		'password' => array('type' => 'string', 'length' => 2000),
		'username' => array('type' => 'string', 'length' => 2000),
		'visits' => array('type' => 'string', 'length' => 2000),
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
			'created' => '2012-10-08 10:37:47',
			'modified' => '2012-10-08 10:37:47',
			'date_join' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'last_login' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'mobile' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'visits' => 'Lorem ipsum dolor sit amet'
		),
	);

}
