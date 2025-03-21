<?php
$string = "Hello World";
//echo strrev($string) . "\n";
$ln = strlen($string);
for ($i = $ln - 1; $i >= 0; $i--) {
    echo $string[$i];
}
