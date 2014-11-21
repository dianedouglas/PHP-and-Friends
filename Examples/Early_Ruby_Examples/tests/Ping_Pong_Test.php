<?php 

require_once "ping_pong.php";

class Ping_Pong_Test extends PHPUnit_Framework_TestCase
{
	public function test_ping_pong_before_ping()
	{
		//Arrange
		$test_ping_pong = new Ping_Pong;
		$final_number = 2;

		//Act
		$result = $test_ping_pong->ping_ponger($final_number);

		//Assert
		$this->assertEquals(array(0, 1, 2), $result);
	}
}

 ?>