<?php

// Керуючі конструкції

// Інструкція switch-case, групування case

$result = 4;

switch ($result) {
    case 4:
        echo "Вірно";
        break;

    case 0: // (*) групуємо обидва case
    case 3 :
        echo "Невірно" . "<br>";
        echo "Спробуй ще раз" . "<br>";
        break;

    default:
        echo "Неочікуваний результат...";
}