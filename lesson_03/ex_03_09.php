<?php

// Операції порівняння

// порівняння (після перетворення типів)
echo '2 == "2" ';
var_dump( 2 == "2" ); // bool(true)
echo '<br>';

echo '2 == "abc" ';
var_dump( 2 == "abc" ); // bool(false)
echo '<br>';

echo '2 == 2 ';
var_dump( 2 == 2 ); // bool(true)
echo '<br>';

// тотожне порівняння (має той самий тип)
echo '2 === "2" ';
var_dump( 2 === "2" ); // bool(false)
echo '<br>';

echo '2 === 2 ';
var_dump( 2 === 2 ); // bool(true)
echo '<br>';

// не дорівнює (після перетворення типів)
echo '3 != 2 ';
var_dump( 3 != 2 ); // bool(true)
echo '<br>';

// тотожно не дорівнює (має той самий тип)
echo '3 !== "2" ';
var_dump( 3 !== "2" ); // bool(true)
echo '<br>';

// більше (суворо)
echo '3 > 2 ';
var_dump( 3 > 2 ); // bool(true)
echo '<br>';

echo '3 > 3 ';
var_dump( 3 > 3 ); // bool(false)
echo '<br>';

// менше (суворо)
echo '3 < 2 ';
var_dump( 3 < 2 ); // bool(false)
echo '<br>';

echo '3 < 3 ';
var_dump( 3 < 3 ); // bool(false)
echo '<br>';

// більше або дорівнює
echo '3 >= 2 ';
var_dump( 3 >= 2 ); // bool(true)
echo '<br>';

echo '3 >= 3 ';
var_dump( 3 >= 3 ); // bool(true)
echo '<br>';

// менше або дорівнює
echo '3 <= 2 ';
var_dump( 3 <= 2 ); // bool(false)
echo '<br>';

echo '3 <= 3 ';
var_dump( 3 <= 3 ); // bool(true)
echo '<br>';