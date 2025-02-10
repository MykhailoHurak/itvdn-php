<?php

// Цикл foreach

$nums = [ 12, 7, 5, 4 ];

foreach ( $nums as $num ) {

    if ( $num % 2 === 0 ) {
        echo $num . "<br>";
    } 

}

foreach ( $nums as $num ) {

    if ( $num % 2 !== 0 ) {
        continue;
    }

    echo $num . "<br>";

}

$persons = [
    "Mykhailo" => "33",
    "Michael" => "22",
    "Mike"  => "11"
];

foreach ( $persons as $name => $age ) {

    echo "Name: " . $name . " Age: " .  $age . "<br>";

}