<?php
// shallow copy
$person = ['fname' => 'Dilder', 'lname' => 'Hossain'];
$person2 = $person; // shallow copy
$person2['lname'] = 'Khan';
print_r($person);
print_r($person2);


function printData(&$person)
{
    $person['lname'] = 'Khan';
    print_r($person);
}

printData($person);
print_r($person);
