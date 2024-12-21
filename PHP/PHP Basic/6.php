<?php
$n = 17;
// ternary operator
$numberInWord = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "Just a Number");
echo $numberInWord;

echo "\n";


$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is an Odd Number";

echo $result;
