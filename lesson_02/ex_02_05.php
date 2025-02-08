<?php

define('TEXT', 'Hello, I am a Constant'); // видимість локальна

const KEY = 'dfgdg534kgdkftk4lwtl2k45'; // видимість локальна

define("DATA", [true, 111, 'Hello', 3.14]); // видимість локальна

$isdefined_01 = defined('TEXT');
var_dump($isdefined_01); // bool(true)

$isdefined_02 = defined('KEY');
var_dump($isdefined_02); // bool(true)

$isdefined_03 = defined('DATA');
var_dump($isdefined_03); // bool(true)

$isdefined_04 = defined('WWW');
var_dump($isdefined_04); // bool(false)
