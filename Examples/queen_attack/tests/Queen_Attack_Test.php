<?php 

require_once "queen_attack.php";

class Queen_Test extends PHPUnit_Framework_TestCase
{
	
	function test_queen_can_attack_horizontal()
	{
		//Arrange
		$test_queen = new Queen;
		$queen_xy = array(1, 1);
		$attack_xy = array(4, 1);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);
	}
	
	function test_queen_can_attack_vert()
	{
		//Arrange
		$test_queen = new Queen;
		$queen_xy = array(1, 1);
		$attack_xy = array(1, 4);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);
	}
	
	function test_queen_can_attack_diagonal()
	{
		//Arrange
		$test_queen = new Queen;
		$queen_xy = array(3, 2);
		$attack_xy = array(4, 3);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);

		//second diagonal condition
		$queen_xy = array(3, 2);
		$attack_xy = array(2, 1);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);

		//third diagonal condition
		$queen_xy = array(3, 2);
		$attack_xy = array(2, 3);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);

		//fourth diagonal condition
		$queen_xy = array(3, 2);
		$attack_xy = array(4, 1);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(true, $result);
	}
	
	function test_queen_cannot_attack()
	{
		//Arrange
		$test_queen = new Queen;
		$queen_xy = array(1, 1);
		$attack_xy = array(5, 8);

		//Act
		$result = $test_queen->queen_can_attack($queen_xy, $attack_xy);

		//Assert
		$this->assertEquals(false, $result);
	}
}

 ?>