<?php 
$user_month = $_GET["birth_month"];
$user_color = $_GET["favorite_color"];

$month_message = get_fortune_by_month($user_month);
$color_message = get_fortune_by_color($user_color);
$fortune = $month_message . " " . $color_message;

function get_fortune_by_month($month){
  if($month == "January"){
    return "You'll have a good day today!";
  }
  elseif($month == "February"){
    return "Welp... ";
  }
  elseif($month == "March"){
    return "You will be lucky in love.";
  }
  elseif($month == "April"){
    return "You will make an important decision.";
  }
  elseif($month == "May"){
    return "That thing you were about to do? Don't do it.";
  }
  elseif($month == "June"){
    return "Your lifeline is long.";
  }
  elseif($month == "July"){
    return "You are waiting for something... just hold on!";
  }
  elseif($month == "August"){
    return "You'll be a great programmer soon!";
  }
  elseif($month == "September"){
    return "Soon you will be learning Drupal.";
  }
  elseif($month == "October"){
    return "You deserve to eat lots of candy.";
  }
  elseif($month == "November"){
    return "Give an old friend a call.";
  }
  elseif($month == "December"){
    return "You're on the verge of succeeding.";
  }
  else{
    return "I am afraid I don't know that month.";
  }
}

// function get_fortune_by_color($color){
//   if ($color == "Red") {
//     return "Your lucky number is 17.";
//   }
//   elseif ($color == "Orange") {
//     return "You are about to find an excellent opportunity.";
//   }
//   elseif ($color == "Yellow") {
//     return "You should go to the beach.";
//   }
//   elseif ($color == "Green") {
//     return "You are a loyal and true friend.";
//   }
//   elseif ($color == "Blue") {
//     return "You are going to be very wealthy.";
//   }
//   elseif ($color == "Violet") {
//     return "You know that thing you are thinking of doing? Do it!";
//   }
//   else {
//     return "I do not know that color.";
//   }
// }

function get_fortune_by_color($color){
  if ($color == "Red" || $color == "Orange" || $color == "Yellow") {
    return "Your lucky number is 17.";
  }
  elseif ($color == "Green" || $color == "Blue" || $color == "Violet") {
    return "You are a loyal and true friend.";
  }
  else {
    return "I do not know that color.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Fortune Teller</title>
</head>
<body>
  <h1>Here ya go!</h1>
  <h3><?php echo $fortune;?></h3>
</body>
</html>

<?php 
function test_two_numbers($first_number, $second_number){
  if($first_number > $second_number || $first_number < 0){
    return "The or expression is true.";
  }
  else {
    return "The or expression is false.";
  }
}
 ?>
