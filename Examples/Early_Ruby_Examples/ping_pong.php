<?php 

class Ping_Ponger
{
	public function ping_pong($final_number)
	{
		$full_range = range(0, $final_number);
		foreach ($full_range as $count) {
			if($count == 0){
				continue;
			}
			elseif ($count % 3 == 0 && $count % 5 == 0) {
				$full_range[$count] = "ping-pong";
			}
			elseif($count % 3 == 0){
				$full_range[$count] = "ping";
			}
			elseif ($count % 5 == 0) {
				$full_range[$count] = "pong";
			}
		}
		return $full_range;
	}
}

 ?>