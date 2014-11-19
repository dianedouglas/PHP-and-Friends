<!-- Let's try using our newly tested class in a browser! 
	So your server with "php -S localhost:8000" 
	And pull this page up by going to: 
	http://localhost:8000/Examples/index2_user_says_hello.php -->

<?php 

	require_once "Hello_Testing/src/User.php";

	$user = new User();
	$output_string = $user->talk();

?>

<h1><?php echo $output_string ?></h1>