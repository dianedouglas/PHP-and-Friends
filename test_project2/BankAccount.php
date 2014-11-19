<?php 
class BankAccount
{
	private $total;
	public function __construct($starting_amount)
	{
		$this->total = $starting_amount;
	}
	public function getTotal()
	{
		return $this->total;
	}
	public function addToTotal($deposit)
	{
		$this->total += $deposit;
	}
}
 ?>