<?php

// interfaces allow you to specify what methods a class should implement. interfaces are declared with the interface keyword.

// interface InterfaceName {
//   public function someMethod1();
//   public function someMethod2($name, $color);
//   public function someMethod3() : string;
// }

// Interface definition
interface Animal {
  public function makeSound();
}

// class definitions
class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

// cat, dog and mouse are all classes that implement the animal interface, which means that all of them are able to make a sound using the makeSound() method.