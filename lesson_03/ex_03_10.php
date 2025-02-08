<?php

// Логічні оператори

// логічне І
echo 'TRUE and FALSE ';
var_dump( true and false ); // false
echo '<br>';

// логічне АБО
echo 'TRUE or FALSE ';
var_dump( true or false ); // true
echo '<br>';

// виключене АБО
echo 'TRUE xor FALSE ';
var_dump( true xor false ); // true
echo '<br>';

echo 'TRUE xor TRUE ';
var_dump( true xor true ); // false
echo '<br>';

// заперечення
echo '!TRUE ';
var_dump( !true); // false
echo '<br>';

// логічне І (більший пріоритет, ніж and)
echo 'TRUE && FALSE ';
var_dump( true && false ); // false
echo '<br>';

echo 'TRUE && FALSE and TRUE ';
var_dump( true && false and true ); // false
echo '<br>';

echo 'TRUE && TRUE and TRUE ';
var_dump( true && true and true ); // true
echo '<br>';

// АБО (більший пріоритет, ніж or)
echo 'TRUE || TRUE ';
var_dump( true || false ); // true
echo '<br>';

echo 'TRUE || FALSE or TRUE ';
var_dump( true || false or true ); // true
echo '<br>';