<?php

/*
Integer - int
Double - Float
Boolean 
Null
String
Array
Object
Resource
*/

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "The smallest planet is $planet1 and the biggest planet is $planet2\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
echo "The smallest planet is" . $planet1 . "and the biggest planet is" . $planet2 . "\n";
printf("The smallest planet is %s and the biggest planet is %s\n", strtoupper($planet1), $planet2);




/*$fname = "Issac";
$lname = "Newton";

printf("His %s name is %s %s %s", "Full", "Sir", $fname, $lname);
*/

/*
$result = true;
var_dump($result);
$name = "Earth";
$uname = strtoupper($name);
echo "We'are living on the {$uname}";
*/