
constructors / destructors:
	objects that take arguments pass them to the constructor method. used to initialize properties.
	name it __construct.
	in the past it was named the same thing as the class.

	class User
	{
		function __construct($arg1, $arg2){
			//set things up.
		}
	}

	class User
	{
		function User($arg1, $arg2){
			//set things up.
		}
	}

	also destructor methods that are executed when an object is destroyed.
	function __destruct(){

	}

declaring methods in classes:
	just like functions, but you can't use __ before the name - reserved.
	you also have access to $this

declaring properties in classes:
	you don't have to declare properties inside a class, but it is good practice to. easier to debug, and you can assign a default value.
	
	implicit definition of a property:
		$object1 = new User();
		$object1->name = "Alice";

	class Test
	{
		public $name = "Alice";
	}
	much better ^^^
	default values for properties MUST be constant - not function calls or expressions. 
	public $thing = $level * 2; //is not allowed.
	public $thing = time(); //is not allowed.

static methods:
	you can declare a method in a class as Static in php5, which means that it is called on the class not on the object (class methods)
	these methods are good for tasks which don't affect one particular instance of an object. 
	can't use $this within a static method because it is called on the class itself, not a particular object.

	User::prompt_for_password();

	class User
	{
		static function prompt_for_password()
		{
			echo "Please enter your password";
		} 
	}

declaring constants in classes:
	class Translate
	{
		const ENGLISH = 0;
		const SPANISH = 1;
		const GERMAN = 2;
		static function lookup()
		{
			echo self::SPANISH;
		}
	}

	can't change a constant once it's been defined.
	accessible to all instances of that class using self::NAMEOFCONSTANT

scope of properties and methods:

	3 keywords: public, protected and private.
	to use these, just place the keyword right before the property name or, for methods, before the function keyword in the declaration.
	public
		methods are public by default, anyone can call them from anywhere in the code.
		properties are public if they are declared with the 'public' or 'var' keywords, or implicitly declared.
		they can be read or set from anywhere.
		var is older, but still valid. might see it in other places.

		use this when:
		outside code SHOULD be able to access this member and extending classes SHOULD inherit it.

	protected
		these properties and methods can be used only by the object's class methods and those of any subclasses.
		not from outside the class.

		use this when:
		outside code SHOULD NOT be able to access this member and extending classes SHOULD inherit it.

	private
		these properties and methods can be used only by methods within the same class. not subclasses.

		use this when:
		outside code SHOULD NOT be able to access this member and extending classes SHOULD NOT inherit it.

