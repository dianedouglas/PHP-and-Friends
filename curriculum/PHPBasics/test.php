<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Test my php!</h1>
	<?php echo "Hello world!";
		$our_input_word = "stressed";
		echo "What's the reverse of $our_input_word?  ";
		echo strrev($our_input_word);
		echo str_repeat("I'm a function! ", 3);

		// function encode($input_phrase){
		// 	$reversed_phrase = strrev($input_phrase); //reverse input phrase.
		// 	$capitalized_phrase = strtoupper($reversed_phrase); //capitalize it.
		// 	return $capitalized_phrase; //return it as output.
		// }

		function encode($input_phrase){
			return strtoupper(strrev($input_phrase));
		}

		echo $old_string = "David Bowie";
		$new_string = encode($old_string);
		echo $new_string;


	?>
</body>
</html>