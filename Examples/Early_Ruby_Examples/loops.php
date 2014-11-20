<?php 

class Looper 
{
	public function remove_last_four($input_array)
	{
		for($i = 0; $i < 4; ++$i)
		{
			array_pop($input_array);
		}
		return $input_array;
	}

	public function looping_multiplication($starting_number, $times_to_add_to_itself)
	{
		$i = 0;
		while(++$i < $times_to_add_to_itself)
		{
			$starting_number += $starting_number;
		}
		return $starting_number;
	}

	public function counting_triples_array($times_to_triple)
	{
		$output_array = array();
		for($i = 0; $i < $times_to_triple; ++$i)
		{
			for ($k = 0; $k < 3; $k++) { 
				$output_array[] = $i;
			}
		}
		return $output_array;
	}
}

 ?>