<?php

namespace Doctrine\DBAL\Driver\IBMDB2;

require_once dirname(__FILE__) . '/../../../../../../../../application/third_party/doctrine2-orm/Doctrine/DBAL/Driver/IBMDB2/DB2Exception.php';

/**
 * Test class for DB2Exception.
 * Generated by PHPUnit on 2012-03-18 at 15:25:39.
 */
class DB2ExceptionTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var DB2Exception
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new DB2Exception;
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
