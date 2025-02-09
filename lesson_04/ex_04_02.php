<?php

// Керуючі конструкції

// скорочений синтаксис if-else (тернарний оператор)

$hour = 12;

if ( $hour < 19 ) {
    echo "Відчинено";
} else {
   echo "Зачинено";
}

echo "<br>";

$hour_1 = 20;
$state_1 = $hour_1 > 19 ? "Open_1" : "Closed_1";
echo $state_1;

echo "<br>";

$hour_2 = 12;
$state_2 = $hour_2 > 19 ? "Open_2" : "Closed_2";
echo $state_2;
