<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Test my php!</h1>
	<?php echo "Hello world!"; ?>
	<?php 
		$our_input_word = "stressed";
		echo "What's the reverse of $our_input_word?  ";
		echo strrev($our_input_word);
	?>
</body>
</html>