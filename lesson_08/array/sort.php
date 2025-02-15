<?php

// Сортування масивів

// sort - сортування в порядку зростання
// ksort - сортування за ключем
// asort - сортування за значенням

// ksort, asort - сортують масив таким чином, що зберігається відношення між ключами та значеннями

$fruits = [
    'd' => 'lemon',
    'a' => 'orange',
    'b' => 'banana',
    'c' => 'apple'
];


ksort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";
