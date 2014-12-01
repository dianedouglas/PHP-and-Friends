<html>
<head>
	<title>Counting Clicks</title>
</head>
<body>
<?php 

function clickCounter(){
	//If it hasn't already been created, create the variable $number_of_clicks and set it to 0.
	static $number_of_clicks = 0; 
	//This is shorthand for 'add 1 to this variable.'
	++$number_of_clicks;
	//Print the current number of times this function has been called.
	echo "The number of clicks so far is: $number_of_clicks <br>"; 
	//The <br> is just an html line break which means start a new line.
}

//Instead of actually clicking the mouse, we will test by calling the function 5 times.
clickCounter();
clickCounter();
clickCounter();
clickCounter();
clickCounter();

 ?>
</body>
</html>