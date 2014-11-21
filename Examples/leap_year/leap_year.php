<?php 

class Leap_Year_Runner
{
	public function leap_year($year)
	{
    if($year % 400 == 0){
      return true;
    }
    elseif ($year % 4 || $year % 100 == 0){
      return false;
    }
    else {
      return true;
    }
	}

}

 ?>