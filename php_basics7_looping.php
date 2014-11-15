while

	$fuel = 10;
	while ($fuel > 1)
	{
		echo "Keep driving, there's enough fuel.\n";
		--$fuel;
	}
	echo "Out of gas!";

	- same with if statements: {} required unless only one line.

	you can also increment your condition in the while if you like.

	$count = 0;
	while (++$count < 5)
	{
		echo "There are $count lights! \n";
	}

	$count = 0;
	while ($count++ < 5)
	{
		echo "There are $count lights! \n";
	}

	in the top one, you'll only get 4 printed statements because the incrementing happens before the condition is checked.

do ... while

	good for when you want code to happen at least once and then check the conditional after that to see if it should continue to loop.

	<?php
	$count = 0;
	do {
		echo "$count times 12 is " . $count * 12 . "\n";
	} while (++$count <= 12);
	?>

