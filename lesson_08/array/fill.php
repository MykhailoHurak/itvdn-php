<?php

// Заповнення масиву значеннями

$indexStart = -3;
$count = 5;
$value = 7;

$result = array_fill($indexStart, $count, $value);

// виведення заповненого масиву
print_r($result);