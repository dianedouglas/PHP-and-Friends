<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Test my php!</h1>
	<?php 
		// echo "Hello world!";
		// $our_input_word = "stressed";
		// echo "What's the reverse of $our_input_word?  ";
		// echo strrev($our_input_word);
		// echo str_repeat("I'm a function! ", 3);

		// function encode($input_phrase){
		// 	$reversed_phrase = strrev($input_phrase); //reverse input phrase.
		// 	$capitalized_phrase = strtoupper($reversed_phrase); //capitalize it.
		// 	return $capitalized_phrase; //return it as output.
		// }

		// function encode($input_phrase){
		// 	return strtoupper(strrev($input_phrase));
		// }

		// echo $old_string = "David Bowie";
		// $new_string = encode($old_string);
		// echo $new_string;

	// function addFive($a_number){
	// 	$sum = 5 + $a_number;
	// }

	// addFive(2); 
	// echo "The sum of 5 and 2 is: $sum";

	// $number_to_add = 5;

	// function addNumber($a_number){
	// 	return $a_number + $number_to_add;
	// }

	// echo "The sum of 9 and $number_to_add is: ";
	// echo addNumber(9);

	// $favorite_number = 3;

	// function double_favorite_number(){
	// 	global $favorite_number;
	// 	$favorite_number *= 2; 
	// }

	// function subtract_one(){
	// 	global $favorite_number;
	// 	$favorite_number -= 1;
	// }

	// function triple_favorite_number(){
	// 	global $favorite_number; 
	// 	$favorite_number *= 3;
	// }

	// echo $favorite_number; 		//print initial $favorite_number.
	// echo ", ";					//print out comma and space between numbers.
	// double_favorite_number(); 	//changes $favorite_number to 6.
	// echo $favorite_number;
	// echo ", ";
	// subtract_one(); 			//changes $favorite_number to 5.
	// echo $favorite_number;
	// echo ", ";
	// triple_favorite_number();	//changes $favorite_number to 15.	
	// echo $favorite_number;
	// echo "!"; //page should read "3, 6, 5, 15!"

	// $player1_number = 3;
	// $player2_number = 5;

	// function double_favorite_number($favorite_number){
	// 	global $favorite_number; //global variable declarations need their own line.
	// 	$favorite_number *= 2; 
	// }

	// echo "Player 1's favorite number is: $player1_number <br>";
	// echo "Player 2's favorite number is: $player2_number <br>";
	// double_favorite_number($player1_number);
	// double_favorite_number($player2_number);
	// echo "We've doubled Player 1's favorite number. Now it is: $player1_number <br>";
	// echo "We've doubled Player 2's favorite number. Now it is: $player2_number <br>";

	// $player1_number = 3;
	// $player2_number = 5;

	// function double_favorite_number(&$favorite_number){
	// 	$favorite_number; //global variable declarations need their own line.
	// 	$favorite_number *= 2; 
	// }

	// echo "Player 1's favorite number is: $player1_number <br>";
	// echo "Player 2's favorite number is: $player2_number <br>";
	// double_favorite_number($player1_number);
	// double_favorite_number($player2_number);
	// echo "We've doubled Player 1's favorite number. Now it is: $player1_number <br>";
	// echo "We've doubled Player 2's favorite number. Now it is: $player2_number <br>";

	$number_to_add = 5;

	function addNumber($a_number){
	  global $number_to_add;
	  return $a_number + $number_to_add;
	}

	echo "The sum of 9 and $number_to_add is: ";
	echo addNumber(9);
	?>
</body>
</html>