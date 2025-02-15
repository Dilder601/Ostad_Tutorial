<?php
$numbers = array(55, 2, 5, 99, 7, 34, 68, 44, 70);
$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates');

if (in_array(98, $numbers)) {
    echo "98 is in the array";
} else {
    echo "98 is not in the array";
}


$offset = array_search(99, $numbers);
echo $offset . "\n";


if (key_exists('c', $fruit)) {
    echo "c is in the array";
} else {
    echo "c is not in the array";
}
