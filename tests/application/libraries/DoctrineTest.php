<?php

require_once dirname(__FILE__) . '/../../../application/libraries/Doctrine.php';

/**
 * Test class for Doctrine.
 * Generated by PHPUnit on 2012-03-18 at 15:21:33.
 */
class DoctrineTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var Doctrine
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Doctrine;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}

}

?>
