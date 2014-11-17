3 kinds of loops.
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

for loop

	<?php
		for ($i=0; $i < 5; $i++) { 
			# code...
			echo $i . " is the current count. \n";
		}
	?>

	just like other forloops, you have the initializeation, terminating condition and modification at the end of each iteration.
	separate the for loop parameters with semicolons, but if you want to have multiple statements use commas

	<?php
		for ($i = 1, $j = 1; $i + $j < 10; $i++, $j++)
		{
			echo "i times j = " . $i * $j . "\n";
		}
	?>

	for is used a lot.
	while is usually more appropriate when your loop termination condition doesn't depend on a simple regular change to a variable. 
	when you're waiting for a special input or error while is good.

break;

-if you want to stop a loop when a certain condition is met that could cause an error and isn't the loop exit condition, 
like if you're reading in a file and checking for an error. Normally your loop would read your file from the beginning and the exit condition 
would be if you've hit the end of the file. But you could have a break condition for errors, such as if the disk is full or the file is in the wrong format.

<?php
$fp = fopen("myfile.txt", 'wb');

for ($j = 0; $j < 100; ++$j)
{
	$written = fwrite($fp, "data");
	if ($written == FALSE) break;
}

fclose($fp);

?>


1. open file. now we can refer to the file with pointer $fp.
2. loop 100 times writing "data" into the file you just opened.
	fwrite(pointer to file, what to write);
	returns number of characters correctly written. if there's a writing error, it returns false.
3. check for an error: 
	if ($written == FALSE) break;
	if (!$written) break; 

shorten to one line in loop:
if (!fwrite($fp, "data")) break;

break can also take an integer argument for the number of looping levels to break out of. 
break 2;


continue;

just like break, except it means stop processing the current loop and continue to the next iteration.
exit the current loop, don't stop looping entirely.
good for cases where you don't want to finish the loop code once some condition has been met. like divide by 0 exceptions.

