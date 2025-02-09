<?php

// Керуючі конструкції

// Інструкція if-elseif-else

$hour = 12;

if ( $hour < 12) {
    echo "Ранок"; 
} elseif ( $hour == 12) {
    echo "Обід"; 
} else {
    echo "Вечір"; 
}