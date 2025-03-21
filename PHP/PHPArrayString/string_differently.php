<?php
$fname = "Dilder";
$lname = "Hossain";

$result = "My name is $fname \n";

echo $result;

// heredoc
$heredoc = <<<EOD
My name is {$fname} {$lname}
I am learning PHP
This is a multiline string
EOD;
echo $heredoc;
