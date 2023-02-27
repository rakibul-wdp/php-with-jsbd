<?php

/*

PHP OOP - Class Constants
Constants cannot be changed once it is declared.
Class constants can be useful if you need to define some constant data within a class.
A class constant is declared inside a class with the const keyword.

*/

// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting my website";
// }

// echo Goodbye::LEAVING_MESSAGE;

// or, we can access a constant form inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:

class Goodbye {
  const LEAVING_MESSAGE = "tank you for visiting my website";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();