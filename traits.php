<?php

// Traits - Traits are used to declare methods that can be used in multiple class. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). Traits are declared with the trait keyword.

// PHP - Using Multiple Traits
trait message1 {
  public function msg1() {
    echo "OOP is fun!";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo PHP_EOL;

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();