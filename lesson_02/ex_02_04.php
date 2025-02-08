<?php

// isset()
// unset()

$name = 'Mykhailo';
var_dump(isset($name)); // isset() перевіряє, чи існує задана змінна -> bool(true)


var_dump(isset($name111)); // bool(false)

unset($name); // unset() метод видаляє задану змінну
var_dump($name); // видасть помилку, оскільки змінну $name видалили і її більше не існує
