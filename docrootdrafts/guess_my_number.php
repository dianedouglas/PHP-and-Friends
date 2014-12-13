<?php 
$guess = $_GET["user_guess"];
$favorite_number = rand(1, 20);
$message = check_guess($guess, $favorite_number);

function check_guess($guessed_number, $winning_number){
  if ($guessed_number == $winning_number) {
    return "Congrats! You guessed it!";
  } 
  elseif ($guessed_number < $winning_number) {
    return "Too low! Sorry, you lose!";
  }
  else {
    return "Too high! Sorry, you lose!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Guess My Number</title>
</head>
<body>
  <div class="container">
    <h1><?php echo $message;?></h1>
    <h3><?php echo "You guessed: " . $guess; ?> </h3>
    <h3><?php echo "The right answer was: " . $favorite_number; ?> </h3>
  </div>
</body>
</html>