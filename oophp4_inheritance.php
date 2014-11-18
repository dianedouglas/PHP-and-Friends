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
		echo "My name is " . $this->name . "\n";
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
		echo "I'm teaching " . $this->subject . ".";
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
		echo "I'm learning " . $this->major . ".";
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
