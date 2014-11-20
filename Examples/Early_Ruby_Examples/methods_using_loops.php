<?php 

class Another_Looper
{
	public function upcase_array(&$array_to_upcase)
	{
		//pass by reference so you can modify the receiver.
		$i = 0;
		foreach ($array_to_upcase as $string) {
			$string = strtoupper($string);
			$array_to_upcase[$i] = $string;
			$i++;
		}		
	}

	public function duplicate_each_letter($input_string, $times_to_duplicate)
	{
		$output_string = "";
		for ($i=0; $i < strlen($input_string); $i++) { 
			for ($k=0; $k < $times_to_duplicate; $k++) { 
				$output_string .= $input_string[$i];
			}
		}
		return $output_string;
	}
}

 ?>