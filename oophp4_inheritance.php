use the keyword 'extends' to make a subclass.

<?php
//here's my superclass. all people have a name and age.
class Person
{
	public $name = "Bob", $age = 0;
	function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	function say_name(){
		echo "My name is " . $this->name . ". \n";
	}
	function say_age(){
		echo "I am " . $this->age . " years old.\n";
	}
}
$named_person = new Person("Janis Joplin", 27);
$named_person->say_name();
$named_person->say_age();

//here's my subclasses. 
class Teacher extends Person
{
	public $subject = "Math";
	function teach(){
		echo "\n I'm teaching " . $this->subject . ".";
	}
}
$prof = new Teacher("Jim Ross", 52);
$prof->subject = "Wrestling";
$prof->say_name();
$prof->say_age();
$prof->teach(); //all three methods available.

class Student extends Person
{
	public $major = "English";
	function learn(){
		echo "\n I'm learning " . $this->major . ".";
	}
}

$kid = new Student("Benedict Cumberbatch", 35);
$kid->major = "Theater";
$kid->say_name();
$kid->say_age(); 
$kid->learn();
//learn is only available to students. teach is only available to teachers. but both are people with names and ages.
?>

Remember you can't have less arguments than the ones defined in your constructor.

parent:
	if you have a method in subclass with the same name as the superclass it will override the parent.
	if you need to override this behavior you can use the parent operator.

<?php

	class Administrator extends Person
	{
		function say_name(){
			echo "\n I am an administrator. You don't really need my name.";
		}
		function no_really_say_name(){
			echo "\n Oh alright, if you really want to know... \n";
			parent::say_name();
		}
	}

	$admin = new Administrator("Hulk Hogan", 42);
	$admin->say_name();
	$admin->no_really_say_name();
?>

	if you want to ensure that you aren't accidentally calling a parent method, you can write 
	self::method();

subclass constructors:
	
	php will not automatically call the constructor method of a parent class.
	if you want it to, then specify.

	...
		function __construct(){
			parent::__construct(); //initialize all super class properties.
			//setup the rest of the subclass afterwards here.
			self::setup();
		}
	...

	example: class called 'Wildcat' with suclass 'Tiger' init true/false classes for fur (all cats) and stripes (just tigers.)

final:

	to prevent a subclass from overriding a superclass method, use the keyword 'final'.
	...
		final function copyright(){
			echo "This class was written by me.";
		}
	...
