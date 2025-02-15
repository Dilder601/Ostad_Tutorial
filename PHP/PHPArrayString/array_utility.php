<?php
// array utility functions
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates');

// square each element of the array

function square($n)
{
    printf("Square of %d is %d \n", $n,  $n * $n);
}

array_walk($numbers, 'square');


// array_cube function

function cube($n)
{
    return $n * $n * $n;
}

// $cubed = array_map('cube', $numbers);
// print_r($cubed);

function even($n)
{
    return $n % 2 == 0;
}


function odd($n)
{
    return $n % 2 != 0;
}

$even = array_filter($numbers, 'even');
$odd = array_filter($numbers, 'odd');
print_r($even);
print_r($odd);

$persons = ['anik', 'sakib', 'saima', 'selim', 'hasan', 'korim'];

function filterByS($name)
{
    return $name[0] == 's';
}

$filtered = array_filter($persons, 'filterByS');
print_r($filtered);
