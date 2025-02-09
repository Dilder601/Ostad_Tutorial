<?php
$n = 12;
$studdents = ["Rahim", "Karim", 132, "Monir"];

$studdents[2] = "Kamal";

// array_splice($studdents, 1, 1, ["Salam", "Kalam"]); // replace 1 element from index 1

// array_shift($studdents); // remove first element
// array_pop($studdents); // remove last element
// array_unshift($studdents, "Mithu"); // add element at first
array_push($studdents, "Mithu"); // add element at last

$cnt = count($studdents);
for ($i = 0; $i < $cnt; $i++) {
    echo $studdents[$i] . "\n";
}

// array_shift($studdents); // remove first element
// array_pop($studdents); // remove last element
// array_unshift($studdents, "Salam"); // add element at first
// array_push($studdents, "Kalam"); // add element at last
