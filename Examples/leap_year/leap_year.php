<?php 

class Leap_Year_Runner
{
	public function leap_year($year)
	{
		if ($year % 100 == 0 || $year % 4){
			return false;
		}
		else {
			return true;
		}
	}

}

 ?>