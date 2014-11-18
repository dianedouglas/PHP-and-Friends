Numerically Indexed Arrays:
	Populate an array. Here it is in ruby:

	stuff = []
	stuff.push("First thing")
	stuff.push("Second thing")
	stuff.push("Third thing")

	stuff:

	["First thing", "Second thing", "Third thing"]

	<?php

		$stuff[] = "First thing";
		$stuff[] = "Second thing";
		$stuff[] = "Third thing";
		print_r($stuff);
	?>

	$stuff:

	Array
	(
	    [0] => First thing
	    [1] => Second thing
	    [2] => Third thing
	)

	Both can access each element in the same way:
	stuff[0]
	=> "First thing"

	$stuff[0]
	=> "First thing"

Associative Arrays:

	An array indexed by strings, called keys, instead of numbers. Hash in ruby.
	
	<?php

		$stuff['eggs'] = 12;
		$stuff['milk'] = 1;
		$stuff['apples'] = 4;
		print_r($stuff);
		$number_of_apples = $stuff['apples'];
		echo "number of apples: $number_of_apples";

	?>

	Now you don't have to remember the order of the array, you can just look up the value you need by its key.

Array keyword:

	<?php 

		$array1 = array("Thing1", "Thing2", "Thing3");
		$array2 = array("Thing1" => "To be or not to be...", "Thing2" => "Once upon a time...", "Thing3" => "I once knew a man from nantucket...");
	 ?>

	 Ruby has a similar notation. 
	 You can do:

	 phrases = Hash.new();
	 phrases.store("Thing1", "Here I come to save the day!")

	 or

	 phrases = Hash["Thing1" => "To be or not to be...", "Thing2" => "Once upon a time...", "Thing3" => "I once knew a man from nantucket..."]

	 => assigns to an key, rather than = which assigns to a variable 

