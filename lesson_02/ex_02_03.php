<?php

$myVarAvaible = true;
$myVarUnavaible = FALSE;
var_dump($myVarAvaible); // bool(true) 
var_dump($myVarUnavaible); // bool(false)  

$myAge = 33;
var_dump($myAge); // int(33)

$currentTemperature = -7;
var_dump($currentTemperature); // int(-7) 

$PI = 3.14;
var_dump($PI); // float(3.14) 

$sayHello = 'Hello, Mike';
var_dump($sayHello); // string(11) "Hello, Mike" 

$sayGoodbye = "Goodbye, Mike";
var_dump($sayGoodbye); // string(13) "Goodbye, Mike" 

$sayGoodbye = 55555555;
var_dump($sayGoodbye); // int(55555555) 

$myVarNull = null;
var_dump($myVarNull); // NULL 

$myVarNull = 'Mykhailo';
var_dump($myVarNull); // string(8) "Mykhailo"