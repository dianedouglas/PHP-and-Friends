<?php 

require_once "defining_methods_with_arguments.php";

class Subtractor_Combiner_Test extends PHPUnit_Framework_TestCase
{
	public function test_subtract()
	{
		//Arrange
		$test_subtractor_combiner = new Subtractor_Combiner;
		$first_number = 2;
		$second_number = 1;

		//Act
		$result = $test_subtractor_combiner->subtract($first_number, $second_number);

		//Assert
		$this->assertEquals(1, $result);
	}

	public function test_combine()
	{
		//Arrange
		$test_subtractor_combiner = new Subtractor_Combiner;
		$first_string = "break";
		$second_string = "fast";

		//Act
		$result = $test_subtractor_combiner->combine($first_string, $second_string);

		//Assert
		$this->assertEquals("breakfast", $result);
	}
}

?>