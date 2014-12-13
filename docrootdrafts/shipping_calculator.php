<?php 
$input_weight = $_GET["weight"];
$input_distance = $_GET["distance"];
$shipping_price = calculate_shipping($input_weight, $input_distance);

function calculate_shipping($weight, $distance){
  $price = $weight / 20 + $distance / 20;      
  return $price;   
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shipping Calculator</title>
</head>
<body>
  <div class="container">
    <h1>Price Calculated!</h1>
    <h3>Your package weighs: <?php echo $input_weight . " lbs"; ?> </h3>
    <h3>Your package is travelling: <?php echo $input_distance . " miles"; ?> </h3>
    <h3>The cost will be: $<?php echo $shipping_price; ?> </h3>
  </div>
</body>
</html>