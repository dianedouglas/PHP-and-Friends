<?php 
  $first_number = $_GET["first_number"];
  $second_number = $_GET["second_number"]; 
  $solution = $first_number + $second_number;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Answer Below</title>
</head>
<body>
  <h1>Arithmetic in PHP is easy!</h1>
  <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
  <p><?php echo $solution; ?></p>
</body>
</html>