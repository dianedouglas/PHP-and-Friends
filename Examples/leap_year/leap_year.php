<?php 

class Leap_Year_Runner
{
	public function leap_year($year)
	{
		if ($year % 100 == 0){
			return false;
		}
		elseif ($year % 4 ){
			return false;
		}
		else {
			return true;
		}
	}

}

 ?>