<?php 

class Leap_Year_Runner
{
	public function leap_year($year)
	{
    if($year % 400 == 0 || ($year % 4 == 0 && ($year % 100))){
      return true;
    }
    else {
      return false;
    }
	}

}

 ?>