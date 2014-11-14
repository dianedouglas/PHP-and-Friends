
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

