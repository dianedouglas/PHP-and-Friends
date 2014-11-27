VARIABLES

	Put $ in front of all variables. Makes the interpreter faster because it immediately knows what is a variable and what isn't.

	Example of variable assignment:

	<?php
		$a_number = 1;
		$a_string = "Hello";
		$an_array = array("First thing", "Second thing", "Third thing");
	?>

	Variable types:

	-PHP is very loosely typed. You don't need to declare variables before using them, 
	and php will automatically convert the variable type to the one you need based on context. called implicit casting. 
	also explicit casting for hwen you want to bypass auto casting. ex: if you divide 2 ints you'll get a floating point by default for accuracy.
	if you want an int, do this
	$c = (int) ($a / $b);
	in the above expression, put $a / $b in parenthesis so that not just $a gets converted. 

	(int) (integer)
	(bool) (boolean)
	(float) (double) (real)
	(string)
	(array)
	(object)
	
	- Strings are the same as in Ruby, except there's a difference between double and single quotes.
	$name = "Diane Douglas";

		single quotes are a literal string. double quotes will try to evaluate any variables inside of the string.

		$count = 8;
		$bulletin = "$count people have accepted your invitation";
		echo $bulletin;
		=> 8 people have accepted your invitation

		$bulletin = '$count people have accepted your invitation';
		echo $bulletin;
		=> $count people have accepted your invitation
		allows you to not worry about escape characters, except for the single quote and the backslash: \' \\

		within a double quote if you need to escape anything use a backslash. \n \t \" \\ are standard ones you should know. 

		you can use multiline strings by enclosing them in quotes, or what's called a heredoc symbol:

$longvar = <<<_BOOKEND
	blah blah blah
		more stuff
			test test test
_BOOKEND;
echo $longvar;

		$longvar is set to equal the entire string within the _BOOKEND symbols, including whitespace. But remember that your html will 
		reformat your whitespace anyway. 
		the closing symbol must be at the beginning of the last line, by itself, followed by a semi colon. 
		Could be named anything but convention is start with _ and use capitals. 

	- Integers and floating-point numbers can be assigned in the same way. 
		$age = 17;
		$exact_age = 17.5;

	- Arrays have 3 different kinds: 
	- Indexed arrays: 

		Conceptually the same in php as arrays in Ruby, but they are written differently. Here is an empty array in both languages.
		Ruby:
		my_empty_collection = Array.new()
		my_favorite_numbers = [1, 2, 3]
		PHP:
		$my_empty_collection = array();
		$my_favorite_numbers = array(1, 2, 3);

		To get the first item out of an array in either language we can use square brackets. Remember both count from 0:
		my_favorite_numbers[0]
		$my_favorite_numbers[0]

	- Multi-dimensional arrays:

		These are really just normal arrays nested inside of each other and we could do it in ruby too.
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

	-Associative Arrays:

		Essentially hashes. These arrays have named indexes instead of elements that are numbered from 0.
		Construct one with the array keyword: $my_variable = array();
		But inside the parenthesis, the array looks exactly like a ruby hash. 

		in Ruby:
		ages = { "Diane" => 28, "Genevieve" => 0.4, "Mary Poppins" => "Fictional Character" }
		in PHP:
		$ages = array( "Diane" => 28, "Genevieve" => 0.4, "Mary Poppins" => "Fictional Character" );

		It doesn't matter what type of variables you want to store in an associative array or a hash, but they are indexed by string.
		Then you can fetch them using that string.

		in Ruby:
		> ages["Diane"]
		=> 28

		in PHP
		echo $ages["Diane"];
		=> 28

	-constants
		like regular variables but without the dollar sign, and you cannot alter its value once it has been set. 
		define("EINSTEIN_EQUATION", "e=mc**2");
		now that is defined, you can retrieve it by name.
		$equation_to_display = EINSTEIN_EQUATION;
		good for storing file paths, or magic numbers like the speed of light.
		must use the define function and no dollar sign.
		good practice to name them with only uppercase letters.

		there are also predefined constants. always named like this __THING__
		useful for debugging:
		__LINE__ = current line number
		__FUNCTION__ = current function. also one for class, method and namespace (which is defined at compile time).
		ex:
		want to see if your program has skipped some code? place several copies of this line into your code to watch the flow of the program.2
		echo "The program has reached " .__LINE__ . " of FILE " . __FILE__;

		__FILE__ = absolute file path to the current file.
		__DIR__ =  path to directory of current file.


	- Variables can be assigned to each other in the normal way 
	$name = $other_name;

	- Variable naming rules are pretty much the same as in Ruby:
		* must start with lowercase letter of the alphabet or a _
		* must only contain a-z, A-Z, 0-9 and _ (this is the only rule that is a little different than in Ruby, which is a little more forgiving about special characters.)
		* separate words are separated by underscore and cannot contain spaces.
		* variable names are case sensitive. 

	- Variable naming conventions:

		$descriptive_names
		$lower_case_letters
		$underscores_not_spaces
		