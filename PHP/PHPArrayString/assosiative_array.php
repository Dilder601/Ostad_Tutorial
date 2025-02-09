<?php
$student = [
    'fname' => 'Dilder',
    'lname' => 'Hossain',
    'age' => 15,
    'class' => 10,
    'section' => 'A',
    'roll' => 5
];

// print_r($student);
echo $student['fname'] . " " . $student['lname'] . "\n";
printf("Full Name: %s %s\n", $student['fname'], $student['lname']);
// echo join(", ", $student) . "\n";
// json format
// echo serialize($student) . "\n";

$jsonData = json_encode($student) . "\n";
echo $jsonData;


$newStudent = json_decode($jsonData, true);
print_r($newStudent);
echo $newStudent['fname'] . " " . $newStudent['lname'] . "\n";
