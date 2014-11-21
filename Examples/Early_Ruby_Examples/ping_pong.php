<?php 

class Ping_Pong
{
	public function ping_ponger($final_number)
	{
		$full_range = range(0, $final_number);
		foreach ($full_range as $count) {
			if($count % 3 == 0 && $count != 0){
				$full_range[$count] = "ping";
			}
			elseif ($count % 5 == 0 && $count != 0) {
				$full_range[$count] = "pong";
			}
		}
		return $full_range;
	}
}

 ?>