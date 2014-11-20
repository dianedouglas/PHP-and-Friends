<?php 

class Subtractor_Combiner
{
	public function subtract($from_this, $subtract_this)
	{
		return $from_this - $subtract_this;
	}

	public function combine($left_string, $right_string)
	{
		return $left_string . $right_string;
	}
}

?>