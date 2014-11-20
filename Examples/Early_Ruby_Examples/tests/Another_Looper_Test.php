<?php 

require_once "methods_using_loops.php";

class Another_Looper_Test extends PHPUnit_Framework_TestCase
{
	public function test_upcase_array()
	{
		//Arrange
		$test_another_looper = new Another_Looper;
		$array_to_upcase = array("once", "upON", "a", "TiMe");

		//Act
		$test_another_looper->upcase_array($array_to_upcase);

		//Assert
		$this->assertEquals(array("ONCE", "UPON", "A", "TIME"), $array_to_upcase);
	}

	public function test_duplicate_each_letter()
	{
		//Arrange
		$test_another_looper = new Another_Looper;
		$input_string = "Diane";
		$times_to_duplicate = 2;

		//Act
		$result = $test_another_looper->duplicate_each_letter($input_string, $times_to_duplicate);

		//Assert
		$this->assertEquals("DDiiaannee", $result);
	}
}

 ?>