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
