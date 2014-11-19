<?php 

class BankAccountTest extends PHPUnit_Framework_TestCase
{
	public function testDepositingMoney()
	{
		//Arrange
		$account = new BankAccount(50);
		//Act
		$account->addToTotal(1);
		//Assert
		$this->assertEquals(51, $account->getTotal());
	}
}

 ?>