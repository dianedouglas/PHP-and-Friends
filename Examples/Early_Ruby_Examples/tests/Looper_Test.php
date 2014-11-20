<?php 

require_once "loops.php";

class Looper_Test extends PHPUnit_Framework_TestCase
{
	public function test_remove_last_four()
	{
		//Arrange
		$test_looper = new Looper;
		$starting_array = array("apples", "oranges", "bananas", "celery", "avocado", "wheat thins", "yogurts");

		//Act
		$result = $test_looper->remove_last_four($starting_array);

		//Assert
		$this->assertEquals(array("apples", "oranges", "bananas"), $result);
	}
	
	public function test_looping_multiplication()
	{
		//Arrange
		$test_looper = new Looper;

		//Act
		$result = $test_looper->looping_multiplication(4, 3);

		//Assert
		$this->assertEquals(16, $result);
		
	}

	public function test_counting_triples_array()
	{
		
		//Arrange
		$test_looper = new Looper;

		//Act
		$result = $test_looper->counting_triples_array(4);

		//Assert
		$this->assertEquals(array(0, 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3), $result);
	}
}

 ?>