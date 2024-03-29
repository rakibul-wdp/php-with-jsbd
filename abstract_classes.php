<?php

/*

PHP - What are Abstract Classes and Methods?
abstract classes and methods are when the parent class has named method, but need its child class(es) to fill out the tasks.
An abstract class or method is defined with the abstract keyword:

*/

// abstract class ParentClass {
//   abstract public function someMethod1();
//   abstract public function someMethod2($name, $color);
//   abstract public function someMethod3() : string;
// }

// Parent class
// abstract class Car {
//   public $name;
//   public function __construct($name)
//   {
//     $this->name = $name;
//   }
//   abstract public function intro() : string;
// }

// child classes
// class Audi extends Car {
//   public function intro() : string {
//     return "Choose German Quality ? I'm an $this->name";
//   }
// }

// class Volvo extends Car {
//   public function intro() : string {
//     return "proud to be swedish I'm a $this->name";
//   }
// }

// class Citroen extends Car {
//   public function intro() : string {
//     return "french extravagance I'm a $this->name";
//   }
// }

// // create objects form the child classes
// $audi = new audi("Audi");
// echo $audi->intro();
// echo PHP_EOL;

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo PHP_EOL;

// $citroen = new citroen("citroen");
// echo $citroen->intro();

// PHP - More Abstract Class Examples
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

// in ths example the abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method:

class ChildClass extends ParentClass {
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class-> prefixName("John Doe");
echo PHP_EOL;
echo $class->prefixName("Jane Doe");