<?php

/**
 * Цикл с постусловием do-while
 */

$week = [
    'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'
];

$day = 0;

do {

    echo $week[$day] . "<br>";

    $day++;

} while ( $day < count($week) );