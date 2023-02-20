<?php

// define()
// const keyword

// define('NUMBER', 50);
// define('NUMBER', 50);

$number = 50;
$number = 70;

// const NUMBER = 50;
// const NUMBER = 70;

// echo NUMBER;

// echo $number;

// Constants don't follow any variable scoping rules.
// They can be defined and accessed fro anywhere.

// const -> global
// variable -> global, local, static

// echo strlen("Omok");
// echo strrev("Hello");

$x = 5985;
// echo var_dump(is_numeric($x));

// cast float to int
$x = 23892.783;
$int_cast = (int)$x;
// echo $int_cast;

// echo (abs(-8.2));

define("CONSTANT", "hello world");
echo CONSTANT;