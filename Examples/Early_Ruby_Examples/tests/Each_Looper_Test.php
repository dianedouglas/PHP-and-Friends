<?php 

require_once "each_loops.php";

class Each_Looper_Test extends PHPUnit_Framework_TestCase
{
	public function test_list_my_friends()
	{
		//Arrange
		$test_each_looper = new Each_Looper;
		$list_of_friends = array("Matt", "Beth", "Jessica", "Dave", "Bryan", "Nich");
		$test_result = array("Matt is my friend", "Beth is my friend", "Jessica is my friend", "Dave is my friend", "Bryan is my friend", "Nich is my friend");
		//Act
		$result = $test_each_looper->list_my_friends($list_of_friends);

		//Assert
		$this->assertEquals($test_result, $result);
	}

	public function test_range_multiply()
	{
		//Arrange
		$test_each_looper = new Each_Looper;
		$test_lowbound = 1;
		$test_highbound = 4;

		//Act
		$result = $test_each_looper->range_multiply($test_lowbound, $test_highbound);

		//Assert
		$this->assertEquals(24, $result);
	}

	public function test_triple_fave_drink_letters()
	{
		//Arrange
		$test_each_looper = new Each_Looper;
		$test_each_looper->my_fave_drink = "Pepsi";

		//Act
		$test_each_looper->triple_fave_drink_letters();

		//Assert
		$this->assertEquals("PPPeeepppsssiii", $test_each_looper->my_fave_drink);
	}
	
}


 ?>