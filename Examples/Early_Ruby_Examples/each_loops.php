<?php 

class Each_Looper
{
	public $my_fave_drink;

	public function list_my_friends($friends)
	{
		$output_array = array();
		foreach ($friends as $friend) {
			$output_array[] = $friend . " is my friend";
			print_r($output_array);
		}
		return $output_array;
	}

	public function range_multiply($low_bound, $high_bound)
	{
		$product = 1;
		for ($i=$low_bound; $i <= $high_bound; $i++) { 
			$product *= $i;
		}
		return $product;
	}

	public function triple_fave_drink_letters()
	{
		$output_string = "";
		for ($i=0; $i < strlen($this->my_fave_drink); $i++) 
		{
			for ($k=0; $k < 3; $k++) { 
			 	$output_string .= $this->my_fave_drink[$i];
			 } 
		}
		$this->my_fave_drink = $output_string;

	}
}

 ?>