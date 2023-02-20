<?php

// echo "Hello World";

// $text = "Omok tomok amrai";
// echo "I love $text";

// echo "I love " . $text . "!";

// $x = 5;
// $y = 7;
// echo $x + $y;

// $x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// function myTest() {
//   $x = 5; // local scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>"

// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15

// $x = 5;
// $y = 10;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y; // outputs 15

function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();

$name = "Omok Tomok"; // String
$num = 13; // Number
$bool = true; // Boolean
$fruits = ["apple", "banana", "mango"]; // Array

?>