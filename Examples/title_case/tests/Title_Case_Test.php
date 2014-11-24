<?php 

require_once "title_case.php";

class TitleCase_Test extends PHPUnit_Framework_TestCase
{
	
	function test_make_title_case_oneword()
	{
		//Arrange
		$test_classname = new TitleCase;
		$input_variable = "word";

		//Act
		$result = $test_classname->make_title_case($input_variable);

		//Assert
		$this->assertEquals("Word", $result);
	}
	
	function test_make_title_case_twowords()
	{
		//Arrange
		$test_classname = new TitleCase;
		$input_variable = "word up.";

		//Act
		$result = $test_classname->make_title_case($input_variable);

		//Assert
		$this->assertEquals("Word Up.", $result);
	}
	
	function test_make_title_case_mixed_case()
	{
		//Arrange
		$test_classname = new TitleCase;
		$input_variable = "wOrD UP.";

		//Act
		$result = $test_classname->make_title_case($input_variable);

		//Assert
		$this->assertEquals("Word Up.", $result);
	}
}

 ?>