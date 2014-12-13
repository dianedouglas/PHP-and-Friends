<?php 
$repeat_text = $_GET["repeat_text"];
$number_of_repeats = $_GET["number_of_repeats"];
$repeated_text = str_repeat($repeat_text, $number_of_repeats);
?>
<html>
<head>
  <title>String Repeating</title>
</head>
<body>
  <h1>Here ya go!</h1>
  <p><?php echo $repeated_text; ?> </p>
</body>
</html>