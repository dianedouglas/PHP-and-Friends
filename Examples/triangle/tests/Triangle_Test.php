<?php 

require_once "triangle.php";

class Triangle_Test extends PHPUnit_Framework_TestCase
{
	
	function test_triangle_type_not_a_triangle()
	{
		//Arrange
		$test_triangle = new Triangle;
		$side1 = 2;
		$side2 = 3;
		$side3 = 6;

		//Act
		$result = $test_triangle->triangle_type($side1, $side2, $side3);

		//Assert
		$this->assertEquals("Not a triangle.", $result);
	}
	
	function test_triangle_type_equal_triangle()
	{
		//Arrange
		$test_triangle = new Triangle;
		$side1 = 3;
		$side2 = 3;
		$side3 = 3;

		//Act
		$result = $test_triangle->triangle_type($side1, $side2, $side3);

		//Assert
		$this->assertEquals("Equilateral triangle.", $result);
	}
	
	function test_triangle_iso_triangle()
	{
		//Arrange
		$test_triangle = new Triangle;
		$side1 = 3;
		$side2 = 3;
		$side3 = 4;

		//Act
		$result = $test_triangle->triangle_type($side1, $side2, $side3);

		//Assert
		$this->assertEquals("Isosceles triangle.", $result);
	}
	
	function test_triangle_scalene_triangle()
	{
		//Arrange
		$test_triangle = new Triangle;
		$side1 = 5;
		$side2 = 3;
		$side3 = 4;

		//Act
		$result = $test_triangle->triangle_type($side1, $side2, $side3);

		//Assert
		$this->assertEquals("Scalene triangle.", $result);
	}
}

 ?>