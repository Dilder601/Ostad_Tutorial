<?php
$name = "John Doe 01635000601";
$age = 25;
$height = 5.9;
$weight = 150.5;
$address = "123 Main St, Anytown, USA";
$phone = "555-1234";
$occupation = "Software Developer";
$salary = 75000.50;
$married = true;
$children = 2;


$format = sscanf($name, "%s %s %11s");
echo print_r($format, true) . "\n";

sscanf($name, "%s %s %11s", $firstName, $lastName, $mobile);
echo "First Name: $mobile\n";
