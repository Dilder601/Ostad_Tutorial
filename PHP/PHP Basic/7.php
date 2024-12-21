<?php
$color = 'red';

switch ($color) {
        // case 'red':
        //     echo "Red is our favourite color";
        //     break;
        // case 'green':
        //     echo "Green is our favourite color";
        //     break;
    case 'red':
    case 'green':
        echo ucwords($color) . " is our favourite color";
    case 'blue':
        echo "Blue is not our favourite color";
        break;
    default:
        echo "Color is not our favourite color";
}
