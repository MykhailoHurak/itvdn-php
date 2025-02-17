<?php

// Форматування рядка

// %s - розглядається як рядок
// %d - розглядається як ціле число
// %f - розглядається як число з плаваючою точкою

$name = 'Michael';
$age = 10;
$height = 137.8;

$result = sprintf('My friend\'s name is %s. He is %d years old. His height is %.1f cm.', $name, $age, $height);

// виведення відформатованого рядка
echo $result;