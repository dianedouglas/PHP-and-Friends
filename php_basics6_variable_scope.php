
Variable Scope

	Local variables:

		Local variables are variables created inside of functions and they are forgotten when the function finishes. 
		Function parameters (arguments) are also local.
		Their variable scope is limited to that function and they can't be used outside of that function.
		Variables created outside of functions can't be accessed from inside of a function. Instead, pass the var to the function as an argument.
		Unless a variable has been declared otherwise, its scope is local either to the current function or to the code outside of functions depending on where it was created.

	Global variables:

		variables with global scope can be accessed ANYWHERE in your program. 
		If multiple functions need to use the same value, like the speed of sound, or whether or not the current user is logged in.
		or if the data stored in a variable is complex enough that you don"t want to slow things down by repeatedly passing it as an argument.
		use keyword global.

		<?php
		global $is_logged_in;
		?>

		you could have a login function which sets this variable to true or false based on login attempts, 
		and then the rest of the program could use this variable to decide whether or not to display certain things.

		it is a good idea to use global variables with caution. it's easy to debug a program that is broken into small parts that each function independently. 
		if you find your global var has the wrong value, it will be hard to find the code that set it incorrectly.
		also be careful of not reusing a global variable's name
		many people capitalize all the letters in global variables, just like constants, so it's easy to tell what's local and what isn't.

	Static variables:

		static variables are also local, but they do not evaporate at the end of a function. 
		They are not constants, even though the name sounds like it, because their value can be changed.	
		a good example is a function that needs a counter - something to keep track of the number of times that function has been called.
		(like a game where every time you click on the screen a block appears, but you can't have more than 27 blocks 
		- you could have a function to handle displaying a block on click, but when the user clicks the 28th time the function should open a game over window.

		<?php
	function count_this()
	{
		static $count = 0;
		echo "the current count is: $count \n";
		$count++;
	}
	count_this();
	count_this();
	count_this();
	count_this();
		?>

		This will print: 

	the current count is: 0 
	the current count is: 1 
	the current count is: 2 
	the current count is: 3 

		because of the static keyword, the function knows to only declare it once and then skip that line of code.
		because of that, be careful not to change their value or run any expressions on the declaration line, because it will only happen once.
		expressions actually produce an error.

	Superglobals:

		are global variables, but they are created by the php environment. useful info about currently running program and its environment.
		all are associative arrays - basically hashes in ruby. an array with a named index. in javascript an object uses named indexes. 
		$GLOBALS = all vars currently defined in global scope. 
		$_SERVER = server creates this info, such as headers, paths, script locations. not all info guaranteed to be there for every server.
		$_GET = variables passed to the current script vis get method.
		$_POST = same as above with post method.
		$_FILES = files uploaded via post method.
		$_COOKIE = variables passed to curent script with cookies.
		$_SESSION = session variables available to current script.
		$_REQUEST = all info passed from browser.
		$_ENV = variables passed via environment method.

		- except for $GLOBALS, all are named with single _ and all caps. don't name your vars this way to avoid confusion. 
		ex: fetch url of page that referred user to current page.

		$came_from = $_SERVER["HTTP_REFERER"];

		in this example, if the user came directly to the current page by typing in the url directly to the browser, this would output an empty string.

		- careful using these because sometimes hackers can load up these variables with malicious code. so always sanitize superglobals before using them.
		one way is using htmlentities function:
		for example, < is rendered into its html symbol: &lt; so it is harmless.
		so instead, type this:

		$came_from = htmlentities($_SERVER["HTTP_REFERER"]);