<?php

// Цикл з постумовою do-while

$week = [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
];

$day = 0;
do {
    echo $week[$day] . "<br>";
    $day++;
} while ( $day < count($week) );

$myColors = [
    'white', 'black', 'red', 'green', 'blue'
];

$color = 0;
do {
    echo $myColors[$color] . '<br>';
    $color++;
} while ($color < count($myColors));