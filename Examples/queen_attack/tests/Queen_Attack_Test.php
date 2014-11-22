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
}

 ?>