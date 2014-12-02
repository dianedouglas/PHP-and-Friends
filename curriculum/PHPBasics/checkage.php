<html>
<head>
	<title>Check Age [Branching]</title>
</head>
<body>
<?php 

function checkAge($user_age){
	if ($user_age > 21){
		return "You can drink!";
	}
	else {
		return "No drinks for you!";
	}
}
echo " <br> Hi checkAge function! My name is Barbara, and I'm 25. <br>";
echo checkAge(25);
echo " <br> Hi checkAge function! My name is Jim, and I'm 52. <br>";
echo checkAge(52);
echo " <br> Hi checkAge function! My name is Tiny Tim, and I'm 12. <br>";
echo checkAge(12);

?>
</body>
</html>