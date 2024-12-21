<?php
// function sumValue(int $x, int $y, int $z)
// {
//     return $x + $y + $z;
// }

// echo sumValue(10, 20, 30);

// unlimited parameter 

function sumValue2(int ...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sumValue2(10, 20, 30, 40, 50);
