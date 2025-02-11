<?php

// Параметри та аргументи функції


function concat($value1, $value2) {
    return $value1 . ' ' . $value2 . '!';
}

$name = 'Michael';
$secondName = 'Hurak';

echo concat($name, $secondName);

echo concat('Mykhailo', 'Mykhailovych');