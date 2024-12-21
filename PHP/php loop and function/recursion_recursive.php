<?php
// recursion (recursive function)
function printNumber(int $start, int $end)
{
    if ($start > $end) {
        return;
    }
    echo $start . "\n";
    $start += 1;
    printNumber($start, $end);
}

printNumber(17, 57);
