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
	echo "Hello world.";

	print command:
	You can also use the print command, very similar to echo. 
	no parenthesis on either cause both echo and print are constructs. 
	but like a function print takes only one argument. echo can take many.
	also you can use print inside of a more complex expression while you can't with echo 
	also print is a tiny bit slower than echo because it returns a value (1).
	$b ? print "b is true" : print "b is false"



