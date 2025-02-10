<?php

// Цикл з передумовою while

$i = 0;

// while ( $i < 10 ) {
//     $i++;

//     echo $i . "<br>";
// }


while ( $i < 10 ) {
    $i++;

    if ( $i == 5 ) {
        continue;
    }

    echo $i . "<br>";
}


// while ( $i < 10 ) {
//     $i++;

//     if ( $i == 5 ) {
//         break;
//     }

//     echo $i . "<br>";
// }
