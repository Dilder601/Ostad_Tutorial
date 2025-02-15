<?php
// shuffling array and random numbers
$numbers = range(40, 80);
// print_r($numbers);
// shuffle($numbers);
// print_r($numbers);
$random = mt_rand(0, 32);
// echo $numbers[$random] . "\n";

$luck = $numbers[$random];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
