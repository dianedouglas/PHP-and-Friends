<?php 

class Brancher
{
	
	public function absolutely_larger($input_int)
	{
		if($input_int >= 0)
		{
			$input_int += 1;
		}
		else
		{
			$input_int -= 1;
		}
		return $input_int;
	}
	
	public function can_drink_alcohol($input_int)
	{
		return $input_int >= 21;
	}

	public function has_two_digits($input_int)
	{
		return strlen((string) $input_int) == 2;
	}
}

 ?>