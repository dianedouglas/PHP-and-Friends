SETUP

1. 	Create your project directory in your 'Directory Root' (usually your home directory)
	For right now, create the folder Hello_Testing.

2. 	Inside this folder, create a folder called 'src' to hold your program's classes, and another one called 'tests' to hold your test classes. 
	The names can be whatever you like, but this is a pretty standard directory structure. 
	If you name them something different, just make sure that you substitute your names wherever we say 'src' or 'tests' in this example.

3.	Now it's time to write your test so you know what behavior you want to implement. '
	Let's say we want to create a User class, which outputs the text "Hello World!" when we ask it to. That test will look like this:

<?php 

require_once "src/User.php";

class UserTest extends PHPUnit_Framework_TestCase
{
	public function testTalk(){
		//Arrange: put together all your ingredients that you need to run a test.
		$user = new User();

		//Act: run what you are testing.
		$value_to_test = $user->talk();

		//Assert: make sure it does what you have designed it to do.
		$this->assertEquals("Hello World!", $value_to_test);
	}
}

?>

Let's break this down into the steps it takes to make a test.

	1. 	<?php  ?> tags
			Our tests are also written in php.

	2. 	Inside of the php tags, we need to require the class we're going to test. 

			It's going to be called User.php, and we'll put it into our 'src' folder. So we use the line:

			require_once "src/User.php";

	3. 	Now we create our testing class. 

			It will hold all the functions which will test our User class. 
			We do this by extending the existing class 'PHPUnit_Framework_TestCase', provided by the PHPUnit framework. 

			class UserTest extends PHPUnit_Framework_TestCase
			{
				//...
			}


			Using this class is is how our code knows what to do with the function 'assertEquals'. 
			It is a member of the above class, so because we are inheriting from that class we can call the assertEquals() function with
			$this->assertEquals();

	4. Now create the function that tests the function we're about to write. 

			public function testTalk(){
				//...
			}

			give it a name that is descriptive so you can remember what the test is for later.

	5. Inside the function we have three steps to take: Arrange, Act, Assert. First we Arrange.

			To arrange we get anything ready that we need to make our test. In this case, all we need is an instance of our User class.

			$user = new User();

	6. Now we Act. Run the function that we want to test and store its return value so we can make sure it's correct.

			$value_to_test = $user->talk();

	7. Now we Assert. That means that we want to actually run a test to make sure we have the correct value in the line above. 

			To do that we call the assertEquals function.

			$this->assertEquals("Hello World!", $value_to_test);

			This will return true and make our test pass if the second argument to assertEquals, $value_to_test, is equal to the first argument, "Hello World!".


Now to run our tests! 
- In terminal, change directory into your project directory 'Hello_Testing'. 
- Run the command:

	phpunit tests

This means run all the tests inside of the folder 'tests'. Terminal will tell you if they pass or fail. 



Now it is time for development.

	Right now, we will see an error because we haven't written our class yet, so it can't find the file we loaded to test.

		PHP Warning:  require_once(src/User.php): failed to open stream: No such file or directory in /Users/epicodus/Examples/Hello_Testing/tests/UserTest.php on line 2

	Let's change that. Create User.php inside of the src folder. Now let's run the phpunit tests command again. Different error this time:

		PHP Fatal error:  Class 'User' not found in /Users/epicodus/Examples/Hello_Testing/tests/UserTest.php on line 8

	That's because we haven't defined the class yet. So that comes next. Place this code inside of your User.php file.

	<?php 

	class User
	{
		
	}

	?>

	Now run the tests again. New error!

	PHP Fatal error:  Call to undefined method User::talk() in /Users/epicodus/Examples/Hello_Testing/tests/UserTest.php on line 11

	That's because we haven't made the talk method yet. So let's do that next. Add this code inside of the User class:

	public function talk()
	{
		
	}

	Now let's run them again to see what to do next.  You'll see we don't have errors, we actually have a failing test. Which is good!

	There was 1 failure:

	1) UserTest::testTalk
	Failed asserting that null matches expected 'Hello World!'.

	This means that the method we called inside of our test 'talk()' returned null, which doesn't match our desired string "Hello World!"
	So to fix that, we need to make our function return the correct string. Let's add that line to our User's 'talk()' function:

			return "Hello World!";

	Now if we run the test again, it passes! This is a simple example, but this is the way that testing can walk you through implementing your code.

	OK (1 test, 1 assertion)

	Yay!