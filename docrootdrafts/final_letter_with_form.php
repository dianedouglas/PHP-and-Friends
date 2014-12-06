<!DOCTYPE html>
<html>
<head>
  <title>Greetings!</title>
</head>
<body>
  <?php 
    $friend_name = $_GET["to_name"];
    $my_name = $_GET["from_name"]; 
  ?>
  <h1>Greetings From Afar</h1>
  <p>Dear <?php echo $friend_name; ?>,</p>
  <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
  <p><?php echo $friend_name; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
  <p>Looking forward to seeing you soon, I'll bring you back a souvenir. </p>
  <p>Cheers,</p>
  <p><?php echo $my_name; ?></p>
</body>
</html>