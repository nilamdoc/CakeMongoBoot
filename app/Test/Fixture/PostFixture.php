<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'_id' => array('type' => 'string', 'length' => 2000, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'title' => array('type' => 'string', 'length' => 2000),
		'body' => array('type' => 'string', 'length' => 2000),
		'user_id' => array('type' => 'string', 'length' => 2000),
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
			'created' => '2012-10-08 10:37:32',
			'modified' => '2012-10-08 10:37:32',
			'title' => 'Lorem ipsum dolor sit amet',
			'body' => 'Lorem ipsum dolor sit amet',
			'user_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
