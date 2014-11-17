include_once "library.php";

same as pasting in a collection of function definitions and other code directly into your file.
If you include the same thing twice, or include a file that includes a file you've already included, you get errors about redefining functions etc.
so always use include_once.

program execution continues even if the included file is not found. this can cause errors.
when your program can't function without a file, require it.

require_once "library.php";