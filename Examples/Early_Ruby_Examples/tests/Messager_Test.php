<?php 

require_once "more_complex_branching.php";

class Messager_Test extends PHPUnit_Framework_TestCase
{
	public function test_grade_messager_A()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$grade = "A";

		//Act
		$result = $test_message_printer->grade_messager($grade);

		//Assert	
		$this->assertEquals("Excellent work!", $result);
	}

	public function test_grade_messager_B()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$grade = "B";

		//Act
		$result = $test_message_printer->grade_messager($grade);

		//Assert	
		$this->assertEquals("Good work!", $result);
	}

	public function test_grade_messager_C()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$grade = "C";

		//Act
		$result = $test_message_printer->grade_messager($grade);

		//Assert	
		$this->assertEquals("Good work!", $result);
	}

	public function test_grade_messager_D()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$grade = "D";

		//Act
		$result = $test_message_printer->grade_messager($grade);

		//Assert	
		$this->assertEquals("Welp.", $result);
	}

	public function test_grade_messager_F()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$grade = "F";

		//Act
		$result = $test_message_printer->grade_messager($grade);

		//Assert	
		$this->assertEquals("Welp.", $result);
	}
}



 ?>