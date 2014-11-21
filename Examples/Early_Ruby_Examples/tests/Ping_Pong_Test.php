<?php 

require_once "ping_pong.php";

class Ping_Ponger_Test extends PHPUnit_Framework_TestCase
{
	public function test_ping_pong_before_ping()
	{
		//Arrange
		$test_ping_pong = new Ping_Ponger;
		$final_number = 2;

		//Act
		$result = $test_ping_pong->ping_pong($final_number);

		//Assert
		$this->assertEquals(array(0, 1, 2), $result);
	}

	public function test_ping_pong_just_ping()
	{
		//Arrange
		$test_ping_pong = new Ping_Ponger;
		$final_number = 3;

		//Act
		$result = $test_ping_pong->ping_pong($final_number);

		//Assert
		$this->assertEquals(array(0, 1, 2, "ping"), $result);
	}

	public function test_ping_pong_just_pong()
	{
		//Arrange
		$test_ping_pong = new Ping_Ponger;
		$final_number = 5;

		//Act
		$result = $test_ping_pong->ping_pong($final_number);

		//Assert
		$this->assertEquals(array(0, 1, 2, "ping", 4, "pong"), $result);
	}

	public function test_ping_pong_both_pingpong()
	{
		//Arrange
		$test_ping_pong = new Ping_Ponger;
		$final_number = 15;

		//Act
		$result = $test_ping_pong->ping_pong($final_number);

		//Assert
		$this->assertEquals(array(0, 1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "ping-pong"), $result);
	}
}

 ?>