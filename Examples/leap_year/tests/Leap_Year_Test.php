<?php 

require_once "leap_year.php";

class Leap_Year_Test extends PHPUnit_Framework_TestCase
{
	public function test_false_not_divisible_by_4()
	{
		//Arrange
		$leap_year_object = new Leap_Year_Runner;

		//Act
		$result = $leap_year_object->leap_year(1999);

		//Assert
		$this->assertFalse($result);
	}

	public function test_true_if_divisible_by_4()
	{
		//Arrange
		$leap_year_object = new Leap_Year_Runner;

		//Act
		$result = $leap_year_object->leap_year(1604);

		//Assert
		$this->assertTrue($result);
	}

	public function test_false_if_divisible_by_100()
	{
		//Arrange
		$leap_year_object = new Leap_Year_Runner;


		//Act
		$result = $leap_year_object->leap_year(1000);

		//Assert
		$this->assertFalse($result);
	}

	public function test_true_if_divisible_by_400()
	{
		//Arrange
		$leap_year_object = new Leap_Year_Runner;


		//Act
		$result = $leap_year_object->leap_year(1600);

		//Assert
		$this->assertTrue($result);
	}
}


 ?>