<?php
$string = 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt </br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  </br> nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse  </br>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt  </br>mollit anim id est laborum.';

// echo wordwrap($string, 20, "\n", true) . "\n\n";

// example of nl2br()
// echo nl2br(wordwrap($string, 20, "\n", true)) . "\n\n";

echo nl2br($string) . "\n\n";
