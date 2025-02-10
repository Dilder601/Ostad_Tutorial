<?php
$name = 0;

// isset() function is used to check if a variable is set or not.
// if (isset($name)) {
//     echo "Name is set";
// } else {
//     echo "Name is not set";
// }


// if (empty($name)) {
//     echo "Name is empty";
// } else {
//     echo "Name is not empty";
// }

if (isset($name) && is_numeric($name) || $name != "") {
    echo "Name is set and not empty";
} else {
    echo "Name is either not set or empty";
}
