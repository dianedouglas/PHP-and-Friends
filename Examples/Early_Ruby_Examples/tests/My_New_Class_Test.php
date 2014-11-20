<?php 

require_once "defining_methods.php";

class My_New_Class_Test extends PHPUnit_Framework_TestCase
{
	public function test_gimme_ten(){
		//Arrange
		$class_to_test = new My_New_Class();

		//Act
		$return_value_to_test = $class_to_test->gimme_ten(1);

		//Assert
		$this->assertEquals(10, $return_value_to_test);
	}

	public function test_half(){
		//Arrange
		$class_to_test = new My_New_Class();

		//Act
		$return_value_to_test = $class_to_test->half(8.4);

		//Assert
		$this->assertEquals(4.2, $return_value_to_test);
	}

	public function test_next_in_line(){
		//Arrange
		$class_to_test = new My_New_Class();

		//Act
		$starting_array = array("oranges", "apples", "bananas");
		$return_value_to_test = $class_to_test->next_in_line($starting_array);

		//Assert
		$this->assertEquals(array("apples", "bananas", "oranges"), $return_value_to_test);
	}

	public function test_trim(){
		//Arrange
		$class_to_test = new My_New_Class();

		//Act
		$starting_array = array("oranges", "apples", "bananas");
		$return_value_to_test = $class_to_test->trim($starting_array);

		//Assert
		$this->assertEquals(array("apples"), $return_value_to_test);
	}
}

?>