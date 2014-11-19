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



Install PHP via Homebrew (comes with built in commandline web server)


	1.	brew tap josegonzalez/php

	you'll get this output:

		Cloning into '/usr/local/Library/Taps/josegonzalez/homebrew-php'...
		remote: Counting objects: 7290, done.
		remote: Compressing objects: 100% (27/27), done.
		remote: Total 7290 (delta 16), reused 5 (delta 5)
		Receiving objects: 100% (7290/7290), 1.47 MiB | 357.00 KiB/s, done.
		Resolving deltas: 100% (4783/4783), done.
		Checking connectivity... done.
		Tapped 416 formulae
		It looks like you tapped a private repository. To avoid entering your
		credentials each time you update, you can use git HTTP credential caching
		or issue the following command:

		  cd /usr/local/Library/Taps/josegonzalez/homebrew-php
		  git remote set-url origin git@github.com:josegonzalez/homebrew-php.git

	2.	brew tap homebrew/versions

	output:
		
		Cloning into '/usr/local/Library/Taps/homebrew/homebrew-versions'...
		remote: Counting objects: 2516, done.
		remote: Compressing objects: 100% (6/6), done.
		remote: Total 2516 (delta 1), reused 0 (delta 0)
		Receiving objects: 100% (2516/2516), 831.65 KiB | 814.00 KiB/s, done.
		Resolving deltas: 100% (1446/1446), done.
		Checking connectivity... done.
		Tapped 161 formulae

	3.	go to php.net/downloads.php to check what version is the 'current stable' PHP release. then run this command:

		brew install php56

		replacing the '56' with the first two digits of the current stable version number from php.net.
		this will take a moment.

	4.	close the terminal window and open a new one.
	5.  check to see if installation has succeded by running this command to get the current version number:

		php -v

		this should output something like this.

		PHP 5.6.3 (cli) (built: Nov 19 2014 10:28:38) 
		Copyright (c) 1997-2014 The PHP Group
		Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies

	6.	You may have to add your version of php to the path environment variable. 
		echo 'export PATH=/usr/local/bin:$PATH' >>~/.bash_profile
		
		echo means print, so it is going to print the string enclosed in quotes.
		the >> means to output the results of the statement to the left into the destination file defined to the right, which in this case
		is the file .bash_profile in your home directory, which is where '~' takes you. 
		the line sets the path variable equal to the current path variable's contents, prepended with the path to the correct PHP version.



Once step 4 is completed successfully, it will be time to start coding!
Turn on the built in web server by entering this command:

php -S localhost:8000

you should see something like this output:

	PHP 5.6.3 Development Server started at Wed Nov 19 10:31:09 2014
	Listening on http://localhost:8000
	Document root is /Users/epicodus
	Press Ctrl-C to quit.


The 'Document root' is the folder on your local machine that is the equivalent of typing "http://localhost:8000/" into your browser. 
If you do put that address into your browser it'll give you an error:

Not Found: The requested resource / was not found on this server.

That's because it is looking for a file to parse. 
So, inside of your Document root, make a folder called "Examples" and inside of it, a file called "index.php"
Write the following line into it:

<h1>Hello World!</h1>

Now open this address in your browser:
http://localhost:8000/Examples/index.php 

You will see your page displayed! This is how you can organize your projects on your local development machine. 
Make folders for each of your sites and you can use your browser's path to locate the files you want to load.


