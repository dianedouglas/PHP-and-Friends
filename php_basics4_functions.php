<?php

	function triple($number_to_multiply)
	{
		return 3 * $number_to_multiply;
	}
	
	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}

	//multiple inputs
	//statement to test function - what the call should look like at the end.
	echo capitalize_three_names("MICHAEL", "dustin", "mAuReEn");
	//should output: Michael Dustin Maureen

	function capitalize_three_names($n1, $n2, $n3)
	{
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));

		return $n1 . " " . $n2 . " " . $n3;
	}


?>

Declaring:
	Just like defining a function in javascript at parse time.
	http://stackoverflow.com/questions/336859/var-functionname-function-vs-function-functionname

	function name must start with a a letter or underscore followed by any number of letters, numbers or underscores.
	function names are NOT CASE SENSITIVE. PRINT == pRiNt

	you can use one or more return statements in a function.
	return a value and force the function to stop running and return to the point in the code where it was called.

Calling:
	function calls are evaluated from the inside out. 		
	my_third_function(my_second_function(my_first_function("input")));

	calling a function is just like calling a method in ruby, it is still an action to take, you still have to use parenthesis,
	except that you don't need to talk to an object to call a method in php. methods can be defined by themselves and called by name.
	if you forget parenthesis on a function, php wll think you're talking to a constant. the error looks like this:

	Notice: Use of undefined constant fname - assumed 'fname'

	note: print is the only function you don't need parenthesis around.

	function calls don't care if you have more arguments than needed. it will just use the needed ones from left to right and ignore extras. 
	there will be an error if there are not enough arguments for a function call.

	<?php

	// triple(); will cause an error.
	echo triple(4);
	echo triple(4, 5, 6, 7, 8);
	//both of the above will print the number 12. Extra numbers in second call will be ignored.

	?>

	you can input and output multiple values from functions. you can output an array to get multiple values, good if it's a variable number of values.

	some useful builtin functions:
		strrev("mystring"); //reverse string
		str_repeat("Hip ", 2); //repeat str "Hip " twice.
		strtoupper("hooray!"); //ruby .upcase()
		strtolower("OPPOSITE OF STRTOUPPER"); 
		ucfirst("oNLY THE FIRST LETTER"); //capitalize first letter

Passing arguments by reference:
	Normally whan you pass an argument to a function, the value is copied into the temporary variables used by the function. 
	If there's a lot of data being passed to the function this can be time and memory consuming. 
	Also, what if you want to modify the variable directly rather than copying its value into the function, using it and returning something else?
	Pass the reference in instead - this is the memory address of the variable you want to read/write.

	you can also avoid returning and passing them in by modifying global variables. 
	make a variable accessible throughout the program by declaring it as global inside your function.

	global $a1; $a1 *=2;

<?php

	$my_number = 0;
	echo $my_number;

	function numerology(&$starting_number) //tell the function to expect use a reference to the given variable, take the address and use it for the temp var $starting_numbrer.
	{
		$starting_number *= 2;
		$starting_number += 2;
		//don't need to return anything because we are directly modifying the variable at the address of &$starting_number.
	}

	numerology($my_number); //pass the variable like normal in function call. function has & in definition so it knows to strip the address.
	echo $my_number; //remember you can't do this: echo numerology($my_number); because this function returns nothing. 
	//it modifies whatever var is passed to it.

?>

on pointers and references: http://programmers.stackexchange.com/questions/195337/is-there-any-difference-between-pointers-and-references

