<?php
// even and odd numbers
function evenOdd($num)
{
    if ($num % 2 == 0) {
        return true;
    } else {
        return false;
    }
}


// factorial of a number
// function factorial(int $num)
// {
//     $fact = 1;
//     for ($i = 1; $i <= $num; $i++) {
//         $fact *= $i;
//     }
//     return $fact;
// }


function factorial($num)
{
    if (gettype($num) != 'integer') {
        return "Invalid input. Please enter an integer.";
    }
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}


// default value of a parameter 
function serve($foodType = "Coffee", $numberOfCups = 2)
{
    return "{$numberOfCups} cups of {$foodType} have been served.";
}
