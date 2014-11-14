when writing the conditions for branching, use any expression. 
remember:
TRUE and true = 1
FALSE and false = NULL (nothing)

3 types of non-looping conditionals

? = ternary

	? is like an if statement, except it's meant to be a short one line command where instead of 'else' you have a colon.
	$a_variable_or_expression ? print "This side happens if the left side of the question mark is true" : print "else this side happens";
	you can also assign the return value of a ternary operator to a variable:

	$fuel = 0.5;
	$enough = $fuel < 1 ? "there is not enough fuel." : "there is totally enough fuel.";
	echo $enough;

	good for testing if a variable is set before passing it to a function, or assigning the larger of two values to a variable.
	examples: 

<?php 
	$x = 1;
	$y = 0;
	$save_larger = $x > $y ? $x : $y;
	echo $save_larger . "\n";
	$y = 10;
	$save_larger = $x > $y ? $x : $y;
	echo $save_larger;
	//save x if it's larger than y, otherwise save y.
	//this will first print 1 because 1 > 0
	//then it will print 10 because we reset y to equal 10, which is greater than 1.
?>

<?php
	function print_enthusiastically($phrase)
	{
		echo "\n" . $phrase . "!!!!!";
	}

	//we don't want to call this function with a blank phrase, so we could write...
	$my_empty_variable ? print_enthusiastically($my_empty_variable) : print "\n nothing to print yet.";
	$my_empty_variable = "I have something to say";
	$my_empty_variable ? print_enthusiastically($my_empty_variable) : print "\n nothing to print yet.";
	//this will first print "nothing to print yet." with a blank line before it. 
	//then it'll print another blank line and then "I have something to say!!!!!"
?>

if statements:

	think of an if statement like a detour along a highway that you have to follow if your car is above a certain weight, 
	or some other condition. when you're done with the detour you go back to where you started and continue driving.

	usually use curly braces in an if statement, unless it's only one line. curly braces can start wherever. they are like do/end in ruby.
	also indent code inside of conditionals.

	if ($age < 21)
	{
		echo "No drinks for you!";
	}

	if ($thing) echo "$thing is true!";

	both valid:

	if ($age < 21) {
		echo "No drinks for you!";
	}

	if ($age < 21)

	{
		echo "No drinks for you!";
	}

	an else statement is like a fork in the road. you must take either the if fork or the else fork.
	an elseif statement is like adding a third road to your fork. 
	$age = 21;
	if ($age < 21)
	{
		echo "No drinks for you!";
	}
	elseif ($age == 21)
	{
		echo "Drinking galore!";
	}
	else
	{
		echo "This is probably old hat for you.";
	}

	you can leave out else if you want, though it's not a good idea, and it has to go after any elseifs.

switch statement:

	switch is like an if/elseif/else conditional, but it relies on only one expression or variable to decide which code to run,
	that expression doesn't have to be true false, it could have many values.
	if you have too many elseifs, it's probably time to consider a switch.
	rather than a series of detours off a freeway, this is more like a menu system, 
	where a single string decides which course of action to take: "save", "open", "close" etc

	$menu_choice = "Close";
	switch ($menu_choice)
	{
		case "Save":
			echo "Save the file.";
			break;
		case "Open...":
			echo "Open the file selection dialog.";
			break;
		case "Close":
			echo "Quit the program.";
			break;
	}

	all the echo statements above could be function calls to do much more complex things.
	instead of curly brackets, use : and break; to begin and end the block of code to execute for each possible outcome.
	important: without break;, all of the code after the first case which passes will be executed, up until the next break statement.
	for example:

	$menu_choice = "Save";
	switch ($menu_choice)
	{
		case "Save":
			echo "Save the file.";
		case "Open...":
			echo "Open the file selection dialog.";
		case "Close":
			echo "Quit the program.";
	}
	this will run all three blocks of code because the first one is true. the output will be:
	Save the file.Open the file selection dialog.Quit the program.

	$menu_choice = "Save";
	switch ($menu_choice)
	{
		case "Save":
			echo "Save the file.";
		case "Open...":
			echo "Open the file selection dialog.";
			break;
		case "Close":
			echo "Quit the program.";
	}

	this will output:
	Save the file.Open the file selection dialog.

	it stops before close because of the break under open.

	it's also a good idea to include a default case for when none of the case conditions are met. this is like an else.
	default doesn't need a break after it if it's at the end of the case.

	$menu_choice = "I don't want to choose!";
	switch ($menu_choice)
	{
		case "Save":
			echo "Save the file.";
			break;
		case "Open...":
			echo "Open the file selection dialog.";
			break;
		case "Close":
			echo "Quit the program.";
			break;
		default: 
			echo "I have no idea what to do with that.";
	}

	if you want, you can replace the curly brackets starting and ending a switch with a single colon and an endswitch; statement at the end. 
	but this isn't common

	switch ($thing):
		case "blah":
			//do stuff
			break;
		default:
			echo "other stuff";
	endswitch;

