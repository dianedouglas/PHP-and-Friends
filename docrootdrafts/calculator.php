
<!DOCTYPE html>
<html>
<head>
  <title>Your Answer Below</title>
</head>
<body>
  <?php 
    $left_side_number = $_GET["left_side_number"];
    $right_side_number = $_GET["right_side_number"]; 
    $solution = $left_side_number + $right_side_number;
  ?>
  <h1>Arithmetic in PHP is easy!</h1>
  <p><?php echo "The sum of " . $left_side_number . " and " . $right_side_number . " is:<br>" . $solution; ?></p>
</body>
</html>
