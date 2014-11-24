mistake journal

- Class members do not use the $. 
	Undefined variable: assertEquals

	$this->assertEquals() 
	not
	$this->$assertEquals()

-semicolon at the end of require_once lines
	Unexpected class.

-remember the opening bracket in a class before defining a function.
	PHP Parse error:  syntax error, unexpected 'public' (T_PUBLIC), expecting '{' 

-remember to open the correct file in your require_once for PHPUnit. 
	Fatal error: Class 'Message_Printer' not found in [test file]

-can't make 2 functions with the same name in your tests.

-forgot the semicolon at the end of a line.

-when you are creating an array using the range function, 
don't use the blank array notation, otherwise you will store the entire array in the first index of another array.
no error message.

		$alphabet_first_half = range('a', 'm');
		not
		$alphabet_first_half[] = range('a', 'm');

-you have to name your test file with the word "Test" in it.. 

	Classname_Test.php or ClassnameTest.php

	otherwise it will say "No tests executed!"

	also have to make sure to require_once the file name which includes the class(es) you are testing.

-because class names and function names are case insensitive. this is very important because: 
	you can't have a class and a member function of that class named the same thing, or even the same thing with different capitalization.
	when you try to call the function it will give you this error:

	Missing argument 1 for Leap_Year::leap_year(), called in ...

	incidentally, you can put constants into your function arguments in tests just like variables. this was not the problem. 



11-24

- Invalid argument supplied for foreach()
was using a string instead of an array as the first argument for foreach().

- Constants must be defined outside of functions if they are within classes. use the const word, not define. needs more research. 

- also can't use arrays for constants

- remember you can't have 2 functions with the same name in your tests. 
