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

	//**********************************************************

	public function test_check_temperature_balmy()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$temp = 65;

		//Act
		$result = $test_message_printer->check_temperature($temp);

		//Assert
		$this->assertEquals("It's balmy outside!", $result);

		//Arrange, Act Assert: Other conditions to meet for this test.		//Arrange: Let's check a  conditions to meet for this test.
		$temp = 60;
		$result = $test_message_printer->check_temperature($temp);
		$this->assertEquals("It's balmy outside!", $result);
		$temp = 80;
		$result = $test_message_printer->check_temperature($temp);
		$this->assertEquals("It's balmy outside!", $result);


	}

	public function test_check_temperature_notbalmy()
	{
		//Arrange
		$test_message_printer = new Message_Printer;
		$temp = 50;

		//Act
		$result = $test_message_printer->check_temperature($temp);

		//Assert
		$this->assertEquals("Let's complain about weather!", $result);

		//Arrange, Act Assert: Other conditions to meet for this test.		//Arrange: Let's check a  conditions to meet for this test.
		$temp = 95;
		$result = $test_message_printer->check_temperature($temp);
		$this->assertEquals("Let's complain about weather!", $result);
	}
}



 ?>