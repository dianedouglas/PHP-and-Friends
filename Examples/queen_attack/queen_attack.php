<?php 

class Queen
{
	public function queen_can_attack($queen_xy, $attack_xy)
	{
		if($queen_xy[1] == $attack_xy[1] || $queen_xy[0] == $attack_xy[0]){
			return true;
		}
	}
}


 ?>