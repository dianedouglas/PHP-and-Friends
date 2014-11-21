<?php 

class Message_Printer
{
	public function grade_messager($grade)
	{
		switch($grade)
		{
			case "A":
				return "Excellent work!";
				//no need for break because return stops it.
			case "B":
			case "C":
				return "Good work!";
			case "D":
			case "F":
				return "Welp.";
		}
	}
}

 ?>