<?php 

class Message_Printer
{
	public function grade_messager($grade)
	{
		// switch($grade)
		// {
		// 	case "A":
		// 		return "Excellent work!";
		// 		//no need for break because return stops it.
		// 	case "B":
		// 	case "C":
		// 		return "Good work!";
		// 	case "D":
		// 	case "F":
		// 		return "Welp.";
		// }

		if($grade == "A")
		{
			return "Excellent work!";			
		}
		elseif($grade == "B" || $grade == "C")
		{
			return "Good work!";
		}
		else
		{
			return "Welp.";
		}
	}

	public function check_temperature($temp)
	{
		if($temp < 60 || $temp > 80)
		{
			return "Let's complain about weather!";
		}
		else{
			return "It's balmy outside!";
		}	
	}

	public function alphabetical_name($name)
	{
		$alphabet_first_half = range('a', 'm');
		$name[0] = strtolower($name[0]);
		if (in_array($name[0], $alphabet_first_half)) {
			return "You're in the first half of the alphabet!";
		}
		else {
			return "You're in the second half of the alphabet!";
		}
	}
}

 ?>