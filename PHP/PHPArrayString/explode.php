<?php
// $vegetables = explode(", ", "brinjal, brocolli, carrot, capsicam");
// var_dump($vegetables);
// echo $vegetables[0] . "\n";

$vegetables = preg_split("/(, |,)/", "brinjal, brocolli, carrot, capsicam");
print_r($vegetables);
$vegetablesString = join(", ", $vegetables);
echo $vegetablesString . "\n";
echo count($vegetables) . "\n";
