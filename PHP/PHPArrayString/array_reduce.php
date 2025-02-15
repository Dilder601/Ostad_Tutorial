<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function sum($oldVal, $newVal)
{
    if ($newVal % 2 == 0) {
        return $oldVal + $newVal;
    }
    return $oldVal;
}
$sum = array_reduce($numbers, 'sum');
echo $sum . "\n";
