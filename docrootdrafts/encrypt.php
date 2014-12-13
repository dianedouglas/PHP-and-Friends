<?php 
  function encode($input_phrase){
    $reversed_phrase = strrev($input_phrase); //reverse input phrase.
    $capitalized_phrase = strtoupper($reversed_phrase); //capitalize it.
    return $capitalized_phrase; //return it as output.
  }
  $message_to_encode = $_GET["message"];
  $new_string = encode($message_to_encode);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Encrypt a Message</title>
</head>
<body>
  <div class="container">
    <h1>Mesage encrypted!</h1>
    <h2>Here you go: <?php echo $new_string ?></h3>
  </div>
</body>
</html>