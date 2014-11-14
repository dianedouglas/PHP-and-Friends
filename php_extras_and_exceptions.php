
Extra notes / exceptions.

You can force a web server to pass .htm or .html files to be sent to the PHP parser too.

You may come accross this syntax as well, but it is deprecated.
<? ... ?>

It is also allowed to start your document with <?php and then not bother to close the tag 
It is even encouraged sometimes because it prevents excess whitespace 
?>

date time with unix timestamp is measured in seconds.
current timestamp is:
time();
to get 17 days ago, do:
time() - (17 * 60 * 60 * 24);

anything that returns a value is an expression. a literal type of expression is something that evaluates to itself - 73, "hello", $name, etc.
a statement is where you combine assignment or control flow constructs with the expressions. tell the computer to do something. a command.

associativity is the direction of processing for an operator:
	-all math operators and string concat and logical operators are left to right, as well as arguments separated by comma.
	-casting and assignment are right to left.