<?php

// interfaces allow you to specify what methods a class should implement. interfaces are declared with the interface keyword.

// interface InterfaceName {
//   public function someMethod1();
//   public function someMethod2($name, $color);
//   public function someMethod3() : string;
// }

interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();