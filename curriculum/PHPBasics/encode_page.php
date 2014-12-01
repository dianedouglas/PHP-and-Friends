<html>
<head>
	<title>Using My Function</title>
</head>
<body>
<?php 
	
	function encode($input_phrase){
		return strtoupper(strrev($input_phrase));
	}

	echo $first_string = "Miles Davis";
	echo $second_string = "Trent Reznor";
	echo $third_string = "Mozart";
	echo encode($first_string);
	echo encode($second_string);
	echo encode($third_string);
	echo encode(encode($first_string)); // encode "Miles Davis", and then encode that return value.
	echo encode(encode($second_string));
	echo encode(encode($third_string));

	// echo strtoupper(strrev($first_string));
	// echo strtoupper(strrev($second_string));
	// echo strtoupper(strrev($third_string));
	// echo strtoupper(strrev(strtoupper(strrev($first_string))));
	// echo strtoupper(strrev(strtoupper(strrev($second_string))));
	// echo strtoupper(strrev(strtoupper(strrev($third_string))));

 ?>
</body>
</html>