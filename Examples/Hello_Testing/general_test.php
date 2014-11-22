<?php 

require_once "file_that_has_ClassName_in_it.php";

class ClassName_Test extends PHPUnit_Framework_TestCase
{
	
	function test_functionName()
	{
		//Arrange
		$test_classname = new ClassName;
		$input_variable = "?";

		//Act
		$result = $test_classname->functionName($input_variable);

		//Assert
		$this->assertEquals("desired result", $result);
	}
}

 ?>