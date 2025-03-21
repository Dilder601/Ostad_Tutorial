<?php
$string = "Hello World, How are you?\n";
$parts = explode(" ", $string);
print_r($parts);
$original = join(" ", $parts); // join and implode are same
echo $original . "\n";
// use strtok to tokenize string
$token = strtok($string, " ");
while ($token !== false) {
    echo $token . "\n";
    $token = strtok(" ");
}
