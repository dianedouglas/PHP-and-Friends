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
}


 ?>