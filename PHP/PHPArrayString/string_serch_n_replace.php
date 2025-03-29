<?php
$data = "A quick brown fox jumps over the lazy dog";
$replcace_dt = str_ireplace(array("fox", "dog"), array("cat", "rat"), $data, $count);
echo "Total Replaced:{$count}\n";
echo $data;
echo PHP_EOL;
echo $replcace_dt;
