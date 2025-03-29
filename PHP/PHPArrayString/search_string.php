<?php
$string = "A quick brown fox jumps over the lazy dog";
$pos = strpos($string, "fox");
if ($pos === false) {
    echo "Not found\n";
} else {
    echo "Found at position: $pos\n";
}
//strrpos() function
//strripos() function
//stripos() function