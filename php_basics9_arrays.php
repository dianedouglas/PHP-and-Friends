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

		$things = array("Thing1", "Thing2", "Thing3");
		$phrases = array("Thing1" => "To be or not to be...", "Thing2" => "Once upon a time...", "Thing3" => "I once knew a man from nantucket...");
	 ?>

	 Ruby has a similar notation. 
	 You can do:

	 phrases = Hash.new();
	 phrases.store("Thing1", "Here I come to save the day!")

	 or

	 phrases = Hash["Thing1" => "To be or not to be...", "Thing2" => "Once upon a time...", "Thing3" => "I once knew a man from nantucket..."]

	 => assigns to an key, rather than = which assigns to a variable 

loop through arrays with foreach:

	<?php 

		$things = array("Thing1", "Thing2", "Thing3");
		$phrases = array("Shakespeare" => "To be or not to be...", "Fairytales" => "Once upon a time...", "Limericks" => "I once knew a man from nantucket...");

		foreach ($things as $thing) {
			echo $thing . "\n";
		}

		foreach ($phrases as $key => $value) {
			echo "$key: $value \n";
		}

	?>

	foreach is a method that takes 2 or more arguments separated by the keywords 'as' and '=>'

	take each item in the array in the variable to the left of the 'as' keyword, 
	and place it in the variable after the 'as' keyword. 
	Then use it in the loop code between the curly brackets.

	if the array is associative, you can use the '=>' to define variables to place both the key and value into to be used by the code in the loop.

				note:

				probably don't need this, but you can also use the each function and the list function to do the same thing. 
				each() takes an array as an argument and returns an array with a key/value pair from the given array. 
				then it moves a builtin pointer to the next pair to return that the next time it is called.
				use this in a while loop with the list function, which maps an array to given variables.

				list($a, $b) = array("Christmas", "Dec 25");
				echo $a . "\n";
				echo $b . "\n";

				while(list($key, $value) = each($myarray)){
					echo "$key: $value";
				}

multidimensional arrays:

	set them up the same way as normal arrays. 
	you can nest associative arrays into numerically indexed arrays and vice versa.
	then loop through them using nested foreach loops.

	example: discographies of 3 bands.

	<?php 
		$discographies = array(
			"Neurosis" => array(
				"Souls at Zero" => array(
					"To Crawl Under One's Skin",
					"Souls At Zero",
					"Zero",
					"Flight",
					"The Web",
					"Sterile Vision",
					"A Chronology For Survival",
					"Stripped",
					"Takeahnase",
					"Empty" ),
				"Eye of Every Storm" => array(
					"Burn",
					"No River to Take Me Home",
					"The Eye of Every Storm",
					"Left to Wander",
					"Shelter",
					"A Season in the Sky",
					"Bridges",
					"I Can See You" ),
				"Enemy of the Sun" => array(
					"Lost",
					"Raze the Stray",
					"Burning Flesh in the Year of Pig",
					"Cold Ascending",
					"Lexicon" ,
					"Enemy of the Sun",
					"The Time of the Beasts",
					"Cleanse")
				),

			"Tragedy" => array(
				"Vengeance" => ar ray(
					"Conflicting Ideas",
					"Call To Arms",
					"Vengeance",
					"Recurring Nightmare",
					"Beginning Of The End",
					"The Lure",
					"Night Falls",
					"The Day After",
					"War Within Us",
					"Revengeance",
					"To The Dogs",
					"No Words"),
				"Darker Days Ahead" => array(
					"No Cemeteries Here",	
					"Close At Hand",
					"The Grim Infinite",	
					"The Feeding Hour",
					"Wail Of Sirens",	
					"Darker Days Ahead",
					"Black Against Night",	
					"Power Fades",
					"To Earth Like Dust")
				), 

			"Jimi Hendrix" => array(
				"Are You Experienced" => array(
					"Purple Haze",
					"Manic Depression",
					"Hey Joe",
					"Love or Confusion",
					"May This Be Love",
					"I Don't Live Today"), 
				"Axis: Bold as Love" => array(
					"EXP",
					"Up from the Skies",
					"Spanish Castle Magic",
					"Wait Until Tomorrow",
					"Ain't No Telling",
					"Little Wing",
					"If 6 Was 9"  ) 
				)
			); 

		foreach ($discographies as $band => $albums) {
			echo "$band\n";
		}
		foreach ($discographies as $band => $albums) {
			echo "$band\n";
			foreach ($albums as $album => $songs){
				echo "\t$album\n";
				foreach($songs as $song){
					echo "\t\t$song\n";
				}
			}

		}
	?>

	This is 3 levels deep. 
