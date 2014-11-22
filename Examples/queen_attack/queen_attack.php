<?php 

class Queen
{
	public function queen_can_attack($queen_xy, $attack_xy)
	{
		if($queen_xy[1] == $attack_xy[1]){
			return true;
		}
	}
}


 ?>