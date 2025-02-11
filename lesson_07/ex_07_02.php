<?php

// Типи параметрів та значення, що повертаємо

function concat(string $value1, string $value2, string $end = '!'): string {
    return $value1 . ' ' . $value2 . $end;
}

function newLine(int $num = 1) {
    for ( $i = 0; $i < $num; $i++ ) {
        echo "<br>";
    }
}

echo concat('Cristiano', 'Ronaldo', '???');
newLine();
echo concat('Michael', 'Hurak');
newLine();
echo concat('Andrii', 'Shevchenko');
newLine();
