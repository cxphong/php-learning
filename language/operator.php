<?php
// See: http://stackoverflow.com/questions/2803321/and-vs-as-operator
//      http://www.php.net/manual/en/language.operators.precedence.php
$foo = true;
$bar = false;
$truthiness = ($foo && $bar);
echo ($truthiness ? 'TRUE' : 'FALSE'); // FALSE
echo "\n";

$truthiness = ($foo and $bar);
echo ($truthiness ? 'TRUE' : 'FALSE'); // FALSE
echo "\n";

$truthiness = ($bar || $foo);
echo ($truthiness ? 'TRUE' : 'FALSE'); // TRUE
echo "\n";
$truthiness = ($bar or $foo);
echo ($truthiness ? 'TRUE' : 'FALSE'); // TRUE
echo "\n";

?>