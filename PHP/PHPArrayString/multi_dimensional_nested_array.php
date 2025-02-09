<?php
$foods = [
    "vegetables" => [
        "brinjal",
        "brocolli",
        "carrot",
        "capsicam"
    ],
    "fruits" => [
        "apple",
        "banana",
        "orange",
        "grapes"
    ],
    "meat" => [
        "beef",
        "chicken",
        "mutton"
    ]
];

//print_r($foods);

// array_push($foods["vegetables"], "cabbage");

// print_r($foods);

//echo $foods["vegetables"][3] . "\n";


$sample = [
    'test-sample' => [
        'a',
        'b',
        'c',
        'd'
    ]
];

//echo $sample['test-sample'][2] . "\n";


$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7, 8]]
];

// print_r($sample2);

echo $sample2[3][3][2] . "\n";
