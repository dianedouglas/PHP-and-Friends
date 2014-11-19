<?php 
require_once "src/User.php";

class UserTest extends PHPUnit_Framework_TestCase
{
	public function testTalk(){
		//Arrange: put together all your ingredients that you need to run a test.
		$user = new User();

		//Act: run what you are testing.
		$value_to_test = $user->talk();

		//Assert: make sure it does what you have designed it to do.
		$this->assertEquals("Hello World!", $value_to_test);
	}
}
?>