<?php

echo "<pre>";

/**
 * Операції з масивами
 * 
 *  - isset
 *  - unset
 *  - count
 *  - array_push
 *  - in_array
 *  - implode
 *  - array_keys
 *  - array_values
 */

// $week = [
//     1 => 'Monday',
//     2 => 'Tuesday',
//     3 => 'Wednesday',
//     4 => 'Thursday',
//     5 => 'Friday',
//     6 => 'Saturday',
//     7 => 'Sunday'
// ];

// if ( isset($week[1]) ) {
//     echo $week[1];
// } else {
//     echo "Такой ключ не существует";
// }

// unset($week[2]);
// unset($week[3]);
// unset($week[7]);

// array_push($week, 'new day', 'new day');

// var_dump( in_array('Monday OOO', $week) );

// print_r( implode(', ', $week) );

// print_r( array_keys($week) );
// print_r( array_values($week) );

// echo "</pre>";

$myNumbers = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five'
];

echo (isset($myNumbers[3656456]));

unset($myNumbers[2]);
print_r($myNumbers);

array_push($myNumbers, 1234567890, 'Word');
print_r($myNumbers);

var_dump(in_array('three', $myNumbers));
var_dump(in_array('Wednesday', $myNumbers));

print_r( implode('---', $myNumbers) );

print_r( array_keys($myNumbers) );
print_r( array_values($myNumbers) );