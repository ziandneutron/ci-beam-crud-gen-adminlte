<?php

namespace Doctrine\Common;

require_once dirname(__FILE__) . '/../../../../../../application/third_party/doctrine2-orm/Doctrine/Common/Version.php';

/**
 * Test class for Version.
 * Generated by PHPUnit on 2012-03-18 at 15:23:07.
 */
class VersionTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Version
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Version;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}

	/**
	 * @todo Implement testCompare().
	 */
	public function testCompare()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>
