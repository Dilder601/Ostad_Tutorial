<?php
$var = "Hello World";
echo substr($var, 6, 3) . "\n";
echo substr($var, 0, 5) . "\n";
$length = strlen($var);
echo substr($var, $length - 3) . "\n";
