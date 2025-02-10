<?php

echo "<pre>";

// Багатомірні масиви

// $movies = [
//     "comedy"  => [
//         "Pink Panther",
//         "John English",
//         "See no evil hear no evil"
//     ],
//     "action"  => [
//         "Die Hard",
//         "Expendables"
//     ],
//     "premiere" => [
//         "action"    => [
//             "The Lord of the rings"
//         ],
//         "romance" => [
//             "Romeo and Juliet"
//         ],
//     ]
// ];

// print_r($movies);
// print_r($movies["comedy"]);
// print_r($movies["comedy"][0]);
// print_r($movies["premiere"]["romance"]);

// echo "</pre>";

$myArray = [
    'aaa' => [1, 2, 3],
    'bbb' => ['a', 'b', 'c'],
    5 => [4, 5, 6],
    0 => 222
];

// var_dump($myArray);

print_r($myArray);
print_r(($myArray['aaa']));
print_r(($myArray['bbb'][1]));
echo '<br>';
print_r(($myArray[5] = 55555555555555));