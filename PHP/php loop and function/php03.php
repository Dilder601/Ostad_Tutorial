<?php
$temp = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 10; $i++) {
    echo $temp . " ";
    $old = $new;
    $new = $old + $temp;
    $temp = $old;
}
