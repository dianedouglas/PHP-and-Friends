<?php

	function triple($number_to_multiply)
	{
		return 3 * $number_to_multiply;
	}
	
	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}

?>

Just like defining a function in javascript at parse time.
http://stackoverflow.com/questions/336859/var-functionname-function-vs-function-functionname

calling a function is just like calling a method in ruby, it is still an action to take, you still have to use parenthesis,
except that you don't need to talk to an object to call a method in php. methods can be defined by themselves and called by name.

function calls don't care if you have more arguments than needed. it will just use the needed ones from left to right and ignore extras. 
there will be an error if there are not enough arguments for a function call.

<?php

// triple(); will cause an error.
echo triple(4);
echo triple(4, 5, 6, 7, 8);
//both of the above will print the number 12. Extra numbers in second call will be ignored.

?>

you can input and output multiple values from functions. 

