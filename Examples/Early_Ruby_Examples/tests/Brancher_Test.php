<?php 

require_once "using_branching_and_booleans_in_methods.php";


class Brancher_Test extends PHPUnit_Framework_TestCase
{
	public function test_absolutely_larger_with_positive()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 2;

		//Act
		$result = $test_brancher->absolutely_larger($input_int);

		//Assert
		$this->assertEquals(3, $result);		
	}

	public function test_absolutely_larger_with_0()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 0;

		//Act
		$result = $test_brancher->absolutely_larger($input_int);

		//Assert
		$this->assertEquals(1, $result);		
	}

	public function test_absolutely_larger_with_negative()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = -2;

		//Act
		$result = $test_brancher->absolutely_larger($input_int);

		//Assert
		$this->assertEquals(-3, $result);		
	}

	public function test_can_drink_alcohol_boundary()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 21;

		//Act
		$result = $test_brancher->can_drink_alcohol($input_int);

		//Assert
		$this->assertTrue($result);
	}

	public function test_can_drink_alcohol_minor()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 20;

		//Act
		$result = $test_brancher->can_drink_alcohol($input_int);

		//Assert
		$this->assertFalse($result);
	}

	public function test_can_drink_alcohol_greater()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 22;

		//Act
		$result = $test_brancher->can_drink_alcohol($input_int);

		//Assert
		$this->assertTrue($result);
	}

	public function test_has_two_digits_f()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 9;

		//Act
		$result = $test_brancher->has_two_digits($input_int);

		//Assert
		$this->assertFalse($result);
	}

	public function test_has_two_digits_t()
	{
		//Arrange
		$test_brancher = new Brancher;
		$input_int = 19;

		//Act
		$result = $test_brancher->has_two_digits($input_int);

		//Assert
		$this->assertTrue($result);
	}
}

 ?>