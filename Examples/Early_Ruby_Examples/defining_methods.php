<?php 

class My_New_Class
{
	public function gimme_ten($input_integer)
	{
		return 10;
	}

	public function half($input_float)
	{
		return $input_float / 2.0;
	}

	public function next_in_line($input_array)
	{
		$first_element = array_shift($input_array);
		array_push($input_array, $first_element);
		return $input_array;
	}

	public function trim($input_array)
	{
		array_shift($input_array);
		array_pop($input_array);
		return $input_array;
	}
}

 ?>