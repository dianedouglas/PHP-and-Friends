class names are case sensitive, and function names are not.

<?php

	class User
	{
		public $name, $password; //2 public properties to hold a user's name and password.
		function save_user(){
			echo "\n Here is where we would do stuff to save the user to a database.";
		}
		function print_info(){
			echo "\nname: ". $this->name;
			echo "\npass: ". $this->password;			
		}
		function change_name($new_name){
			echo "\n changing name... \n";
			$this->name = $new_name;
			$this->print_info();
		}
	}

	$object = new User;
	print_r($object); //print info about a variable in human readable format.
	$object->name = "diane";
	$object->password = "password123";
	$object->save_user();
	$object->print_info();
	$object->change_name("Jimi Hendrix");
?>

the keyword new:
	like Class.new() in ruby.
		$object = new Classname;
	creates an object of the specified class.
	to create a class that has arguments:
		$user = new User('diane', 'password123');

calling methods on a class and accessing public properties:
	use '->' instead of '.' in ruby.
	methods have () on the end and properties don't.
	** don't use $ when referring to object properties. but use it when you are defining them.

keyword $this:
	same as self in ruby. to get or set a property of the current object
	$this->name = "Jimi Hendrix";
	$this->name_copy = $this->name;

	again, don't use $ when referring to an object's property even though it's defined that way!



they can go anywhere, before or after statements using them, but generally good practice is to 
put class and function definitions towards the end of a file. 

clone:
	$object1 = new Classname();
	$object2 = $object1;
	both $object2 and $object1 now hold the memory address of the new instance of Classname. 
	if I modify a property using either $object1 or $object2, I am modifying the property on the same object. 
	if I actually want an entirely separate copy of an object to modify, I use the clone keyword.

	$object2 = clone $object1;

rule of $:
Use $ on all variables, inside and out of functions, BUT do not use the $ on any member of a class unless you are defining it. 
The -> means you don't need it.

reminder of capitalization warning:
DO NOT name your class and its method the same thing - it will cause errors. 
Even if they are capitalized differently.
function names and class names are case insensitive, while variable names are case sensitive.