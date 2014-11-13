Operators are things like arithmetic and logical commands like plus, minus, multiply, and, or. In Ruby, these are all methods, as we have seen. 
In PHP they are separate symbols.

echo 1 + 1;

will output 2.


Arithmetic operators 

	-same in php as in ruby. 
	$x + 3;
	$x - 4;
	$x * 5;
	$x / 6;
	$x % 7;

	Except that the increment / decrement symbols happen before the variable instead of after it in php.
	++$x;
	--$x;


Assignment operators

	The = is called an assignment operator. You use it to assign something to a variable.
	+= and -= are also assignment operators. They work the same way as in Ruby. Say we declare this variable equal to 1:
	$x = 1;
	Then we say:
	$x += 2; 
	This is the same thing as writing:
	$x = $x + 2;
	And it gives us a value of 3 for $x.


	All the arithmetic operators have an equivalent assignment operator:
	$x += 3;
	$x -= 4;
	$x *= 5;
	$x /= 6;
	$x %= 7;
	All of these mean "do the regular operation as if there were no equal sign there, then assign the result to the variable on the left."
	For example, to calculate $x %= 7; We would figure out what $x modulo 7 is equal to, then we would assign that number to $x.

	There's one more operator it's important to know about, and that is '.' It is the equivalent of the String#concat method in ruby.
	$x = "Hello!  " . "How are you?";
	It also has an equivalent assignment operator that let's you concat a string with itself, plus something else.
	$x = "Hello!  ";
	$x .= "How are you?";
	Now $x is equal to "Hello!  How are you?";
