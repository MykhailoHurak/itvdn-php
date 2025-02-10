<?php

// Індексні масиви

//  $arr = array();
//  $arr = [
//      'one',
//       5 => 2,
//       3
//     ];

//  $arr[] = 'four';
//  $arr[5] = 'five';

//  var_dump($arr);

echo "<pre>";

$myArray = array();
$myArray = [1, 2, 3, 4, 5];
var_dump($myArray);

$myArray[] = 'вставлений елемент в кінець масиву';
var_dump($myArray);

$myArray[2] = 'вставлений елемент з індексом 2';
var_dump($myArray);