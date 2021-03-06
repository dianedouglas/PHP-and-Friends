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
	
	function test_make_title_case_special_words()
	{
		//Arrange
		$test_classname = new TitleCase;
		$input_variable = "my friends and i";

		//Act
		$result = $test_classname->make_title_case($input_variable);

		//Assert
		$this->assertEquals("My Friends and I", $result);
	}
	
	function test_make_title_case_first_word()
	{
		//Arrange
		$test_classname = new TitleCase;
		$input_variable = "the little prince";

		//Act
		$result = $test_classname->make_title_case($input_variable);

		//Assert
		$this->assertEquals("The Little Prince", $result);
	}
}

 ?>