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

Comparison operators

	same as in Ruby. ==, !=, >, <, >= <=

Logical operators are also the same as in Ruby.
https://www.tinfoilsecurity.com/blog/ruby-demystified-and-vs

	a logical operator takes two booleans as input and gives you one bool as output.

	&& vs and
	english operators have lower precidence than symbolic. 
	symbolic && has higher precidence than symbolic ||
	english operators have equal precidence and are evaluated left to right.

		and, &&: 

	and is best used to control the flow of logic, since its low precedence and short-circuiting behavior help ensure that all of its left-hand side gets evaluated before any of the right-hand side does. This is useful when you want to chain operations together and have them execute until one of them returns a false-y value (false or nil). and executes from left to right until it finds something false, then it stops (short circuits.) 


	ex:
	1. a = true && false
	2. a = true and false
	difference is:
	1. a is set to the result of true && false, which is false because both sides have to be true for && to be true.
	2. a is set to true, and then both sides are evaluated. 

		or, ||:

	or is the same way except that it evaluates from left to right until it encounters a true. Because at least one true is good enough to make or return true. good for throwing errors is something fails.

	ex: We want to run a function called solve_problem(), and then display an error if it returns false. 

	1. solve_problem() or raise "You did not solve the problem." 
	2. solve_problem() || raise "You did not solve the problem." 
	differnece is:
	1. This works.  if solve_problem() returns true then there's no need for or to continue because it just needs at least one true. The error is not raised. But if solve_problem() returns false, then or executes the right side, which raises our desired error. 
	2. This would not run at all. raising an error doesn't return a boolean, so it doesn't know how to evaluate the two sides.

		chaining and/or vs &&/||

	a or b and c 
	goes in this order
	(a or b) and c

	but 
	a || b && c
	goes in this order
	a || (b && c)

	main differences to remember:
	and/or will short circuit and go from left to right with equal precidence with regards to each other.
	&& / || will evaluate before assignment and other things in your expression - they don't always go from left to right, and the whole expression will always be looked at to make sure it can be evaluated to bool. Also && happens before ||.

	exclusive or:
	ruby		php
	^			xor
	instead of needing at least one true, it must have only one true to return true. 
	true ^ false
	=> true
	true || false
	=> true
	true || true 
	=> true
	true ^ true
	=> false

	not much difference between & and && in ruby except that & is the method name. && is the operator. so tell students that each of the logical symbols should just be doubled except for exclusive or. if you talk about them, in both languages and/or are cool because they always go left to right and short circuit early - which is good for program flow. use parenthesis if precedence is being weird in a chained expression.

	master table:
	ruby  		php 		english 			example
	&			&&			and 				true & false = false, true && false = true

	|			||			or 					true | false = true, true || false = true
	
	and 		and 		and 				a game where you get three plays unless one is a fail and returns false. 
												first_play() and second_play() and third_play() and winner()
	
	or 			or 			or 					a function that should call another function with no bool result only if it returns false.
												test_thing() or show_actions_based_on_false()
	
	^			xor	   		exclusive or 		creating a cleaning product. it can have either ammonia or bleach in it, whichever one you have, 
												but not both! 	ingredient = get_ammonia() ^ get_bleach()
	
	! 			! 			not 				if !snowing?() 
													(walk_to_school())
												end


