PHP Basics 1

SETUP THE FILE

	Give your files the .php extension to give them access to the whole PHP language.
	When this file is read by the server, which is the master chef, you can telll her that you are using php code by using these opening and closing tags 

	<?php         
	  Code happens here
	?>

	Everything outside of those tags is sent to your browser as HTML.

	Test your basic code here!
	http://writecodeonline.com/php/


BASICS: COMMENTS, WHITESPACE, PRINTING

	// I'm making a short one line comment.

	/*
	Here's a long comment.
	Happens to be a haiku.
	It needs this syntax.
	*/

	Indentation and whitespace between lines and during lines doesn't matter but lines must be ended with a semicolon.

	Print to the browser with the command 'echo'
	echo $name;


VARIABLES

	Put $ in front of all variables. Makes the interpreter faster because it immediately knows what is a variable and what isn't.

	Example of variable assignment:

	<?php
		$a_number = 1;
		$a_string = "Hello";
		$an_array = array("First thing", "Second thing", "Third thing");
	?>

	Variable types:

	- Strings are the same as in Ruby, except there's a difference between double and single quotes.
	$name = "Diane Douglas";

	- Integers and floating-point numbers can be assigned in the same way. 
	$age = 17;
	$exact_age = 17.5;

	- Arrays are conceptually the same in php as in Ruby, but they are written differently. Here is an empty array in both languages.
	Ruby:
	my_empty_collection = Array.new()
	PHP:
	$my_empty_collection = array();

	To get the first item out of an array in either language we can use square brackets. Remember both count from 0:
	my_collection[0]
	$my_collection[0]

	- Multi-dimensional arrays. However, these are really just normal arrays nested inside of each other and we could do it in ruby too.
	Let's set up spaces for a game of tic tac toe in both languages. 

	One row in Ruby would be:
	> first_row = ['x', 'o', 'x']

	Now we need 3 of these:
	> first_row = ['x', 'o', 'x']
	> second_row = ['o', 'x', 'x']
	> third_row = ['o', 'o', 'o']

	Now let's put them together and make an array of arrays! First here's a blank array:
	> three_d = []
	So inside of that we will put:
	> three_d = [ first_row, second_row, third_row ]
	If we type that into irb, we will get this in return:
	=> [["x", "o", "x"], ["o", "x", "x"], ["o", "o", "o"]]
	We can access the first row like this:
	> three_d[0]
	=> ["x", "o", "x"]
	What if we only want the middle square of the first row? Well, remember all return values are objects, and the object returned by three_d[0] is an array.
	So array commands should work on it too. 
	> three_d[0][1]
	That means, get me the second element of the first element of the array three_d. So we successfully get the string stored there:
	=> "o"

	In php we would make arrays within arrays in a similar way. First let's make one row:
	array('x', 'o', 'x')
	Each element is separated by commas within parenthesis. So we can make an array of arrays the same way:
	$php_three_d = array(array('x', 'o', 'x'), array('o', 'x', 'x'), array('o', 'o', 'o'));
	And we can access the middle square of the first row in the same way:
	$php_three_d[0][1];
	Just don't forget the $ and the ;

	- Variables can be assigned to each other in the normal way 
	$name = $other_name;

	- Variable naming rules are pretty much the same as in Ruby:
		* must start with lowercase letter of the alphabet or a _
		* must only contain a-z, A-Z, 0-9 and _ (this is the only rule that is a little different than in Ruby, which is a little more forgiving about special characters.)
		* separate words are separated by underscore and cannot contain spaces.
		* variable names are case sensitive. 




Extra notes / exceptions.

You can force a web server to pass .htm or .html files to be sent to the PHP parser too.

You may come accross this syntax as well, but it is deprecated.
<? ... ?>

It is also allowed to start your document with <?php and then not bother to close the tag 
It is even encouraged sometimes because it prevents excess whitespace 


