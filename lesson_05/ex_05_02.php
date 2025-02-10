<?php

// Асоціативні масиви

echo "<pre>";

// значення ключа string | int
// $arr = [
//     1    => "a", // 1
//     "5"  => "b", // 5
//     2.5  => "c", // 2
//     true => "d", // true -> 1, false -> 0
//     null => "e"  // ""
// ];

// print_r($arr);

// $boys = [
//     "Peter" => 35,
//     "Ben"   => 37,
//     "Joe"   => 43
// ];

// $boys[] = 19;

// print_r($boys);

// echo "</pre>";

$myCard = [
    'name' => 'Mike',
    'age' => 33,
    'hobby' => 'chess',
    'occupation' => 'frontend developer'
];
var_dump($myCard);

$myCard[] = 'вставлений елемент';
var_dump($myCard);

$myCard['age'] = 22;
var_dump($myCard);

$myCard['status'] = 'happy';
var_dump($myCard);